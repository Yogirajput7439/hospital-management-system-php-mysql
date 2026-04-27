<?php
session_start();
include 'connect.php';

if(!isset($_SESSION['user_id'])){
    header("Location: index.php");
    exit();
}

// Filters
$search = isset($_GET['search']) ? $_GET['search'] : '';
$status = isset($_GET['status']) ? $_GET['status'] : '';
$date   = isset($_GET['date']) ? $_GET['date'] : '';

// Query build
$query = "
SELECT appointments.*, patients.name as patient_name, users.name as doctor_name
FROM appointments
JOIN patients ON patients.id = appointments.patient_id
JOIN users ON users.id = appointments.doctor_id
WHERE 1
";

if($search != ''){
    $query .= " AND patients.name LIKE '%$search%'";
}

if($status != ''){
    $query .= " AND appointments.status='$status'";
}

if($date != ''){
    $query .= " AND appointments.appointment_date='$date'";
}

$query .= " ORDER BY appointments.id DESC";

$result = mysqli_query($conn,$query);

// Counts
$total = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM appointments"));
$pending = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM appointments WHERE status='pending'"));
$completed = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM appointments WHERE status='completed'"));
?>

<!DOCTYPE html>
<html>
<head>
<title>Appointments</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<style>

body{
    margin:0;
    font-family:'Poppins',sans-serif;
    background:linear-gradient(135deg,#0f172a,#1e3a8a,#0ea5e9);
    background-size:400% 400%;
    animation:bg 10s infinite;
    color:white;
}

@keyframes bg{
    0%{background-position:0%}
    50%{background-position:100%}
    100%{background-position:0%}
}

/* Sidebar */
.sidebar{
    width:250px;
    height:100vh;
    position:fixed;
    background:rgba(0,0,0,0.8);
    backdrop-filter:blur(10px);
}

.sidebar h2{
    text-align:center;
    padding:20px;
}

.sidebar a{
    display:block;
    padding:15px;
    color:white;
    text-decoration:none;
}

.sidebar a:hover{
    background:#334155;
}

/* Main */
.main{
    margin-left:250px;
    padding:20px;
}

/* Cards */
.cards{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
    gap:20px;
}

.card{
    background:rgba(255,255,255,0.1);
    padding:20px;
    border-radius:12px;
    text-align:center;
}

/* Filters */
.filters{
    margin-top:20px;
    display:flex;
    gap:10px;
    flex-wrap:wrap;
}

input,select{
    padding:10px;
    border:none;
    border-radius:6px;
}

/* Table */
table{
    width:100%;
    margin-top:20px;
    border-collapse:collapse;
    background:rgba(255,255,255,0.1);
}

th,td{
    padding:12px;
}

th{
    background:rgba(0,0,0,0.5);
}

/* Status */
.status{
    padding:5px 10px;
    border-radius:5px;
}

.pending{background:orange;}
.completed{background:green;}
.cancelled{background:red;}

/* Buttons */
.btn{
    padding:6px 10px;
    border:none;
    border-radius:5px;
    cursor:pointer;
}

.complete{background:green;color:white;}
.cancel{background:red;color:white;}

</style>
</head>

<body>

<div class="sidebar">
    <h2>Aditya Hospital</h2>
    <a href="receptionist_dashboard.php">Dashboard</a>
    <a href="#">Appointments</a>
    <a href="logout.php">Logout</a>
</div>

<div class="main">

<h1>Appointments Management</h1>

<!-- Cards -->
<div class="cards">
    <div class="card">
        <h3>Total</h3>
        <p><?php echo $total; ?></p>
    </div>

    <div class="card">
        <h3>Pending</h3>
        <p><?php echo $pending; ?></p>
    </div>

    <div class="card">
        <h3>Completed</h3>
        <p><?php echo $completed; ?></p>
    </div>
</div>

<!-- Filters -->
<form method="GET" class="filters">
    <input type="text" name="search" placeholder="Search Patient">
    
    <select name="status">
        <option value="">All Status</option>
        <option value="pending">Pending</option>
        <option value="completed">Completed</option>
        <option value="cancelled">Cancelled</option>
    </select>

    <input type="date" name="date">

    <button class="btn">Filter</button>
</form>

<!-- Table -->
<table>
<tr>
    <th>ID</th>
    <th>Patient</th>
    <th>Doctor</th>
    <th>Date</th>
    <th>Status</th>
    <th>Action</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)){ ?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['patient_name']; ?></td>
    <td><?php echo $row['doctor_name']; ?></td>
    <td><?php echo $row['appointment_date']; ?></td>

    <td>
        <span class="status <?php echo $row['status']; ?>">
            <?php echo ucfirst($row['status']); ?>
        </span>
    </td>

    <td>
        <a href="update_status.php?id=<?php echo $row['id']; ?>&status=completed">
            <button class="btn complete">✔</button>
        </a>

        <a href="update_status.php?id=<?php echo $row['id']; ?>&status=cancelled">
            <button class="btn cancel">✖</button>
        </a>
    </td>
</tr>
<?php } ?>

</table>

</div>

</body>
</html>
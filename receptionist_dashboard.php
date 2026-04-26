<?php
session_start();
include 'connect.php';

if(!isset($_SESSION['user_id']) || $_SESSION['role'] != 'receptionist'){
    header("Location: index.php");
    exit();
}

// Counts
$totalPatients = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM patients"));
$totalAppointments = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM appointments"));
$pendingAppointments = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM appointments WHERE status='pending'"));

// Latest Appointments
$appointments = mysqli_query($conn,"
SELECT patients.name, appointments.*
FROM appointments
JOIN patients ON patients.id = appointments.patient_id
ORDER BY appointments.id DESC LIMIT 5
");
?>

<!DOCTYPE html>
<html>
<head>
<title>Receptionist Dashboard</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<style>

body{
    margin:0;
    font-family: 'Poppins', sans-serif;
    background:#eef2f7;
}

/* Sidebar */
.sidebar{
    width:250px;
    height:100vh;
    background:linear-gradient(180deg,#0f172a,#1e293b);
    color:white;
    position:fixed;
}

.sidebar h2{
    text-align:center;
    padding:20px;
}

.sidebar a{
    display:block;
    padding:15px 20px;
    color:#cbd5e1;
    text-decoration:none;
    transition:0.3s;
}

.sidebar a:hover{
    background:#334155;
    color:white;
}

/* Topbar */
.topbar{
    margin-left:250px;
    height:60px;
    background:white;
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:0 20px;
    box-shadow:0 2px 5px rgba(0,0,0,0.1);
}

/* Main */
.main{
    margin-left:250px;
    padding:20px;
}

/* Cards */
.cards{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:20px;
}

.card{
    background:white;
    padding:20px;
    border-radius:12px;
    box-shadow:0 4px 10px rgba(0,0,0,0.05);
    transition:0.3s;
}

.card:hover{
    transform:translateY(-5px);
}

.card h3{
    margin:0;
    color:#64748b;
}

.card p{
    font-size:28px;
    margin:10px 0 0;
    font-weight:bold;
}

/* Buttons */
.btn{
    padding:12px 18px;
    margin:10px 10px 0 0;
    background:#3b82f6;
    color:white;
    border:none;
    border-radius:8px;
    cursor:pointer;
}

.btn:hover{
    background:#2563eb;
}

/* Table */
table{
    width:100%;
    border-collapse:collapse;
    margin-top:20px;
    background:white;
    border-radius:10px;
    overflow:hidden;
}

th,td{
    padding:12px;
    text-align:left;
}

th{
    background:#1e293b;
    color:white;
}

tr:nth-child(even){
    background:#f8fafc;
}

.status{
    padding:5px 10px;
    border-radius:6px;
    color:white;
    font-size:12px;
}

.pending{background:orange;}
.completed{background:green;}

</style>

</head>

<body>

<!-- Sidebar -->
<div class="sidebar">
    <h2>🏥 Aditya Hospital</h2>
    <a href="#">Dashboard</a>
    <a href="add_patient.php">➕ Add Patient</a>
    <a href="view_patients.php">📋 Patients</a>
    <a href="book_appointment.php">📅 Book Appointment</a>
    <a href="appointments_list.php">📖 Appointments</a>
    <a href="logout.php">🚪 Logout</a>
</div>

<!-- Topbar -->
<div class="topbar">
    <h3>Receptionist Panel</h3>
    <span>Welcome 👩‍⚕️</span>
</div>

<!-- Main -->
<div class="main">

    <!-- Cards -->
    <div class="cards">
        <div class="card">
            <h3>Total Patients</h3>
            <p><?php echo $totalPatients; ?></p>
        </div>

        <div class="card">
            <h3>Total Appointments</h3>
            <p><?php echo $totalAppointments; ?></p>
        </div>

        <div class="card">
            <h3>Pending</h3>
            <p><?php echo $pendingAppointments; ?></p>
        </div>
    </div>

    <!-- Actions -->
    <h2>Quick Actions</h2>
    <a href="add_patient.php"><button class="btn">Add Patient</button></a>
    <a href="book_appointment.php"><button class="btn">Book Appointment</button></a>

    <!-- Recent Appointments -->
    <h2>Recent Appointments</h2>

    <table>
        <tr>
            <th>Patient</th>
            <th>Date</th>
            <th>Status</th>
        </tr>

        <?php while($row = mysqli_fetch_assoc($appointments)){ ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['appointment_date']; ?></td>
            <td>
                <span class="status <?php echo $row['status']; ?>">
                    <?php echo ucfirst($row['status']); ?>
                </span>
            </td>
        </tr>
        <?php } ?>

    </table>

</div>

</body>
</html>
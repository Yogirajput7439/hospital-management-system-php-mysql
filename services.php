<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - ADITYA HOSPITAL</title>

    <!-- CSS Link -->
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>

<body>
    <?php
    session_start();

    if(!isset($_SESSION['user_id'])){
        header("Location: index.php");
        exit();
    }
    ?>

<!-- Navbar -->
<header class="navbar">
    <div class="logo">A+ ADITYA HOSPITAL</div>
    <nav class="nav-links">
        <a href="home.php">Home</a>
        <a href="services.php">Services</a>
        <a href="doctors.php">Doctors</a>
        <a href="contact.php">Contact</a>
    </nav>
</header>

<!-- Heading -->
<section class="heading">
    <h1>Our Medical Services</h1>
    <p>Comprehensive healthcare solutions for you and your family</p>
</section>

<!-- Services -->
<section class="services-container">

    <div class="card">
        <span>🚑</span>
        <h3>Emergency Care</h3>
        <p>24/7 emergency services with quick response.</p>
    </div>

    <div class="card">
        <span>❤️</span>
        <h3>Cardiology</h3>
        <p>Advanced heart care and treatments.</p>
    </div>

    <div class="card">
        <span>🦴</span>
        <h3>Orthopedics</h3>
        <p>Bone and joint specialist treatments.</p>
    </div>

    <div class="card">
        <span>👶</span>
        <h3>Pediatrics</h3>
        <p>Care for infants and children.</p>
    </div>

    <div class="card">
        <span>🤰</span>
        <h3>Gynecology</h3>
        <p>Women's health and maternity care.</p>
    </div>

    <div class="card">
        <span>🧠</span>
        <h3>Neurology</h3>
        <p>Brain and nervous system care.</p>
    </div>

    <div class="card">
        <span>🔬</span>
        <h3>Diagnostics</h3>
        <p>Lab tests, X-ray, MRI facilities.</p>
    </div>

    <div class="card">
        <span>💊</span>
        <h3>Pharmacy</h3>
        <p>24/7 medicine availability.</p>
    </div>

</section>

<!-- Bottom Section -->
<section class="bottom-section">
    <h2>Get Well Soon ❤️</h2>
    <p>We care for your health and happiness</p>
    <p><strong>With Love from ADITYA HOSPITAL</strong></p>
</section>

<!-- Footer -->
<footer class="footer">
    © 2026 ADITYA HOSPITAL | All Rights Reserved
</footer>


<style>
    body{
        margin:0;
        font-family: Arial, sans-serif;
        background:#f4f7fb;
    }

    /* Navbar */
    .navbar{
        display:flex;
        justify-content: space-between;
        align-items:center;
        padding:15px 40px;
        background:#111;
        color:white;
        position: sticky;
        top:0;
    }

    .logo{
        font-size:22px;
        font-weight:bold;
        color:#00c6ff;
    }

    .nav-links a{
        color:white;
        text-decoration:none;
        margin:0 15px;
        transition:0.3s;
    }

    .nav-links a:hover{
        color:#00c6ff;
    }

    /* Heading */
    .heading{
        text-align:center;
        margin:40px 0;
    }

    .heading h1{
        font-size:36px;
    }

    .heading p{
        color:gray;
    }

    /* Services */
    .services-container{
        display:grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap:45px;
        padding:20px 40px;
    }

    .card{
        background:white;
        padding:25px;
        border-radius:15px;
        text-align:center;
        transition:0.3s;
        box-shadow:0 4px 12px rgba(0,0,0,0.1);
    }

    .card:hover{
        transform: translateY(-10px) scale(1.03);
        box-shadow:0 10px 25px rgba(0,0,0,0.2);
    }

    .card span{
        font-size:40px;
    }

    .card h3{
        margin:10px 0;
    }

    .card p{
        color:gray;
    }

    /* Bottom Section */
    .bottom-section{
        margin-top:50px;
        background: linear-gradient(to right, #00c6ff, #0072ff);
        color:white;
        text-align:center;
        padding:40px 20px;
    }

    .bottom-section h2{
        font-size:30px;
    }

    /* Footer */
    .footer{
        text-align:center;
        padding:15px;
        background:#111;
        color:white;
    }
</style>
</body>
</html>
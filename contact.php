<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us - ADITYA HOSPITAL</title>

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
    background: rgba(0,0,0,0.85);
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

/* Contact Section */
.contact-container{
    display:flex;
    flex-wrap:wrap;
    justify-content:center;
    gap:30px;
    padding:20px 40px;
}

/* Contact Form */
.contact-form{
    background:white;
    padding:25px;
    border-radius:15px;
    width:350px;
    box-shadow:0 4px 15px rgba(0,0,0,0.1);
}

.contact-form h2{
    margin-bottom:15px;
}

.contact-form input,
.contact-form textarea{
    width:100%;
    padding:10px;
    margin:8px 0;
    border-radius:8px;
    border:1px solid #ccc;
    outline:none;
}

.contact-form input:focus,
.contact-form textarea:focus{
    border-color:#00c6ff;
}

/* Button */
.btn{
    width:100%;
    padding:10px;
    border:none;
    background:#00c6ff;
    color:white;
    border-radius:25px;
    cursor:pointer;
    transition:0.3s;
}

.btn:hover{
    background:#0072ff;
}

/* Contact Info */
.contact-info{
    background:white;
    padding:25px;
    border-radius:15px;
    width:350px;
    box-shadow:0 4px 15px rgba(0,0,0,0.1);
}

.contact-info h2{
    margin-bottom:15px;
}

.info-item{
    margin:10px 0;
    color:#333;
}

/* Map */
.map{
    margin:40px;
}

iframe{
    width:100%;
    height:300px;
    border:none;
    border-radius:15px;
}

/* Footer */
.footer{
    text-align:center;
    padding:15px;
    background:#111;
    color:white;
    margin-top:30px;
}
</style>

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
<div class="navbar">
    <div class="logo">A+ ADITYA HOSPITAL</div>
    <div class="nav-links">
        <a href="home.php">Home</a>
        <a href="services.php">Services</a>
        <a href="doctors.php">Doctors</a>
        <a href="contact.php">Contact</a>
    </div>
</div>

<!-- Heading -->
<div class="heading">
    <h1>Contact Us</h1>
    <p>We are here to help you 24/7</p>
</div>

<!-- Contact Section -->
<div class="contact-container">

    <!-- Form -->
    <div class="contact-form">
        <h2>Send Message</h2>
        <form>
            <input type="text" placeholder="Your Name" required>
            <input type="email" placeholder="Your Email" required>
            <input type="text" placeholder="Phone Number">
            <textarea rows="5" placeholder="Your Message"></textarea>
            <button class="btn">Submit</button>
        </form>
    </div>

    <!-- Info -->
    <div class="contact-info">
        <h2>Contact Info</h2>
        <div class="info-item">📍 Address: Ch. Sambhajinagar, Maharashtra</div>
        <div class="info-item">📞 Phone: +91 9876543210</div>
        <div class="info-item">📧 Email: info@adityahospital.com</div>
        <div class="info-item">🕒 Open: 24/7 Emergency Services</div>
    </div>

</div>

<!-- Map -->
<div class="map">
    <iframe src="https://maps.google.com/maps?q=Aurangabad&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
</div>

<!-- Footer -->
<div class="footer">
    © 2026 ADITYA HOSPITAL | All Rights Reserved
</div>

</body>
</html>
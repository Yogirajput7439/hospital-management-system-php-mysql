<?php
session_start();

if(!isset($_SESSION['user_id'])){
    header("Location: index.php");
    exit();
}

echo "Welcome to Aditya Hospital Dashboard";

print_r($_SESSION);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hospital Website</title>
</head>
<body>
    <div class="container">

        <!-- NAVBAR -->
        <div class="navbar">
            <div class="logo">🏥 ADITYA HOSPITAL</div>
            <div class="menu">
                <a href="menu.php">Menu</a>
                <a href="about.php">About Us</a>
                <a href="services.php">Services</a>
                <a href="doctors.php">Doctors</a>
                <a href="contact.php">Contact</a>
                <a href="logout.php">Logout</a>
            </div>
        </div>

        <div class="top-space"></div>

        <!-- TOP WAVE -->
        <svg class="wave-top" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="0.3"
            d="M0,64L80,80C160,96,320,128,480,138C640,149,800,139,960,128C1120,117,1280,107,1440,96V0H0Z">
            </path>
        </svg>

        <!-- BANNER -->
        <div class="banner">
            <h1>ADITYA HOSPITAL CHATRAPATI SAMBHAJINAGAR</h1>
            <p>Advanced medical services with trusted doctors</p>
            <!-- <button>Book Appointment</button> -->
        </div>

        <!-- OFFERS -->
        <h2 class="section-title"> Our Offers</h2>
        <div class="cards">
            <div class="card"><h3>Health Checkup</h3><p>50% off checkup</p></div>
            <div class="card"><h3>Free Consultation</h3><p>Doctor advice free</p></div>
            <div class="card"><h3>Lab Discount</h3><p>30% off tests</p></div>
        </div>

        <!-- VISIT -->
        <h2 class="section-title"> Visit Us</h2>
        <div class="cards">
            <div class="card"><h3> Emergency</h3><p>24/7 service</p></div>
            <div class="card"><h3> Doctors</h3><p>Expert team</p></div>
            <div class="card"><h3> Booking</h3><p>Easy system</p></div>
        </div>

        <!-- SPECIAL -->
        <h2 class="section-title">⭐ Special Facilities</h2>
        <div class="cards">
            <div class="card"><h3>Modern Equipment</h3></div>
            <div class="card"><h3>ICU Support</h3></div>
            <div class="card"><h3> Ambulance</h3></div>
        </div>

        <!-- DOCTORS -->
        <h2 class="section-title"> Out Special Docoters</h2>
        <div class="doctor-cards">
            <div class="doctor-card">
                <img src="images/sagar.png">
                <h3>Dr. Sagar Rajput</h3>
                <p>Cardiologist</p>
                <div class="rating">⭐⭐⭐⭐⭐</div>
            </div>

            <div class="doctor-card">
                <img src="images/rutik.png">
                <h3>Dr. Rutik Rajput</h3>
                <p>Neurologist</p>
                <div class="rating">⭐⭐⭐⭐⭐</div>
            </div>

            <div class="doctor-card">
                <img src="images/subhash.png">
                <h3>Dr. Subhash Rajput</h3>
                <p>Orthopedic</p>
                <div class="rating">⭐⭐⭐⭐⭐</div>
            </div>
        </div>

        <!-- BOTTOM WAVE -->
        <svg class="wave-bottom" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="0.4"
            d="M0,160L80,170C160,180,320,200,480,190C640,180,800,140,960,140C1120,140,1280,180,1440,220V320H0Z">
            </path>
        </svg>

        <!-- Patient Mangement System  -->

        <div class="patient-container">

            <section class="p-section">

                <h2 class="patient-management-heading">Patient Management</h2>
                
                <div class="patient-cards">
                    
                    <div class="patient-card">
                        <h3>Add Patient</h3>
                        <p>Register a new patient in the system.</p>
                        <a href="add_patient.php" class="btn">Add Patient</a>
                    </div>
                    
                    <div class="patient-card">
                        <h3>View Patients</h3>
                        <p>see the list of registered patients.</p>
                        <a href="view_patients.php" class="btn">View Patients</a>
                    </div>
                    
                </div>
                <div class="wave"></div>
            </section>
        </div>

                <!-- Human Body Part Section -->

        <div class="body-section">
        
            <div class="body-container">
                <button class="prev">&#10094;</button>
                <h2 class="part-text">Human Body Parts</h2>
            
                <div class="slider" id="slider">
                    <div class="body-card">
                        <img src="human-brain.jpg">
                        <p><b>Brain</b></p>
                    </div>

                    <div class="body-card">
                        <img src="human-heart.jpg">
                        <p><b>Heart</b></p>
                    </div>

                    <div class="body-card">
                        <img src="human-chest.jpg">
                        <p><b>Chest</b></p>
                    </div>

                    <div class="body-card">
                        <img src="human-ear.jpg">
                        <p><b>Ear</b></p>
                    </div>

                    <div class="body-card">
                        <img src="human-eye.jpg">
                        <p><b>Eye</b></p>
                    </div>

                    <div class="body-card">
                        <img src="human-Ent.jpg">
                        <p><b>Ent</b></p>
                    </div>

                    <div class="body-card">
                        <img src="human-hands.jpg">
                        <p><b>Hands</b></p>
                    </div>

                    <div class="body-card">
                        <img src="human-gynecology.jpg">
                        <p><b>Gynecology</b></p>
                    </div>
                        <div class="body-card">
                        <img src="human-knee.jpg">
                        <p><b>Knee</b></p>
                    </div>
                        <div class="body-card">
                        <img src="human-leg.jpg">
                        <p><b>Leg</b></p>
                    </div>
                        <div class="body-card">
                        <img src="human-Liver.jpg">
                        <p><b>Liver</b></p>
                    </div>
                        <div class="body-card">
                        <img src="human-lungs.jpg">
                        <p><b>Lungs</b></p>
                    </div>
                        <div class="body-card">
                        <img src="human-spine.jpg">
                        <p><b>Spine</b></p>
                    </div>
                        <div class="body-card">
                        <img src="human-stomach.jpg">
                        <p><b>Stomach</b></p>
                    </div>
                        <div class="body-card">
                        <img src="human-vocal-cord.jpg">
                        <p><b>Vocal Card</b></p>
                    </div>
                        <div class="body-card">
                        <img src="thigh-service-icon.png">
                        <p><b>Thigh Service Icon</b></p>
                    </div>
                </div>

                <button class="next">&#10095;</button>
            </div>
            <div class="wave"></div>
        </div>
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

    </div>
</body>
    
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
        }
        
        /* BACKGROUND */
        .container {
            position: relative;
            min-height: 100vh;
            overflow-x: hidden;
            background: linear-gradient(135deg, #557a66, #6e86aa, #b7a478, #ceabb7);
        }

        /* NAVBAR */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            padding: 15px 0px;

            display: flex;
            justify-content: space-between;
            align-items: center;

            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);

            color: white;
            z-index: 1000;
        }

        .logo {
            font-size: 22px;
            font-weight: bold;
        }

        .menu a {
            margin: 0 10px;
            text-decoration: none;
            color: white;
            transition: 0.3s;
        }

        .menu a:hover {
            color: green;
        }

        .top-space {
            height: 80px;
        }

        /* WAVES */
        .wave-top {
            position: absolute;
            top: 0;
            width: 100%;
        }

        .wave-bottom {
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        /* BANNER */
        .banner {
            text-align: center;
            color: black;
            padding-top: 120px;
            position: relative;
            z-index: 2;
        }

        .banner h1 {
            font-size: 42px;
        }

        /* .banner button {
            margin-top: 95px;
            padding: 15px 25px;
            border-radius: 25px;
            border: none;
            background: white;
            color: #0072ff;
            cursor: pointer;
        } */

        /* SECTION */
        .section-title {
            text-align: center;
            color: white;
            margin: 50px 0 20px;
            position: relative;
            z-index: 2;
        }

        /* CARDS */
        .cards {
            display: flex;
            justify-content: center;
            gap: 25px;
            flex-wrap: wrap;
            padding: 20px;
            position: relative;
            z-index: 2;
        }

        .card {
            width: 250px;
            padding: 20px;

            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(10px);

            border-radius: 15px;

            color: white;
            text-align: center;

            box-shadow: 0 8px 25px rgba(0,0,0,0.2);

            transition: 0.4s;
        }

        .card:hover {
            transform: translateY(-10px) scale(1.05);
            background: rgba(255,255,255,0.25);
        }

        /* DOCTOR CARDS */
        .doctor-cards {
            display: flex;
            justify-content: center;
            gap: 25px;
            flex-wrap: wrap;
            padding: 20px;
            z-index: 2;
            position: relative;
        }

        .doctor-card {
            width: 260px;
            padding: 20px;

            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(10px);

            border-radius: 15px;
            font-family: 'Fira Code', monospace;
            text-align: center;
            color: white;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.44);

            transition: 0.4s;
        }

        .doctor-card:hover {
            transform: translateY(-10px) scale(1.05);
        }

        .doctor-card img {
            width: 100%;
            height: 320px;
            border-radius: 10px;
            object-fit: cover;
        }

        .rating {
            color: gold;
            margin-top: 5px;
        }

        .patient-container {
            position: relative;
            min-height: 100vh;
            /* overflow-x: hidden; */
        }

        .patient-container::before {
            content: "";
            position: absolute;
            bottom: 0;
            width: 200%;
            height: 200px;

            background: rgba(238, 249, 114, 0.15);
            border-radius: 45%;

            animation: wave1 8s linear infinite;
        }

        /* Wave 2 */
        .patient-container::after {
            content: "";
            position: absolute;
            bottom: 0;
            width: 200%;
            height: 180px;

            background: rgba(247, 131, 224, 0.17);
            border-radius: 40%;

            animation: wave2 6s linear;
        }

        @keyframes wave1 {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        @keyframes wave2 {
            0% { transform: translateX(0); }
            100% { transform: translateX(-30%); }
        }

        .p-section{
            padding:100px;
            background:#f5f5f5;
            text-align:center;
            overflow: hidden;
            animation: linear infinite;
            background: transparent;
        }
        
        .p-section h2{
            font-size:32px;
            margin: 100px;
        }

        .patient-cards{
            display:flex;
            justify-content:center;
            gap:150px;
            /* border: 2px solid black; */
        }

        /* card */

        .patient-card {
            background:white;
            padding:30px;
            width:300px;
            border-radius:12px;
            border: 1px black;
            box-shadow:0 5px 15px rgba(0.2,0.2,0,0.2);
            transition:0.3s;
            background-color: rgba(245, 248, 243, 0);
        }

        .patient-card:hover{
            transform:translateY(-10px);
        }

        /* title */

        .patient-card h3{
            font-size:24px;
            margin-bottom:10px;
        }

        /* button */

        .btn{
            display:inline-block;
            margin-top:15px;
            padding:10px 20px;
            background:#007bff;
            color:white;
            text-decoration:none;
            border-radius:6px;
            background-color: rgba(112, 241, 138, 0.99);
        }

        .btn:hover{
            background:rgba(3, 255, 226, 0.96);
        }

        /* stylessheet for the human parts img */

        .body-section {
            padding: 0px;
            background: transparent;
            align-items:center;
        }
        .body-section h2 {
            display: flex;
            text-align:center;
            justify-content: center;
            align-items: center;

        }

        .body-container {
            position: relative;
            overflow-x: hidden;
            overflow-y: hidden;
            text-align: center;
        }

        .body-container::before {
            content: "";
            position: absolute;
            bottom: 0;
            width: 200%;
            height: 200px;
            background: rgba(201, 252, 226, 0.11);
            border-radius: 45%;
            animation: wave1 8s linear infinite;
        }

        /* Wave 2 */
        .body-container::after {
            content: "";
            position: absolute;
            bottom: 0;
            width: 200%;
            height: 180px;

            background: rgba(245, 248, 245, 0.17);
            border-radius: 40%;

            animation: wave2 26s linear infinite;
        }

        @keyframes wave1 {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        @keyframes wave2 {
            0% { transform: translateX(0); }
            100% { transform: translateX(-30%); }
        }

        .slider {
            display: flex;
            overflow-x: auto;
            scroll-behavior: smooth;
            transition-property: transform;
        }

        .slider::-webkit-scrollbar {
            display: none;
        }

        /* .part-text {
            display: flex;
            margin : 50px;
            justify-content: center;
            height: 80px;
            width: 400px;
            text-align: center;
            align-items: center;
            border:2px solid black;
            border-radius: 14px;
            background: transparent;

        } */

        .body-card {
            min-width: 230px;
            min-height:300px;
            background: transparent;
            margin: 30px;
            padding: 15px;
            text-align: center;
            transition: 0.3s;
            backdrop-filter: blur(10px);
            border-radius: 10px;
            border: 2px solid rgba(18, 18, 18, 0.53);
        }

        .body-card img {
            width: 200px;
            height: 220px;
            border-radius: 20px;
            margin-top: 17px;
        }
        .body-card p {
            text:bold;
        }
        .body-card:hover {
            transform: scale(1.08);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.40);

        }

        /* Buttons */
        button {
            position: absolute;
            top: 40%;
            background: white;
            border: none;
            font-size: 25px;
            cursor: pointer;
            padding: 10px;
        }

        .prev { left: 0; }
        .next { right: 0; }

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
<body>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Aditya Hospital Login</title>

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins', sans-serif;
}

body{
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background: linear-gradient(135deg, #1e3c72, #2a5298);
}

/* Main Container */
.container{
    display:flex;
    width:900px;
    height:520px;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 20px 50px rgba(0,0,0,0.3);
}

/* Left Section */
.left{
    flex:1;
    background: url('https://images.unsplash.com/photo-1586773860418-d37222d8fce3') no-repeat center;
    background-size:cover;
    position:relative;
}

.left::before{
    content:'';
    position:absolute;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.6);
}

.left-content{
    position:absolute;
    color:white;
    bottom:50px;
    left:30px;
}

.left-content h1{
    font-size:30px;
    font-weight:600;
}

.left-content p{
    font-size:14px;
    opacity:0.85;
    margin-top:10px;
}

/* Right Section */
.right{
    flex:1;
    background:white;
    display:flex;
    justify-content:center;
    align-items:center;
}

/* Login Box */
.login-box{
    width:320px;
}

.login-box h2{
    text-align:center;
    margin-bottom:10px;
    color:#2a5298;
}

.hospital-name{
    text-align:center;
    font-size:13px;
    color:#555;
    margin-bottom:20px;
}

/* Inputs */
.input-group{
    margin-bottom:15px;
}

.input-group input{
    width:100%;
    padding:12px;
    border-radius:8px;
    border:1px solid #ccc;
    outline:none;
    transition:0.3s;
}

.input-group input:focus{
    border-color:#2a5298;
    box-shadow:0 0 8px rgba(42,82,152,0.3);
}

/* Dropdown */
select{
    width:100%;
    padding:12px;
    border-radius:8px;
    border:1px solid #ccc;
    margin-bottom:15px;
}

/* Button */
button{
    width:100%;
    padding:12px;
    border:none;
    border-radius:8px;
    background:#2a5298;
    color:white;
    font-size:16px;
    cursor:pointer;
    transition:0.3s;
}

button:hover{
    background:#1e3c72;
}

/* Options */
.options{
    display:flex;
    justify-content:space-between;
    font-size:12px;
    margin-bottom:10px;
}

/* Links */
.extra{
    margin-top:15px;
    text-align:center;
    font-size:13px;
}

.extra a{
    color:#2a5298;
    text-decoration:none;
}

.extra a:hover{
    text-decoration:underline;
}

</style>
</head>

<body>

<div class="container">

    <!-- Left Side -->
    <div class="left">
        <div class="left-content">
            <h1>Aditya Hospital</h1>
            <p>Chhatrapati Sambhajinagar</p>
            <p>Advanced Care | Trusted Professionals</p>
        </div>
    </div>

    <!-- Right Side -->
    <div class="right">
        <div class="login-box">

            <h2>Login</h2>
            <div class="hospital-name">Secure Access Portal</div>

            <form action="login.php" method="POST">

                <select name="role" required>
                    <option value="">Login As</option>
                    <option value="admin">Admin</option>
                    <option value="doctor">Doctor</option>
                    <option value="patient">Patient</option>
                    <option value="receptionist">Receptionist</option>
                </select>

                <div class="input-group">
                    <input type="email" name="email" placeholder="Enter Email" required>
                </div>

                <div class="input-group" style="position:relative;">
                    <input type="password" id="password" name="password" placeholder="Enter Password" required>

                    <span onclick="togglePassword()" style="
                        position:absolute;
                        right:10px;
                        top:50%;
                        transform:translateY(-50%);
                        cursor:pointer;
                        font-size:14px;
                        color:#2a5298;
                    ">👁️</span>
                </div>

                <div class="options">
                    <label><input type="checkbox"> Remember</label>
                </div>

                <button type="submit">Login</button>

            </form>

            <div class="extra">
                <a href="#">Forgot Password?</a><br>
                <a href="#">Create Account</a>
            </div>

        </div>
    </div>

</div>
<script>
    function togglePassword() {
        var pass = document.getElementById("password");

        if (pass.type === "password") {
            pass.type = "text";
        } else {
            pass.type = "password";
        }
    }
</script>
</body>
</html>
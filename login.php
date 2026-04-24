<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include 'connect.php';

if(isset($_POST['email'], $_POST['password'], $_POST['role'])){

    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $role = $_POST['role'];

    $query = "SELECT * FROM users WHERE email='$email' AND password='$password' AND role='$role'";
    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);

        $_SESSION['user_id'] = $row['id'];
        $_SESSION['role'] = $row['role'];

        if($row['role'] == 'admin'){
            header("Location: home.php");
            exit();
        }
        elseif($row['role'] == 'doctor'){
            header("Location: doctors_dashboard.php");
            exit();
        }
        elseif($row['role'] == 'receptionist'){
            header("Location: receptionist_dashboard.php");
            exit();
        }
        else{
            header("Location: home.php");
            exit();
        }

    } else {
        echo "<script>alert('Login Failed'); window.location='index.php';</script>";
    }

} else {
    header("Location: index.php");
    exit();
}
?>
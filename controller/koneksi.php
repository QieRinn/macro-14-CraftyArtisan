<?php
session_start(); // Mulai sesi

$host = "localhost";
$user = "root";
$password = "";
$dbname = "test";


// Buat koneksi
$conn = mysqli_connect($host, $user, $password, $dbname);


 if(isset($_POST['proses'])){
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Periksa apakah pengguna ada di database
    $query = mysqli_query($conn,"SELECT * FROM cratyartisan WHERE username = '$username' AND password = '$password'");

    if ($query->num_rows == 1) {
        // Login berhasil
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        echo '<script>window.location.href = "../model/index.php";</script>';
    }else {
        echo '<script>';
        echo 'alert("Gagal Login! username atau password salah.")';
        echo '</script>';
        echo '<script>window.location.href = "../model/login-signnup.php";</script>';
    }
  }
?>


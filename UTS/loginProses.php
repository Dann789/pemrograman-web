<?php
if (session_status() === PHP_SESSION_NONE)
    session_start();

include "config/koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM pengguna WHERE username = '$username' and password = '$password'";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);

if ($row['level'] == 'admin') {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'login';
    header("location: halamanAdmin.php"); 

} else if ($row['level'] == 'user') {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'login';
    
    if (isset($_POST['remember'])) {
        setcookie("user", $username, time() + 3600);
    }

    header("location: halamanUser.html");

} else {
    header("location: loginForm.html");
    echo mysqli_error($koneksi);
}
?>
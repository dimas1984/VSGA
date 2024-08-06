<?php
include "koneksi.php";
$username = $_POST['username'];
$password = md5($_POST['password']);

$queryUser = "select * from user where username='$username' and password ='$password'";

$result = mysqli_query($connect,$queryUser);

$fechResult = mysqli_fetch_assoc($result);

// untuk mengecek 
if ($fechResult['role']=='admin') {
    echo "anda berhasil login";
    echo "<a href ='adminDashboard.php'>Admin </a>";

} elseif($fechResult['role']=='user') {
    echo "anda berhasil login sebagai user";
    echo "<a href ='userDashboard.php'>User Dashboard </a>";
} else {
    echo "anda tidak berhasil login";
    echo "<a href='loginForm.php'>Login Form</a>";
}
mysqli_close($connect);


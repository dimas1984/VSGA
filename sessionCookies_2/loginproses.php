<?php
include "koneksi.php";
$username = $_POST['username'];
$password = md5($_POST['password']);

$queryUser = "select * from user where username='$username' and password ='$password'";
// var_dump($username);
// var_dump($password);
// var_dump($queryUser);
// var_dump($queryUser);
// die();
$result = mysqli_query($connect,$queryUser);
// $result = mysqli_query($connect, "select*from user  where username='$username' and password ='$password'");
// var_dump($result);
// die();

$rowcount = mysqli_num_rows($result);
// var_dump($rowcount);
// die();

// untuk mengecek 
if ($rowcount > 0) {
    // var_dump($rowcount);
    // die();
    echo "anda berhasil login";
    echo "<a href ='adminDashboard.php'>Admin </a>";

} else {
    echo "anda tidak berhasil login";
    echo "<a href ='loginForm.php'>Admin </a>";
}
mysqli_close($connect);


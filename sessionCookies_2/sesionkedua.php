<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session</title>
</head>
<body>
     <h1> belajar session </h1>
     <?php 
     $_SESSION["username"]="dino";
     $_SESSION["pass"]="009";
     $_SESSION["akses"]="admin";
     $_SESSION["pekerjaan"]="mahasiswa";
     ?>
</body>
</html>
<?php 
session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> session</h1>
    <h2> cookies untuk session sudah dibuat</h2>
    <?php
    $_SESSION["nama"]="dino";
    $_SESSION["id"]="007";
    $_SESSION["hakakses"]="super_user";
    ?>
</body>
</html>
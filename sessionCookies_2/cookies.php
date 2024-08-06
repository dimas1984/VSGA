<?php 
    setcookie("namakeempat","VSGAkeempat");
    echo "ini pakai php Cookies berhasil di setting";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar Cookies</title>
</head>
<body>
    <h1> ini pakai html belajar cookies</h1>
    <?php
    print_r($_COOKIE); 
    ?>
</html>
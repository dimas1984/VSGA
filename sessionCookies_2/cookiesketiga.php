<?php 
setcookie("kampus","Polinema");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kampus</title>
</head>
<body>
    <h1> ini kampus </h1>
    <?php
    if (isset($_COOKIE["kampus"])){
        echo "cek isi cookie 'kampus' adalah".$_COOKIE["kampus"];
    }
    else{
        echo "Cookie kampus belum ada";
    }
    ?>
</body>
</html>
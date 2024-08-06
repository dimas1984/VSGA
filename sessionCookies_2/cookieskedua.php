<?php 
    if(isset($_COOKIE["namakeempat"])){
        echo " (ini php )ini untuk mengecek dari cookies  'nama' adalah".$_COOKIE["namakeempat"];
    }
    else
    {
        echo "Cookies 'nama belum ada'";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar Cookies kedua</title>
</head>
<body>
    <h1> ini cookies</h1>
    <?php 
        echo "(dari html) isi dari cookies 'name' adalah " .$_COOKIE["namakeempat"];
    ?>
</body>
</html>


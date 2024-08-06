<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1> selamat datang di dashboard</h1> -->
    <?php 
   //session_start();
    if($_SESSION['status']=="login"){
        var_dump($_SESSION['status']);
        echo'<h1> selamat datang '.$_SESSION['username'].'</h1><br>';
        var_dump( $_SESSION['username']);
        echo '<a href="sessionLogout.php">LOgout </a>';
     }
    ?>
</body>
</html>
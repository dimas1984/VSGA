<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=ini, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>selamat datang di halaman user</h1>
    <?php 
    //session_start();
    // if($_SESSION['status']=='login'){
    //     echo'<h1> selamat datang'.$_SESSION['username'].'</h1><br>';
    //     echo '<a href="sessionLogout.php">LOgout </a>';
    // }
    //  if($_SESSION['login']=="login"){
    // //     var_dump($_SESSION['status']);
    //     // die();
    //     echo'<h1> selamat datang '.$_SESSION['username'].'</h1><br>';
    //     var_dump($_SESSION['username']);
    //     echo '<a href="sessionLogout.php">LOgout </a>';
    //  }

  
    session_start();
    if($_SESSION['login']=="Submit"){
        var_dump($_SESSION['login']);
        echo'<h1> selamat datang '.$_SESSION['username'].'</h1><br>';
        var_dump( $_SESSION['username']);
        echo '<a href="sessionLogout.php">LOgout </a>';
     }
    
    ?>
</body>
</html>
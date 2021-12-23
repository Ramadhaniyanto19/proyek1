<?php
require 'function.php';

if( isset($_POST["Register"])){

    if( Registrasi ($_POST) > 0){
        echo "<script>
        alert('user berhasil ditambahkan')
                </script>";
    } else{
        echo mysqli_error($conn);
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TokoKita</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <!-- Css -->
    <link rel="stylesheet" href="css/tess.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/282f37c3b4.js" crossorigin="anonymous"></script>
</head>

<body class="body-img">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand fs-3 fw-bold" href="index.php">TokoKita</a>
        </div>
    </nav>
    
<div class="container login d-flex justify-content-center">
            <div class="bg-login">
                <h1 class="fw-bold text-center">Registrasi</h1>
                <div class="login-method">
                    <form action="" method="post">
                        <div class="textbox">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <input type="text" placeholder=" Masukan username" name="username" require>
                        </div>
                        <div class="textbox">
                            <i class="fa fa-lock password" aria-hidden="true"></i>
                            <input type="password" placeholder="Masukan password" name="Password" require>
                        </div>
                        <div class="textbox">
                            <i class="fa fa-lock password" aria-hidden="true"></i>
                            <input type="password" placeholder="Masukan password" name="Password2" require>
                        </div>
                        <br>
                    <button type="submit" class="btn log-sub" name="Register">Daftar</button>
                    <p style="color:white">sudah punya akun? <a style="color:greenyellow;" href="login.php">Login</a></p>
                    </form>
                </div>
            </div>
        </div>
<!-- <section>
    <div class="regis justify-content-center container d-flex pb-4">
        <form action="login.php" method="POST">
             <div class="textbox"></div>
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" name="Email">
                <br>
                <i class="fa fa-lock password" aria-hidden="true"></i> 
                <input type="password" name="Password" id="Password">
                <br>
                <i class="fa fa-lock password" aria-hidden="true"></i>
                <input type="password" name="Password2" id="Password">
                <br>
                <button type="submit" name="Register">Register</button>
            </div>
        </form>
     </div>
</section> -->
</body>
</html>
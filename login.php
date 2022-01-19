<?php
session_start();
require 'function.php';
if(isset($_SESSION["login"])){
        if(($_SESSION['level']) =='admin'){
            header("Location: admin/home.php");
            exit;
        }else if($_SESSION['level']=='biasa'){
            header ("Location: index.php");
            exit;
        }
    }




// menangkap data yang dikirim dari form login
if(isset($_POST["login"])){
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn,"SELECT * from user where username='$username'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);
    if($data['level']=="admin"){

          $_SESSION['login']['status'] = true;
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:admin/home.php");
    }else if(password_verify($password, $data['pass'])){
	 if($data['level']=="biasa"){
		// buat session login dan username
          $_SESSION['login']['status'] = true;
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "biasa";
		// alihkan ke halaman dashboard pengurus
		header("location: index.php");

	}	
}else{

		// alihkan ke halaman login kembali
		header("location:login.php");
	}
    }
    $error = true;  

}
	




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jual Kerajinan Tangan Pangandaran</title>
    <!-- Favicon-->
    <link rel="shorcut icon" href="favicon.ico" />
    <link rel="icon" type="image/png" href="ico/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="ico/favicon-16x16.png" sizes="16x16" />    
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <!-- Css -->
    <link rel="stylesheet" href="css/baru.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/282f37c3b4.js" crossorigin="anonymous"></script>
</head>


<body class="body-img">
<nav>
<ul class="nav justify-content-start">
        <li class="nav-item">
         <a class="nav-link active" aria-current="page" href="index.php"><font face="Tentang Nanti Demo" style="color: #8FB8CA" size="6"></font></a>
        </li>        
</ul>
    <ul class="nav-fluid container justify-content-start">
        <a class="navbar-brand fs-10" href="index.php">  
        <img src="assets/img/logo.png" alt="" width="30" height="30" class="d-inline-block align-text-top"> <font face="Java Calligraphy" style="color: #805C5F"  size="3" >Kerajinan Tangan Pangandaran</font></a>  
</nav>
    </ul>
    </nav> 

    <div class="container login d-flex justify-content-start">
            <div class="bg-login">
                <h1 class="fw-bold text-center">Login</h1>
                <div class="login-method">
                    <form action="" method="post">
                         <?php if( isset ($error) ) : ?>
                           <div class="alert alert-dark" role="alert">Maaf username atau password salah!</div>
                         <?php endif; ?>
                        <div class="textbox">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <input type="text" placeholder="Username" name="username" required>
                        </div>
                        <div class="textbox">
                            <i class="fa fa-lock password" aria-hidden="true"></i>
                            <input type="password" placeholder="Masukan password" name="password" required>
                        </div>
                        <br>
                    <button type="submit" class="btn log-sub" name="login">Login</button>
                  </form>
                  <div class="te">
                       <p style="color: white;">Anda belum punya akun? <a href="registrasi.php" style="color: brown;">daftar sekarang
                       </a></p>
                  </div>
                </div>
            </div>
    </div>


    <!-- <div class="login">
        <form action="index.php" method="post">
            <ul>
                <li>
                    <label for="Email">Email : </label>
                    <input type="text" name="email" id="email">
                </li>
                <li>
                    <label for="Password">Password : </label>
                    <input type="text" name="password" id="email">
                </li>
                <li>
                    <button name="login" type="submit">Login</button>
                </li>

            </ul>
        </form>
    </div> -->
    <!-- footnote -->
    <footer class="py-5">
        <div class="">
        <div class="btn-group-vertical">
        <a href="https://web.whatsapp.com/" class="btn btn-warning active"><img src="assets/img/whatsapp.png" alt="" width="30" height="30" ></a>
        <a href="https://www.instagram.com/apatuh.ciu/" class="btn btn-warning"><img src="assets/img/instagram.png" alt="" width="30" height="30" ></a>
        <a href="https://mail.google.com/mail/u/0/?hl=en/#inbox" class="btn btn-warning"><img src="assets/img/email.png" alt="" width="30" height="30" ></a>
        </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
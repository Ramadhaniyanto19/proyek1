<?php
session_start();
require 'function.php';
// login("biasa");
if($_SESSION['level']==""){
		header("location: login.php");
	} 
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Jual Kerajinan Tangan Pangandaran</title>
    <!-- Favicon-->
    <link rel="shorcut icon" href="favicon.ico" />
    <link rel="icon" type="image/png" href="ico/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="ico/favicon-16x16.png" sizes="16x16" />  
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Css -->
    <link rel="stylesheet" href="css/baru.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/282f37c3b4.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-light fixed-top" data-aos="fade-down" data-aos-duration = "2000">
  <div class="container-fluid">  
    <a class="navbar-brand fs-6" href="index.php" ><img src="assets/img/logo.png" alt="" width="25" height="25" class="d-inline-block align-text-top"> <font face="Java Calligraphy" style="color: #c08457"; size="4" >Kerajinan Tangan Pangandaran</font></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h1 class="offcanvas-title" id="offcanvasNavbarLabel"><font face="Tentang Nanti Demo" style="color: #c08457">MENU</font></h1>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
        
        <?php
        if($_SESSION['level']=='admin'){?>
          
        <li class="nav-item">
         <a class="nav-link active" aria-current="page" href="admin/home.php"><font face="Tentang Nanti Demo" style="color: #c08457" size="5">Dashboard Admin</font></a>
        </li>
        <?php
        }
          ?>
        <li class="nav-item">
         <a class="nav-link active" aria-current="page" href="index.php"><font face="Tentang Nanti Demo" style="color: #c08457" size="5">Home</font></a>
        </li>
        <li class="nav-item">
         <a class="nav-link" href="produk.php"><font face="Tentang Nanti Demo" style="color: #c08457"  size="5">Products</font></a>
        </li>
        <li class="nav-item">
         <a class="nav-link" href="jadijual.php"><font face="Tentang Nanti Demo" style="color: #c08457" size="5">Mulai Jualan</font></a>
        </li>
        <li class="nav-item">
         <a class="nav-link" href="Faq.php"><font face="Tentang Nanti Demo" style="color: #c08457"  size="5">Bantuan</font></a>
        </li>
        <li class="nav-item">
         <a class="nav-link" href="logout.php"><font face="Tentang Nanti Demo" style="color: #c08457"  size="5">Logout</font></a>
        </li>
      </div>
    </div>
  </div>
</nav>

<!-- slide -->

<img src="assets/img/543.png" class="img-fluid" alt="">


    <!-- text -->
<section class="jumbotron mb-5">
    <div class="container">
      <div class="row">  
        <div class="col-sm-12">
         <h2 class="welcome section-tittle text-center pt-5 profil"></h2>
        </div>
        <div class="text-center">
          <h4 class="testing"></h4>
        </div>   
      </div>
    </div>
</section>


<!-- categori -->
<section class="categori py-5 mt-5" style="background-color: #eaeaea;">
  <div class="container">
    <div class="row">
      <h3 class="justify-content-center text-center border-2 my-3">Galery</h3>
    </div>
    <div class="row ">
      <div class="col-lg-4 py-sm-2 pt-md-2 col-md-6" data-aos="zoom-out-right" data-aos-duration="2000">
        <div class="card bg-primary text-white w-100">
          <img src="assets/img/galeri1.jpg" style="height: 250px;" class="card-img" alt="...">
          <div class="card-img">
            <h5 class="card-title text-center">Penjual Kerang</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-4 py-md-2 py-sm-2 col-md-6" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="200">
        <div class="card bg-primary text-white w-100">
          <img src="assets/img/galeri2.jpg" style="height:250px"  class="card-img" alt="...">
          <div class="card-img">
            <h5 class="card-title text-center">Pengarajin</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-4 py-md-2 py-sm-2 col-md-6" data-aos="zoom-out-left" data-aos-duration="2000" data-aos-delay="300">
        <div class="card bg-primary text-white w-100">
          <img src="assets/img/galeri3.jpg" height="250px" class="card-img" alt="...">
          <div class="card-img">
            <h5 class="card-title text-center">Kegiatan Ibu-Ibu PKK</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-4 py-md-2 py-sm-2 col-md-6" data-aos="zoom-out-left" data-aos-duration="2000" data-aos-delay="400">
        <div class="card bg-primary text-white w-100">
          <img src="assets/img/galeri4.jpg" height="250px"  class="card-img" alt="...">
          <div class="card-img">
            <h5 class="card-title text-center">Pengrajin Kerang</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-4 py-md-2 py-sm-2 col-md-6" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="500">
        <div class="card bg-primary text-white w-100">
          <img src="assets/img/galeri5.jpg" height="250px"  class="card-img" alt="...">
          <div class="card-img">
            <h5 class="card-title text-center">Pengrajin Kerang</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-4 py-md-2 py-sm-2 col-md-6" data-aos="zoom-out-right" data-aos-duration="2000" data-aos-delay="600">
        <div class="card bg-primary text-white w-100">
          <img src="assets/img/galeri6.jpg" height="250px" class="card-img" alt="...">
          <div class="card-img">
            <h5 class="card-title text-center">Pengrajin limbah kulit kerang</h5>
          </div>
        </div>
      </div>
    </div>
   </div>
  </div>  
</section>




    <div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
      </a>
      <span class="text-muted">&copy; 2021 Company, Inc</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-1"><a href="https://web.whatsapp.com/" class=""><img src="assets/img/whatsapp.png" alt="" width="24" height="24" ></a></li>
      <li class="ms-1"><a href="https://www.instagram.com/apatuh.ciu/" class=""><img src="assets/img/instagram.png" alt="" width="24" height="24" ></a></li>
      <li class="ms-1"><a href="https://mail.google.com/mail/u/0/?hl=en/#inbox" class=""><img src="assets/img/email.png" alt="" width="24" height="24" ></a></li>
    </ul>
  </footer>
</div>


    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
  
  <!-- Gsap -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/TextPlugin.min.js"></script>
  <script>
    gsap.registerPlugin(TextPlugin);
    gsap.to(".welcome", {text:"Welcome To Kerajinan Tangan Pangandaran", duration:3});
    gsap.to(".testing", {text:"The online shopping platform for handcrafts of your choice, offers a smooth, fun and reliable shopping experience for millions of users in Indonesia.", duration:12, delay:2});
  </script>
  <!-- AOS -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>
</html>
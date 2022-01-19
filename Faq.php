<?php
session_start();
require 'function.php';
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
    <nav class="navbar navbar-light stiky-top ">
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
  </ul>
      </div>
    </div>
  </div>
  </nav>

<div class="bg-warning p-2 text-warning bg-opacity-25 text-center">  
<br>
<p class="text-center"><font face="Tentang Nanti Demo" style="color: #c08457" size="6" type="text-center" >Hallo, Ada yang bisa kami bantu?</font></p>
<div class="overflow-hidden" style="max-height: 30vh;">
      <div class="container px-5">
        <img src="bantuan.png" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
      </div>
    </div>
</div>

<div class="accordion" id="accordionPanelsStayOpenExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        Belanja disini
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body">
      <button type="button" class="btn btn-sm">Small button</button>
      <br>
      <button type="button" class="btn btn-sm">Small button</button>
      <br>
      <button type="button" class="btn btn-sm">Small button</button>
      <br>
      <button type="button" class="btn btn-sm">Small button</button>
      <br>
      <button type="button" class="btn btn-sm">Small button</button>
      <br>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
        Penawaran Pembelian
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
      <div class="accordion-body">
        Halo kami selaku admin mencoba menjawab pertanyaan anda, dalam menu bantuan ini kami menawarkan kerajinan tangan yang dibuat dari daerah kabupaten pangandaran.
        Dalam beberapa waktu kami mengadakan event diskon atau potongan harga yang bisa mencapai 50%. Jika anda memiliki pertanyaan lain anda dapat menghubungi secara langsung ke whatsapp kami atau melalui gmail kami.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
        Penjual Produk disini
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
      <div class="accordion-body">
      Halo pelanggan setia, kalian tertarik untuk memulai membuka toko? Jika kalian tertarik kalian bisa memilih menu mulai Jualan. Ketika tampilan terbuka kalian akan disuguhi sebuah file pdf
       yang dimana kalian harus download terlebih dahulu dan mengisi datanya. Setelah kalian selesai teradapat sebuah tombol kirim sekarang disebalah pdf tersebut, maka kalian akan diarahkan ke WA kami
       lalu kalian kirimkan pdf yang telah kalian isi.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
        Call Center
      </button>
    </h2>
    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>

<!-- footer -->

<section class="footer pt-5 mt-5 top-50">
  <div class="container">
  <footer class="row row-cols-5 py-5 my-5 border-top">
    <div class="col-3">
      <p class="text-muted">&copy; 2021</p>
      <h5>Contact us</h5>
      <img src="assets/img/qrcode.png" class="img-fluid" alt="">
    </div>

    <div class="col-3">
      <h5>Created By</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2">Mohammad Ramadhaniyanto</li>
        <li class="nav-item mb-2">Suci Rahma Rosa</li>
      </ul>
    </div>

    <div class="col-3">
      <h5>Payment</h5>
      <ul class="nav flex-column">
      <img src="assets/img/bank.png" class="img-fluid" alt="" width="160" height="160">
      </ul>
    </div>

    <div class="col-3">
      <h5>Follow Us</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="https://www.instagram.com/apatuh.ciu/" class="nav-link p-0 text-muted"></a><img src="assets/img/instagram.png" alt="" width="30" height="30" >Instagram</li>
        <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted"></a><img src="assets/img/whatsapp.png" alt="" width="30" height="30" >whatsapp</li>
     </ul>
    </div>

  </footer>
</div>
</section>



    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
  <!-- AOS -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>
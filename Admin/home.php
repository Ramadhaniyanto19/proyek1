<?php include ('template/header.php');?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid pt-2">
                   <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner slideku">
                        <div class="carousel-item active">
                        <img src="../assets/img/kerajinan1.jpg"  class="d-block" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="../assets/img/kerajinan3.jpg" class="d-block" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="../assets/img/kerajinan4.jpg"  class="d-block" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
               
                <div class="isi">
                    <h3 class="pt-2">Selamat datang di halaman Admin</h3>
                    <p>Di halaman ini anda dapat melakukan pengelolaan data mulai dari produk dan juga data penjual. Anda dapat melakukan create, read, update
                        , dan delete. Selain itu anda juga dapat melakukan print data ke dalam bentuk pdf.
                    </p>
                </div>
             </div>
            </main>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>
<?php
session_start();
require_once 'function.php';

    if( !isset($_SESSION["login"])){
        header("Location: login.php");
        exit;
    }

$produk = query("SELECT *FROM produk");

if(isset ($_POST["search"])){
    $produk = cari($_POST["keyword"]);
}
?>




<?php include('template/header.php');?>
      <main>
        <section class="produk">
            <div class="container">
                <div class="row">
                    <form action="" method="POST">
                    <div class="input-group mb-3 pt-4">
                        <input class="form-control" placeholder="Cari Produk" type="search" name="keyword" autocomplete="off">
                        <button class="btn btn-primary" type="submit" name="search" id="button-addon2"> Cari </button>
                    </div>
                    </form>
                        <div class="col-sm-12 mb-3">
                            <h2 class="section-tittle text-center fw-bold">PRODUK</h2>
                        </div>
                        <?php foreach ($produk as $pdk):?>
                        <div class="card me-5 pt-5 border-4 mb-3" style="width: 20rem;">
                            <td><img src="Admin/img/<?php echo $pdk["foto_barang"]; ?>" width="200px"></td>   
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $pdk['nama_barang'];?></h5>
                                <h5 class="card-harga">RP. <?php echo $pdk['harga_barang'];?></h5>
                                <p class="car-text"><?php echo substr($pdk['deskripsi_barang'], 0, 40);?></p>
                            </div>
                            <div class="card-body">
                                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detail<?php echo $pdk['id_barang'];?>">Lihat Detail</a>
                                <a href="https://api.whatsapp.com/send?phone=+6281394671261 &text= hai saya tertarik membeli produk <?php echo $pdk['nama_barang'];?>" class="btn btn-success">Beli </a>
                            </div>
                        </div>
                        <?php endforeach;?>
                </div>
            </div>
        </section>
    
        <!-- Modal tambah data -->
        <?php foreach ($produk as $pdk):?>
                    <div class="modal fade" id="detail<?php echo $pdk['id_barang'];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Detail Barang</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                             <input type="hidden" value="<?php echo $pdk['id'];?>">
                                        </div>
                                        <div class="form-group">
                                             <center><img src="Admin/img/<?php echo $pdk['foto_barang'];?>" width="250px"></center>
                                        </div>
                                        <div class="form-group pt-2">
                                            <p style="font-size: 15px;">Nama Produk : <?php echo $pdk['nama_barang'];?></p>
                                        </div>
                                        <div class="form-group">    
                                            <p style="font-size: 15px;">Harga Produk : Rp. <?php echo $pdk['harga_barang'];?></p>
                                        </div>
                                        <div class="form-group">
                                            <p style="font-size: 15px;">Deskripsi Produk : <br> <?php echo $pdk['deskripsi_barang'];?></h5>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-cancel btn-danger" data-bs-dismiss="modal">Batal</button>
                                        <a href="https://api.whatsapp.com/send?phone=+6281394671261 &text= hai saya tertarik membeli produk <?php echo $pdk['nama_barang'];?>" class="btn btn-cancel btn-success">Beli</a>
                                    </div>
                               </div>
                            </div>
                        </div>
                    </div>
    <?php endforeach;?>
                 <!-- end modal -->
    </main>
    <br>
    <br>
   
    <?php include('template/footer.php');?>
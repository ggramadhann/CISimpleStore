<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="<?= base_url() ?>assets/images/slider3.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?= base_url() ?>assets/images/slider2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?= base_url() ?>assets/images/slider1.jpg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-custom-icon" aria-hidden="true">
            <i class="fas fa-chevron-left"></i>
        </span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-custom-icon" aria-hidden="true">
            <i class="fas fa-chevron-right"></i>
        </span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="produk-terbaru">
    <div class="container my-5 py-5">
        <div class="row ">
            <div class="col-12 mb-3">
                <h3 class="display-6 fw-bolder text-center ">
                    Produk Terbaru
                </h3>
                <hr />
            </div>
        </div>
        <!-- <div class="col-12-mb-5">
            <div class="btnKategori d-flex justify-content-center mb-2">
                <button class="btn btn-sm btn-outline-dark ml-2">All</button>
                <button class="btn btn-sm btn-outline-dark ml-2">Perhiasan</button>
                <button class="btn btn-sm btn-outline-dark ml-2">Elektronik</button>
                <button class="btn btn-sm btn-outline-dark ml-2">Laki-Laki</button>
                <button class="btn btn-sm btn-outline-dark ml-2">Perempuan</button>
            </div>
        </div> -->
    </div>
  <!-- card -->
  <div class='container-fluid'>
    <div class="row justify-content-center">

        <!-- <?= print_r($result)?> -->
        <?php foreach($result as $key => $data ){?>
     <div class="card col-md-3 col-10 mt-5  ml-5">
         <img class='mx-auto img-responsive mt-2'
             src="<?= $data->image?>"
             width="150" height="150"/>
         <div class="card-body text-center mx-auto">
             <div class='cvp'>
                 <h5 class="card-title font-weight-bold"><?= $data->title?></h5>
                 <p class="card-text"><?= $data->price?></p>
                 <!-- <a href="#" class="btn btn-sm btn-dark px-auto">view</a><br /> -->
                 <a href="<?= base_url('Keranjang/checkout'. '/' .$data->id)?>" data="<?= $data->id ?>"  name="id"  value="<?=$data->id?>" class="btn btn-sm btn-dark cart px-auto mt-2">Pesan sekarang</a>
             </div>
         </div>
     </div>
     <?php } ?>
    </div>

</div>
  <!--  -->
</div>
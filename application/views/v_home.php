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
        <div class="col-12-mb-5">
            <div class="btnKategori d-flex justify-content-center mb-2">
                <button class="btn btn-sm btn-outline-dark ml-2">All</button>
                <button class="btn btn-sm btn-outline-dark ml-2">Perhiasan</button>
                <button class="btn btn-sm btn-outline-dark ml-2">Elektronik</button>
                <button class="btn btn-sm btn-outline-dark ml-2">Laki-Laki</button>
                <button class="btn btn-sm btn-outline-dark ml-2">Perempuan</button>
            </div>
        </div>
    </div>
    <div class="produk-list">
        <!--  -->
        <div class="card-deck mx-auto container">
            <!-- <?= print_r($result)?> -->
            <?php foreach($result as $key => $data ){?>
            <div class="card ml-2">
                <img class="image-resposive" width="200px" src="<?= $data->image?>">
                <div class="card-body">
                    <h5 class="card-title"><b><?= $data->title?></b></h5>
                    <p class="card-text"><?= $data->price?></p>
                    <p class="card-text"><small class="text-muted"><button class="btn btn-sm btn-dark">add to cart</button></small></p>
                </div>
            </div>
            <?php } ?>
            <!-- <div class="card ml-2">
                <img class="card-img-top" src="#">
                <div class="card-body">
                    <h5 class="card-title"><b>Judul</b></h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted"><button class="btn btn-sm btn-dark">add to cart</button></small></p>
                </div>
            </div>
            <div class="card ml-2">
                <img class="card-img-top" src="#">
                <div class="card-body">
                    <h5 class="card-title"><b>Judul</b></h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted"><button class="btn btn-sm btn-dark">add to cart</button></small></p>
                </div>
            </div> -->
           
            
        </div>
        <!--  -->
    </div>
</div>
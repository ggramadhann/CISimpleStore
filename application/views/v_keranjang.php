<div class='container-fluid'>
    <div class="row justify-content-center">

        <!-- <?= print_r($result) ?> -->
        <?php foreach ($result as $key => $data) { ?>
            <div class="card col-md-3 col-10 mt-5  ml-5">
                <h5 class="text-center mt-3"><b>Pesanan anda</b></h5>
                <hr>
                <img class='mx-auto img-responsive mt-2' src="<?= $data->image ?>" width="150" height="150" />
                <div class="card-body text-center mx-auto">
                    <div class='cvp'>
                        <h5 class="card-title font-weight-bold"><?= $data->title ?></h5>
                        <p class="card-text">Rp. <?= rupiah($data->price) ?></p>
                        <!-- <a href="#" class="btn btn-sm btn-dark px-auto">view</a><br /> -->
                        <!-- <a href="<?= base_url('Keranjang/checkout' . '/' . $data->id) ?>" data="<?= $data->id ?>"  name="id"  value="<?= $data->id ?>" class="btn btn-sm btn-dark cart px-auto mt-2">Pesan sekarang</a> -->
                    </div>
                </div>
            </div>
        <?php } ?>

        <!-- todo form -->
        <div class="card col-md-7 col-10 mt-5  ml-5">
            <div class="card-body">
                <h5><b>Data diri anda :</b></h5>
                <hr>
                <!-- form checkout -->
                <form action="<?= base_url() ?>Keranjang/tes_post" method="POST">
                <!-- <form action="<?= base_url() ?>Keranjang/storeData" method="POST"> -->
                    <!-- Todo CSRF -->
                    <!-- get id -->
                    <?php foreach ($result as $key => $data) {?>
                        <input type="hidden" class="form-control" id="" value="<?=$data->id?>" name="idx">
                        <input type="hidden" class="form-control" id="" value="<?=$data->title?>" name="tt">
                        <input type="hidden" class="form-control" id="" value="<?=rupiah($data->price)?>" name="hg">
                        <input type="hidden" class="form-control" id="" value="<?=$data->category?>" name="cate">
                        <input type="hidden" class="form-control" id="" value="<?=$data->image?>" name="img">
                    <?php } ?>
                        
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="NamaDepan">Nama Depan</label>
                                <input type="text" class="form-control" id="" value="Nama Depan" name="namaDepan" required>
                                <!-- <small id="email" class="form-text text-muted"></small> -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="NamaBelakang">Nama Belakang</label>
                                <input type="text" class="form-control" id="" placeholder="Nama Belakang" name="namaBelakang" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Email">Email Address</label>
                                <input type="email" class="form-control" id="" placeholder="Email Address" name="email" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Phone">No Tlp</label>
                                <input type="number" class="form-control" id="" placeholder="No telp" name="noTlp" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Negara">Negara</label>
                                <input type="text" class="form-control" id="negara" placeholder="Negara" name="negara" value="Indonesia" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Provinsi">Provinsi</label>
                                <input type="text" class="form-control" id="" placeholder="Provinsi" name="provinsi" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Kota">Kota</label>
                                <input type="text" class="form-control" id="Kota" placeholder="Kota" name="kota" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="KodePos">Kode Pos</label>
                                <input type="number" class="form-control" id="KodePos" placeholder="Kode Pos" name="kodePos" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="Alamat">Alamat</label>
                                <input type="text" class="form-control" id="Alamat" placeholder="Alamat" name="alamat" required>
                            </div>
                        </div>

                        <!-- <a href="<?= base_url('Keranjang/storedata' . '/' . $data->id) ?>" data="<?= $data->id ?>"  name="id"  value="<?= $data->id ?>" class="btn btn-dark ml-2">Checkout</a> -->

                        <button type="submit" name="checkout" class="btn btn-dark ml-2">Checkout</button>
                    </div>

                </form>
                <!-- form -->
            </div>
        </div>
        <!--  -->
        
    </div>
    
</div>
<!--  -->
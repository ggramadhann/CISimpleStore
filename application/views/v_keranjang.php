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
                        <p class="card-text">Rp. <?= $data->price ?></p>
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
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="FirstName">First Name</label>
                                <input type="text" class="form-control" id="" value="First Name" require>
                                <!-- <small id="email" class="form-text text-muted"></small> -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="LastName">Last Name</label>
                                <input type="text" class="form-control" id="" placeholder="Last Name" require>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Email">Email Address</label>
                                <input type="email" class="form-control" id="" placeholder="Email Address" require>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="WA">Whatsapp Number</label>
                                <input type="text" class="form-control" id="" placeholder="Whatsapp Number" require>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Provinsi">Provinsi</label>
                                <input type="text" class="form-control" id="" placeholder="Provinsi" require>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Kabupaten">Kabupaten</label>
                                <input type="text" class="form-control" id="Kabupaten" placeholder="Kabupaten" require>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Kelurahan">Kelurahan</label>
                                <input type="text" class="form-control" id="Kelurahan" placeholder="Kelurahan" require>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="PostalCode">PostalCode</label>
                                <input type="text" class="form-control" id="PostalCode" placeholder="Postal Code" require>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="Alamat">Alamat</label>
                                <input type="text" class="form-control" id="" placeholder="Alamat" require>
                            </div>
                        </div>
                        
                        <a href="<?= base_url('Keranjang/storedata'. '/' .$data->id)?>" data="<?= $data->id ?>"  name="id"  value="<?=$data->id?>" class="btn btn-dark ml-2">Checkout</a>

                        <!-- <button type="submit" name="checkout" class="btn btn-primary ml-2">Checkout</button> -->
                    </div>

                </form>
                <!-- form -->
            </div>
        </div>
        <!--  -->
    </div>

</div>
<!--  -->
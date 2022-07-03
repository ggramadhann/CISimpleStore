 <!-- /.row -->
 <div class="container-fluid mt-5">

     <div class="row">
         <div class="col-12">
             <div class="card">
                 <div class="card-header">
                     <h3 class="card-title"><b>Data Transaksi</b></h3>

                     <div class="card-tools">
                         <!-- <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                        
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div> -->
                     </div>
                 </div>
                 <!-- <hr> -->
                 <!-- /.card-header -->
                 <div class="card-body table-responsive p-0" style="height: 500px;">
                     <table class="table table-head-fixed text-nowrap">
                         <thead>
                             <tr>
                                 <th>Id</th>
                                 <th>Id Product</th>
                                 <th>Invoice</th>
                                 <th>Type</th>
                                 <th>Channel</th>
                                 <th>Status</th>
                                 <th>Amount</th>
                                 <th>Created</th>
                             </tr>
                         </thead>

                         <?php
                            $i = 1;
                            foreach ($result['data'] as $key => $item) {
                            ?>
                             <tbody>
                                 <tr>
                                     <td><?= $i++ ?></td>
                                     <td><?= $item['product_id'] ?></td>
                                     <td><?= $item['reference_id'] ?></td>
                                     <td><?= $item['type'] ?></td>
                                     <td><?= $item['channel_category'] ?></td>
                                     <td><span class="tag tag-success"><?= $item['status'] ?></span></td>
                                     <td><?= $item['amount'] ?></td>
                                     <td><?= $item['created'] ?></td>
                                 </tr>

                             </tbody>

                         <?php } ?>
                     </table>
                 </div>
                 <!-- /.card-body -->
             </div>
             <!-- /.card -->
         </div>
     </div>
     <!-- /.row -->
 </div>
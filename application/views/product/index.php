  <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title;?></h1>


                   <div class="card-deck col-lg-0">

                    <div class="card" style="width: 20rem;">
                     <img class="card-img-top" src="<?= base_url('assets/img/mechanical2.jpg'); ?>"  alt="Card image cap">

                        <div class="card-body">
                          <h5 class="card-title text-center"><b><font color="cyan"><?= $produk['nama_produk']; ?></b></font></h5><hr/>
                          <p class="card-text text-center"><b><font color="gold"><?= $produk['deskripsi']; ?><br>
                            <?= $produk['harga'];?><br><hr/></p>
                          
                          <h6 class="text-muted"><?= $produk['kategori']; ?> </h6></font></p><br/>
                          <a href="#" class="btn btn-warning">Order now!</a>
                        </div>

                    </div>

                     <div class="card" style="width: 20rem;">
                     <img class="card-img-top" src="<?= base_url('assets/img/electricala3.jpg'); ?>" width="17" alt="Card image cap">
                        <div class="card-body">
                         <hr/> 
                          <p class="card-text text-center"><b><font color="gold"><?= $produk['deskripsi']; ?><br>
                            <?= $produk['harga'];?><br><hr/></p>
                          
                          <h6 class="text-muted"><?= $produk['kategori']; ?> </h6></font></p><br/>
                          <a href="#" class="btn btn-warning">Order now!</a>
                        </div>
                    </div>

                     <div class="card" style="width: 20rem;">
                     <img class="card-img-top" src="<?= base_url('assets/img/electricala3.jpg'); ?>" width="17" alt="Card image cap">
                        <div class="card-body">
                         <hr/> 
                          <p class="card-text text-center"><b><font color="gold"><?= $produk['deskripsi']; ?><br>
                            <?= $produk['harga'];?><br><hr/></p>
                          
                          <h6 class="text-muted"><?= $produk['kategori']; ?> </h6></font></p><br/>
                          <a href="#" class="btn btn-warning">Order now!</a>
                        </div>
                    </div>



                   </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

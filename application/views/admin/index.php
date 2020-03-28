                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title;?></h1>

                    <div class="card" style="width: 20rem;">
                     <img class="card-img-top" src="<?= base_url('assets/img/me.png'); ?>"  alt="Card image cap">
                        <div class="card-body">
                         <h5 class="card-title text-center"><b><font color="cyan"><?= $user['name']; ?></b></font></h5><hr/>
                         <p class="card-text"><b><font color="gold"><?= $user['email']; ?><br>
                            <?= $user['address'];?><br><hr/></p>

                        <p calss="card-text"><small class="text-muted">Date Created <?= date('d F Y', $user['date_created']); ?> </small></font></p><br/>
                         <a href="#" class="btn btn-warning">Ubah Profile</a>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

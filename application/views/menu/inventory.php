<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title;?></h1>


    <!--TABLES-->
<div class="container">
  <div class="row">
    <div class="col-md-10">
     <br>
     <h3 class="mt-3">List of Teenager</h3>
     <br>
      <table class="table">
       <thead>
         <tr>
           <th>#</th>
           <th>Name</th>
           <th>Email</th>
           <th>Action</th> 
         </tr>
       </thead>
       <tbody>
         <tr>
            <th>1</th>
            <td>Jaydane Khalid</td>
            <td>jaydanekhalid@gmail.com</td> 
            <td>
              <a href="" class="badge badge-warning">detail</a>
              <a href="" class="badge badge-success">edit</a>
              <a href="" class="badge badge-danger">delete</a>
            </td> 
         </tr>
       </tbody> 
      </table>

    </div>
  </div>
</div>

<br>
  <br>
    <br>
      <br>
        <br>
     <br>
  <br>
    <br>
      <br>
        <br>
    <br>
  <br>
    <br>
      <br>
       <br>

      <!--QUOTES-->
      <h4 align="center">"90% of coding is debugging. The other 10% is writing bugs"</h4>


            <!--DROPDOWN-->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="<?= base_url('home/about'); ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Product
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?= base_url('Product/electrical'); ?>">Electrical</a>
                <a class="dropdown-item" href="<?= base_url('Product/mechanical'); ?>">Mechanical</a>
                <a class="dropdown-item" href="<?= base_url('Product/it_consult'); ?>">IT Consult</a>
              </div>
            </li>
            
            <!-- Heading -->
            <div class="sidebar-heading">
                Content  Editor
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Product</span>
                </a>
                <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Category :</h6><br/>
                        <a class="collapse-item" href="login.html">Electrical</a>
                        <a class="collapse-item" href="register.html">Information Technology</a>
                        <a class="collapse-item" href="forgot-password.html">Mechanic</a>
                        <div class="collapse-divider"></div><hr/>
                        <h6 class="collapse-header">Other Control :</h6><br/>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item active" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>




                    <!--CARD PROFILE-->
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

                    <!--TEXT LINKED-->
                    <center>
                    	<a target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>
                   	</center>
</div>

</div>
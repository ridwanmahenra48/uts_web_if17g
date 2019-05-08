<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="home/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="home/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="home/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="home/css/style.css">
  <link rel="stylesheet" href="home/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="home/css/util.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="home/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="dashboard-post.php">
          <img src="home/images/logos.png" alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="dashboard-post.php">
          <img src="home/images/logo-mini.svg" alt="logo" />
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          
        </ul>
        <ul class="navbar-nav navbar-nav-right">  
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Hello, admin !</span>
              <img class="img-xs rounded-circle" src="home/images/faces/face1.jpg" alt="Profile image">
            </a>
          </li>
        </ul>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="home/images/faces/face1.jpg" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Administrator</p>
                  <span class="status-indicator online"></span>
                  <div>
                    
                  </div>
                </div>
              </div>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="dashboard-post.php">
              <span class="home/menu-title">Index</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="dashboard-post.php">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="home/menu-title">Input Post</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="dashboard-editpost.php">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="home/menu-title">Edit Post</span>
            </a>
          </li>
          
        

          <li class="nav-item">
            <a class="nav-link" href="dashboard-galery.php">
              <i class="menu-icon mdi mdi-backup-restore"></i>
              <span class="home/menu-title">Input Gambar</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="dashboard-editgalery.php">
              <i class="menu-icon mdi mdi-backup-restore"></i>
              <span class="home/menu-title">Edit Gambar</span>
            </a>
          </li>
          
                
          <li class="nav-item">
            <a class="nav-link"  href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-restart"></i>
              <span class="menu-title">Log Out</span>
              <i class></i>
            </a>

          </li>
        </ul>
      </nav>

            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                  <div class="row purchace-popup">
                    <div class="col-12"></div>
                  </div>

                  <div class="row">
                    <div class="col-xl-12  grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body">
                          <div class="clearfix">
                            <div class="float-left">
                              <i class="mdi mdi-cube text-danger icon-lg"></i>
                            </div>
                            
                              <!--edit sini form Post-->
                              <div class="float-left data1">
                                    <h2>EDIT DATA POST </h2>
                                    <br/>
                                            <div class="wrap-input100">
                                              <span class="label-input100">Edit Judul</span>
                                              <input class="input100" type="text" name="judul" value="<?php echo $tampil['nama_barang'];?>">
                                              
                                            </div>
                                  <br/>
                                            <div class="wrap-input100">
                                              <span class="label-input100">Edit Content</span>
                                              <textarea class="input101" type="text" name="isi" value="<?php echo $tampil['nama_barang'];?>" data-ready="false"></textarea>
                                              
                                            </div>
  
                                           <br/>
                                           <div class="container-login100-form-btn">
                                              <div class="wrap-login100-form-btn">
                                                <div class="login100-form-bgbtn"></div>
                                                <button class="login100-form-btn" name="submit">
                                                  Edit Data
                                                </button>
                                              </div>
                                            </div> 
                                  </div>

                              
                          
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


                </div>
            </div>
                  </div>
      
   
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019. All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
<?php
//include kan file koneksi kedatabase kedalam file index
include 'database.php';
?>
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

<?php
		//ambil id dari link index edit (a herf edit.php?id=...)
		$judul 	= $_GET['judul'];
		//Ambil data dari tabel data_siswa dimana id = id dari string id diatas
		$query	= " SELECT * FROM tbl_galery WHERE nama_gambar='$judul' ";
		//eksekusi $query
		$re		= mysqli_query($dbcon, $query);
		//cocokkan data
		$tampil	= mysqli_fetch_array($re);
		?>

  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="dashboard-index.php">
          <img src="home/images/aa.jpg" alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="dashboard-index.php">
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
            <a class="nav-link" href="dashboard-index.php">
            <i class="menu-icon mdi mdi-home"></i>
              <span class="home/menu-title">Index</span>
            </a>
          </li>


          
                
          <li class="nav-item">
            <a class="nav-link"  href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-logout"></i>
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
                              <i class="mdi mdi-cube text-warning icon-lg"></i>
                            </div>
                            
                              <!--edit sini form Post-->
                             <div class="float-left data1">
                                  <h2>DATA GAMBAR </h2>
                                  <br/>
                                  <form method="POST" enctype="multipart/form-data">
                                          <div class="wrap-input100">
                                            <span class="label-input100">Judul Gambar</span><br/><br/>
                                            <span class="label-input100" ><?php echo $tampil['nama_gambar'];?></span>
                                            
                                          </div>
                                <br/>
                                          <div class="wrap">
                                            <span class="label-input100">Edit Gambar</span>
                                            <?php echo "<img src='img/".$tampil['url_gambar']."' width='100' height='100'>" ?>
                                            <input class="input102" type="file" name="url">
                                            
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
                                          </form> 
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

<?php
		//untuk if... -> jika tombol dengan nama submit ditekan maka .. 
		if(isset($_POST['submit'])){

			$judul 	= $_GET['judul'];

			$url  = $_FILES['url']['name'];

			$tmp  = $_FILES['url']['tmp_name'];

			$urlbaru  = date('dmYHis').$url;

			$path  = "img/".$urlbaru;

			if(move_uploaded_file($tmp, $path )) {$query 	= "UPDATE tbl_galery SET url_gambar='$urlbaru', nama_gambar='$judul' WHERE nama_gambar='$judul' ";
			}
			
			
			//eksekusi
			$insert = mysqli_query($dbcon, $query);
			//setelah data berhasil di input redirect ke halaman index
			header('Location: dashboard-index.php');
		
		}
		?>
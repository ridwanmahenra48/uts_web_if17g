<?php
//include kan file koneksi kedatabase kedalam file index
include 'database.php';
//string no digunakan untuk penomoran data

$no2=+1;
$no3=+1;
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
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="dashboard-index.php">
          <img src="home/images/aa.jpg"  alt="logo" />
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
                              <i class="mdi mdi-spin mdi-earth text-primary icon-lg"></i>
                            </div>
                            
                            <br/>
                            <br/>
                            <br/>
                            
                              <!--edit sini form Post-->
                              <div id="float-left data1">
                                <div class="center">
                                    <h2>Data Galery </h2>
                                    <a href="dashboard-galery.php">Add Data Galery</a> <br /><br />
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Gambar</th>
                                                
                                            </tr>
                                        </thead>

                                        <?php
                                            
                                            $query 		= "SELECT * FROM tbl_galery ORDER BY nama_gambar ASC";
                                            //eksekusi string $query kedalam $data
                                            $data 		= mysqli_query($dbcon, $query);
                                            //Cocokan dan tampilkan secara berulang
                                            while($tampil = mysqli_fetch_array($data)){
                                        ?>

                                        <tbody>
                                            <tr>
                                                <!-- Tampilkan data disini -->
                                                <td><?php echo $no2++;?></td>
                                                <td><?php echo $tampil['nama_gambar'];?></td>
                                                
                                                <?php echo "<td><img src='img/".$tampil['url_gambar']."' width='100' height='100'></td>" ?>
                                                <td><i class="menu-icon mdi mdi-tooltip-edit"></i><a href="dashboard-editgalery.php?judul=<?php echo $tampil['nama_gambar'];?>">Edit</a> | <i class="menu-icon mdi mdi-delete"></i><a href="dashboard-deletegalery.php?judul=<?php echo $tampil['nama_gambar'];?>">Delete</a></td>
                                            </tr>
                                        </tbody>
                                        <?php
                                            }
                                        ?>
                                    </table>
                                </div>

                            <br/>
                           

                            <div class="float-left">
                              <i class="mdi mdi-spin mdi-earth text-primary icon-lg"></i>
                            </div>

                            <br/>
                            <br/>
                            <br/>

                                <div id="#content">
                                <div class="center">
                                    <h2>Data Post </h2>
                                    <a href="dashboard-post.php">Add Data Post</a> <br /><br />
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Isi Post</th>
                                                
                                            </tr>
                                        </thead>

                                        <?php
                                            
                                            $query 		= "SELECT * FROM tbl_post ORDER BY judul_post ASC";
                                            //eksekusi string $query kedalam $data
                                            $data 		= mysqli_query($dbcon, $query);
                                            //Cocokan dan tampilkan secara berulang
                                            while($tampil = mysqli_fetch_array($data)){
                                        ?>

                                        <tbody>
                                            <tr>
                                                <!-- Tampilkan data disini -->
                                                <td><?php echo $no3++;?></td>
                                                <td><?php echo $tampil['judul_post'];?></td>
                                                <td><?php echo $tampil['isi_post'];?></td>
                                                
                                                <td><i class="menu-icon mdi mdi-tooltip-edit"></i><a href="dashboard-editpost.php?judul=<?php echo $tampil['judul_post'];?>">Edit</a> | <i class="menu-icon mdi mdi-delete"></i><a href="dashboard-deletepost.php?judul=<?php echo $tampil['judul_post'];?>">Delete</a></td>
                                            </tr>
                                        </tbody>
                                        <?php
                                            }
                                        ?>
                                    </table>
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

<?php
		//untuk if... -> jika tombol dengan nama submit ditekan maka .. 
		if(isset($_POST['submit'])){

			$judul 	= $_POST['judul'];

			$url  = $_FILES['url']['name'];

			$tmp  = $_FILES['url']['tmp_name'];

			$urlbaru  = date('dmYHis').$url;

			$path  = "img/".$urlbaru;

			if(move_uploaded_file($tmp, $path )) {$query 	= "INSERT INTO tbl_galery VALUES ('".$judul."', '".$photobaru."')";
			}
			
			
			//eksekusi
			$insert = mysqli_query($dbcon, $query);
			//setelah data berhasil di input redirect ke halaman index
			header('Location: dashboard-index.php');
		
		}
		?>
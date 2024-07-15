<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ptigai";

//create connection
$connection = new mysqli($servername, $username, $password, $database);

$nm = "";
$un = "";
$email = "";
$pass = "";
$lvl = "";


$errorMessage ="";
$succesMessage ="";

if( $_SERVER['REQUEST_METHOD'] == 'POST') {
  $nm = $_POST["nm"];
  $un = $_POST["un"];
  $email = $_POST["email"];
  $pass = $_POST["pass"];
  $lvl = $_POST["lvl"];

  do {
      if( empty($nm) || empty($un) || empty($email) || empty($pass) || empty($lvl)){
        $errorMessage = "All the fields are required";
        break;
      }

      $sql = "INSERT INTO  pemilik (nm, un, email, pass, lvl)".
             "VALUES ('$nm','$un','$email','$pass','$lvl')";
      $result = $connection->query ($sql);

      if (!$result) {
        $errorMessage = "Invalid query: " . $connection->error;
        break;
      }

      // add   new clients into the database
      $nm = "";
      $un = "";
      $email = "";
      $pass = "";
      $lvl = "";

      $succesMessage ="Admin Baru berhasil ditambahkan";

      header("location: administrator.php");
      exit;
  }while (false);
}
?>

<!DOCTYPE html>
<html lang="id-ID" xml:lang="id-ID">
<head>
<!--(Viewport) Secara sederhana, fungsi meta viewport adalah menetapkan area mana saja yang terlihat di situs web sekaligus menentukan skala kontennya. Bagian ini akan menginstruksikan browser cara merender halaman pada ukuran layar  berbeda.-->
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <meta content="text/html; charset=UTF-8" http-equiv="Content-Type"/>
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"/>
  <!--(Title) Memberikan informasi mengenai judul dokumen HTML-->
  <title>ADMINISTRATOR</title>
  <!--(Webapp)Web App Manifest  web app Manifes adalah file JSON sederhana yang memberi tahu browser tentang aplikasi web Anda dan bagaimana seharusnya berperilaku ketika ‘diinstal’ pada perangkat seluler atau desktop pengguna.-->
 <link href="json/manifest.json" rel="manifest"/>
  <meta content="loginuser.php" name="msapplication-starturl"/>
  <meta content="loginuser.php" name="start_url"/>
  <meta content="Absensi P3I" name="application-name"/>
  <meta content="Absensi P3I" name="apple-mobile-web-app-title"/>
  <meta content="Absensi P3I" name="msapplication-tooltip"/>
  <meta content="#00B4FF" name="theme_color"/>
  <meta content="#00B4FF" name="theme-color"/>
  <meta content="#FFFFFF" name="background_color"/>
  <meta content="#00B4FF" name="msapplication-navbutton-color"/>
  <meta content="#00B4FF" name="msapplication-TileColor"/>
  <meta content="#00B4FF" name="apple-mobile-web-app-status-bar-style"/>
  <meta content="true" name="mssmarttagspreventparsing"/>
  <meta content="yes" name="apple-mobile-web-app-capable"/>
  <meta content="yes" name="mobile-web-app-capable"/>
  <meta content="yes" name="apple-touch-fullscreen"/>
  <link href="BAHAN/p3i" rel="apple-touch-icon"/>
  <link href="BAHAN/p3i" rel="shortcut icon" type="image/x-icon"/>
  <link href="BAHAN/p3i" rel="icon" sizes="32x32"/>
  <meta content="BAHAN/p3i.png" name="msapplication-TileImage"/>
  <link href="BAHAN/p3i" rel="apple-touch-icon"/>
  <link href="BAHAN/p3i.png" rel="icon" sizes="48x48"/>
  <link href="BAHAN/p3i.png" rel="icon" sizes="72x72"/>
  <link href="BAHAN/p3i.png" rel="icon" sizes="96x96"/>
  <link href="BAHAN/p3i.png" rel="icon" sizes="168x168"/>
  <link href="BAHAN/p3i.png" rel="icon" sizes="192x192"/>
  <link href="BAHAN/p3i.png" rel="icon" sizes="512x512"/>
  <!--(Author) Author dimaksudkan untuk menambahkan nm pembuat kode kedalam HTML, description untuk keterangan tentang kode yang ada di dalam halaman itu, dan keyword berfungsi untuk kata kunci yang mewakili isi keseluruhan halaman.-->
  <meta content="Absensi Magang" name="author" />
  <meta content="P3I"name="publisher"/>

  <!--(verification) alat yang disediakan oleh Google, Bing, Yandex untuk merencanakan, merancang, dan mengola blog yang berhubungan dengan search engini optimization (SEO) -->
  <meta name="yandex-verification" content=""/>
  <meta name="p:domain_verify" content=""/>
  <meta name="msvalidate.01" content=""/>
  <meta name="google-site-verification" content="" />
  <meta name="dmca-site-verification" content=""/>
  <meta name="facebook-domain-verification" content=""/>

  <!--(Location) Ini adalah Meta Tag untuk memberitahu asal negara blog anda. Indonesia bisa anda ganti dengan nm negara blog anda.
-->
  <meta content="ID" name="geo.region"/>
  <meta content="Indonesia" name="geo.country"/>
  <meta content="Indonesia" name="geo.placusername"/>
  <meta content="x;x" name="geo.position"/>
  <meta content="x,x" name="ICBM"/>

  <!--(resource) Gunakan preconnect untuk mempercepat koneksi ke asal lain di mana URL sumber daya lengkapnya tidak diketahui sebelumnya, contoh: saat menggunakan Google Fonts. -->
  <link href="//fonts.googleapis.com" rel="preconnect dns-prefetch"/>
  <link href="//api.github.com" rel="preconnect dns-prefetch"/>
  <link href="//api.mapbox.com" rel="preconnect dns-prefetch"/>
  <link href="//cdnjs.cloudflare.com" rel="preconnect dns-prefetch"/>
  <link href="//unpkg.com" rel="preconnect dns-prefetch"/>
  <link href="//kit.fontawesome.com" rel="preconnect dns-prefetch"/>
  
  <!--(CSS) CSS berfungsi untuk menjelaskan dan menata tampilan elemen yang tertulis pada bahasa markup, salah satunya adalah HTML.-->
 <link rel="stylesheet" href="CSSA/bootstrap.min.css">
  <link rel="stylesheet" href="CSSA/AdminLTE.min.css">
  <link rel="stylesheet" href="CSSA/skin-blue-light.css">
  <link rel="stylesheet" href="CSSA/font-awesome.css">
  <link rel="stylesheet" href="CSSA/sw-custom.css">
  <link rel="stylesheet" href="CSSA/datepicker3.css">
  <link rel="stylesheet" href="CSSA/bootstrap-timepicker.min.css">
  <link rel="stylesheet" type="text/css" href=".CSSA/simple-lightbox.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- </head> -->
</head>
<body class="sidebar-mini skin-blue-light fixed"><div class="wrapper">
    <div class="loading"></div>
<header class="main-header">
    <!-- Logo -->
    <a href="https://p3i.uksw.edu" class="logo">
      <span class="logo-mini">
        <b style="color:#FFFFFF">P3I</b>
      </span>
      <span class="logo-lg">
        <img src="BAHAN/p3i.png"  oncontextmenu="return false;" height="50">
      </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      
      <div class="navbar-custom-menu pull-left">
        <ul class="nav navbar-nav">
            <li><a href="#"><?php echo" ".date("j - n - Y"); ?></a></li>
        </ul>
      </div>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        <li><a href="loginuser.php" target="_blank"><i class="fa fa-desktop" aria-hidden="true"></i></a></li>

        <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">ADMIN <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">                <li><a href="javascript:void();" onClick="location.href='loginadmin.php';"><i class="fa fa-sign-out"></i> Logout</a></li>
              </ul>
            </li>
          
        </ul>
      </div>
    </nav>
  </header>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <div class="slimScrollDiv">
    <section class="sidebar">
      <!-- Sidebar user panel -->
    r
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MENU UTAMA</li><li class="treeview">
          <a href="pengguna.php">
            <i class="fa fa-database"></i> <span>Data Pengguna</span>
          </a>
        </li><li><a href="dataabsen.php"><i class="fa fa-list-alt" aria-hidden="true"></i> <span>Data Absensi</span></a></li><li><a href="pengaturan.php"><i class="fa fa-cogs" aria-hidden="true"></i> <span>Pengaturan</span></a></li><li class="active"><a href="administrator.php"><i class="fa fa-user"></i> <span>Administrator</span></a></li>      <li><a href="javascript:void();" onClick="location.href='loginadmin.php';"><i class="fa fa-sign-out"></i>  <span>Keluar</span></a></li>
  
      </ul>
    </section>
  </div>
    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper">
<section class="content-header">
  <h1>Administrator</h1>
    <ol class="breadcrumb">
      <li><a href="pengguna.php"><i class="fa fa-dashboard"></i> Beranda</a></li>
      <li class="active">Administrator</li>
    </ol>
</section>
<section class="content">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title"><b>Administrator</b></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalAdd"><i class="fa fa-plus"></i> Tambah Baru</button>
          </div>
        </div>
<div class="box-body">
<table id="swdatatable" class="table table-bordered">
  <thead>
  <tr>
    <th>Nama</th>
    <th>Username</th>
    <th>Email</th>
    <th>Registrasi</th>
    <th>level</th>
    <th style="width:120px" class="text-center">Aksi</th>
  </tr>
  </thead>
  <tbody>
  <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "ptigai";

    //create connection
    $connection = new mysqli($servername, $username, $password, $database);

    //check connection
    if ($connection->error){
      die("Connection Failed: ". $connection->error);
    }

    //read data from database
    $sql = "SELECT * FROM pemilik";
    $result = $connection->query($sql);

    if (!$result){
      die("invalid query : ". $connection->error);
    }

    while($row = $result->fetch_assoc()){
      echo"
      <tr>
        <td>$row[nm]</td>
        <td>$row[un]</td>
        <td>$row[email]</td>
        <td>$row[tanggal]</td>
        <td>$row[lvl]</td>
        <td>
          <a class='btn btn-warning btn-xs enable-tooltip' href='ubahadmin.php?id=$row[id]'><i class='fa fa-pencil-square-o'></i> Ubah</a>
          <a class='btn btn-xs btn-danger' href='hapusadmin.php?id=$row[id]'><i class='fa fa-trash-o'></i> Hapus</a>
        </td>
      </tr>
      ";
    }
  ?>
  </tbody>
</table>
      </div>
    </div>
  </div> 
</section>


<!-- Add -->
<div class="modal fade" id="modalAdd" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
    
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Tambah Baru</h4>
      </div>

      <div class="form">
      <form method="post">
      <div class="modal-body">

        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="nm" value="<?php echo $nm; ?>" required>
        </div>

        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="un" value="<?php echo $un; ?>" required>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" required>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="pass" class="form-control" name="pass" value="<?php echo $pass; ?>" required>
        </div>

        <div class="form-group">
          <label>level</label>
           <select class="form-control" name="lvl" value="<?php echo $lvl; ?>" required>
            <option value="">- Pilih -</option><option value="Operator">Operator</option><option value="Admin">Administrator</option>
          </select>
        </div>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary pull-left"><i class="fa fa-check"></i> Simpan</button>
        <button type="button" class="btn btn-danger pull-right" data-dismiss="modal"><i class="fa fa-remove"></i> Batal</button>
      </div>
    </form>
  </div>
    </div>
  </div>
</div>
</div>

    <footer class="main-footer">
    <div class="pull-right hidden-xs">
    Redeveloped by <a href="https://p3i.uksw.edu" rel="dofollow" target="_blank">P3I</a> - <a href="https://uksw.edu" rel="dofollow" target="_blank">UKSW</a>
    </div> <div style="display: none;"><a class="credits" href="https://s-widodo.com" rel="nofollow" target="_blank"></a></div>
     PUSAT PENGAJARAN DAN PEMBELAJARAN INOVATIF (P3I)
  </footer>
</div>
<!-- Ionicons -->
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
<script src="https://kit.fontawesome.com/0ccb04165b.js" crossorigin="anonymous"></script>
<!-- wrapper -->
<script src="jsa/jquery-2.2.3.min.js"></script>
<script src="jsa/jquery-ui.min.js"></script>
<script src="jsa/bootstrap.min.js"></script>
<script src="jsa/jquery.slimscroll.min.js"></script>
<script src="jsa/adminlte.js"></script>
<script src="jsa/app.js"></script>
<script src="jsa/demo.js"></script>
<script src="jsa/sweetalert.min.js"></script>
<script src="jsa/Chart.min.js"></script>
<script src="jsa/simple-lightbox.min.js"></script>
<script src="jsa/jquery.validate.js"></script>
<script src="jsa/messages_id.js"></script>
<link rel="stylesheet" href="jsa/dataTables.bootstrap.css">
<script src="jsa/jquery.dataTables.min.js"></script>
<script src="jsa/dataTables.bootstrap.min.js"></script>
<script src="jsa/jquery.magnific-popup.min.js"></script>
  <script src="jsu/scripts.js"></script>
  <script type="text/javascript">
  	$(document).ready(function() {
  		$(".validate").validate();
  	});
    
    $(document).ready(function() {
      $(".validate2").validate();
    });
    $(document).on("click", ".access-failed", function(){ 
      swal({title:"Error!", text: "Anda tidak memiliki hak akses!", icon:"error",timer:2000,});  
    });
  </script>  </body>
</html>


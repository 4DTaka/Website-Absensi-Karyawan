

<!DOCTYPE html>
<html lang="id-ID" xml:lang="id-ID">
<head>
<!--(Viewport) Secara sederhana, fungsi meta viewport adalah menetapkan area mana saja yang terlihat di situs web sekaligus menentukan skala kontennya. Bagian ini akan menginstruksikan browser cara merender halaman pada ukuran layar  berbeda.-->
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <meta content="text/html; charset=UTF-8" http-equiv="Content-Type"/>
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"/>
  <!--(Title) Memberikan informasi mengenai judul dokumen HTML-->
  <title>DATA ABSEN</title>
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
  <!--(Author) Author dimaksudkan untuk menambahkan nama pembuat kode kedalam HTML, description untuk keterangan tentang kode yang ada di dalam halaman itu, dan keyword berfungsi untuk kata kunci yang mewakili isi keseluruhan halaman.-->
  <meta content="Absensi Magang" name="author" />
  <meta content="P3I"name="publisher"/>

  <!--(verification) alat yang disediakan oleh Google, Bing, Yandex untuk merencanakan, merancang, dan mengola blog yang berhubungan dengan search engini optimization (SEO) -->
  <meta name="yandex-verification" content=""/>
  <meta name="p:domain_verify" content=""/>
  <meta name="msvalidate.01" content=""/>
  <meta name="google-site-verification" content="" />
  <meta name="dmca-site-verification" content=""/>
  <meta name="facebook-domain-verification" content=""/>

  <!--(Location) Ini adalah Meta Tag untuk memberitahu asal negara blog anda. Indonesia bisa anda ganti dengan nama negara blog anda.
-->
  <meta content="ID" name="geo.region"/>
  <meta content="Indonesia" name="geo.country"/>
  <meta content="Indonesia" name="geo.placename"/>
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
    <link rel="stylesheet" href="CSSA/magnific-popup.css">
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
            <li><a href="#">16-11-2022</a></li>
        </ul>
      </div>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        <li><a href="loginuser.php" target="_blank"><i class="fa fa-desktop" aria-hidden="true"></i></a></li>

        <!-- Notifications: style can be found in dropdown.less -->

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
    
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MENU UTAMA</li><li class="treeview">
          <a href="pengguna.php">
            <i class="fa fa-database"></i> <span>Data Pengguna</span>
          </a>
        </li><li class="active"><a href="dataabsen.php"><i class="fa fa-list-alt" aria-hidden="true"></i> <span>Data Absensi</span></a></li><li><a href="pengaturan.php"><i class="fa fa-cogs" aria-hidden="true"></i> <span>Pengaturan</span></a></li><li><a href="administrator.php"><i class="fa fa-user"></i> <span>Administrator</span></a></li>      <li><a href="javascript:void();" onClick="location.href='loginadmin.php';"><i class="fa fa-sign-out"></i>  <span>Keluar</span></a></li>
  
      </ul>
    </section>
  </div>
    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper">
<section class="content-header">
  <h1>Data<small> Absensi</small></h1>
    <ol class="breadcrumb">
      <li><a href=pengguna.php><i class="fa fa-dashboard"></i> Beranda</a></li>
      <li class="active">Data Absensi</li>
    </ol>
</section>
<section class="content">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title"><b>Data Absensi</b></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-laporan">Ekspor Semua</button>
          </div>
        </div>
        <div class="box-body">
          <div class="table-responsive">
            <table id="swdatatable" class="table table-bordered">
            <thead>
            <tr>
              <th>Nama</th>
              <th>Jenis Absen</th>
              <th>Waktu</th>
              <th>Foto</th>
            </tr>
            </thead>
            <?php

              //create connection
              $connection = mysqli_connect("localhost","root","");
              $db= mysqli_select_db($connection,'ptigai');

              $query = " SELECT * FROM absensi";
              $query_run = mysqli_query($connection,$query);

              while($row = mysqli_fetch_array($query_run))
              {
                ?>
                <tr>
                  <td><?php echo $row['nama']; ?></td>
                  <td><?php echo $row['jenisabsen']; ?></td>
                  <td><?php echo $row['waktu']; ?></td>
                  <td>  <?php echo '<img src="data:image;base64,'.base64_encode($row['foto']).'" alt="Image" style="width: 100px; height: 100px;" >';?> </td>
                </tr>
                <?php
              }

            ?>
          </table>
          </div>
        </div>
    </div>
  </div> 
</section>

        <div class="modal fade" id="modal-laporan">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Laporan Absensi Semua Pengguna</h4>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label>Bulan</label>
                  <select class="form-control month" required><option value="01">Januari</option><option value="02">Februari</option><option value="03">Maret</option><option value="04">April</option><option value="05">Mei</option><option value="06">Juni</option><option value="07">Juli</option><option value="08">Agustus</option><option value="09">September</option><option value="10">Oktober</option><option value="12" selected>November</option><option value="12">Desember</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Tahun</label>
                  <select class="form-control year" required><option value="2022" selected="selected">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option><option value="2030">2030</option><option value="2031">2031</option><option value="2032">2032</option><option value="2033">2033</option><option value="2034">2034</option><option value="2035">2035</option><option value="2036">2036</option><option value="2037">2037</option><option value="2038">2038</option><option value="2039">2039</option><option value="2040">2040</option><option value="2041">2041</option><option value="2042">2042</option><option value="2043">2043</option><option value="2044">2044</option><option value="2045">2045</option><option value="2046">2046</option><option value="2047">2047</option><option value="2048">2048</option><option value="2049">2049</option><option value="2050">2050</option><option value="2051">2051</option><option value="2052">2052</option><option value="2053">2053</option><option value="2054">2054</option><option value="2055">2055</option><option value="2056">2056</option><option value="2057">2057</option><option value="2058">2058</option><option value="2059">2059</option><option value="2060">2060</option><option value="2061">2061</option><option value="2062">2062</option><option value="2063">2063</option><option value="2064">2064</option><option value="2065">2065</option><option value="2066">2066</option><option value="2067">2067</option><option value="2068">2068</option><option value="2069">2069</option><option value="2070">2070</option><option value="2071">2071</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Tipe</label>
                  <select class="form-control type" required>
                    <option value="pdf">PDF</option>
                    <option value="excel">EXCEL</option>
                    <option value="print">PRINT</option>
                  </select>
                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary pull-left btn-print-all">Ekspor Semua</button>
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
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
  <script src="jsab/scripts.js"></script>
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


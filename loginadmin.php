
<!DOCTYPE html>
<html lang="id-ID" xml:lang="id-ID">
<head>
  <!--(Viewport) Secara sederhana, fungsi meta viewport adalah menetapkan area mana saja yang terlihat di situs web sekaligus menentukan skala kontennya. Bagian ini akan menginstruksikan browser cara merender halaman pada ukuran layar  berbeda.-->
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <meta content="text/html; charset=UTF-8" http-equiv="Content-Type"/>
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"/>
  <!--(Title) Memberikan informasi mengenai judul dokumen HTML-->
  <title>LOGIN ADMIN</title>
  <!--(Webapp)Web App Manifest  web app Manifes adalah file JSON sederhana yang memberi tahu browser tentang aplikasi web Anda dan bagaimana seharusnya berperilaku ketika ‘diinstal’ pada perangkat seluler atau desktop pengguna.-->
 <link href="json/manifest.json" rel="manifest"/>
  <meta content="loginuser.html" name="msapplication-starturl"/>
  <meta content="loginuser.html" name="start_url"/>
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
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
  <body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <div style=" background-image : url(BAHAN/batik.png);background-color:#029DD6;border-radius:30px;padding:10px 15px" class="section text-center">
        <h1 style="color:#FFFFFF;font-size:19px;"><i class="fa fa-user"></i> Login</h1>
        <img src="BAHAN/robot.png" height="90">
        <h1 style="color:#FFFFFF;font-size:19px;">Admin</h1>
      </div>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Masukkan Username dan Password Anda untuk login ke sistem</p>
      <form action = "backendadmin.php" method="post">
        <div class="form-group has-feedback">
          <input type="text" id="un" name="un" class="form-control" placeholder="Username">
          <span class="fa fa-user form-control-feedback"></span>
        </div>
       
        <div class="form-group has-feedback">
          <input type="password" id="pass" name="pass" class="form-control" placeholder="Password">
          <span class="fa fa-key form-control-feedback"></span>
        </div>

        <div class="row">
          <div class="col-md-12">
            <span id="stat"></span>
          </div>
          <div class="col-xs-12">
            <button type="submit" class="btn btn-success btn-block" id="login"><i class="fa fa-user"></i> Login</button>
            <a href="loginuser.php" class="btn btn-primary btn-block"><i class="fa fa-user"></i> Login User</a>
          </div>
          <!-- /.col -->
        </div>
        </form>

      </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->
    <footer class="text-muted text-center">
      Redeveloped by <a href="https://p3i.uksw.edu" rel="dofollow" target="_blank">P3I</a> - <a href="https://www.uksw.edu" rel="https://www.uksw.edu/" target="_blank">UKSW</a><br/><div style="display: none;"><a class="credits" href="https://s-widodo.com" rel="nofollow" target="_blank"></a></div>
    </footer>
<!-- Jquery -->
<script src="js/jquery-3.4.1.min.js"></script>
<!-- Base Js File -->
<script src="js/base.js"></script>
<!-- Ionicons -->
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
<script src="https://kit.fontawesome.com/0ccb04165b.js" crossorigin="anonymous"></script>

<script src="jsa/jquery.min.js"></script>
<script src="jsabootstrap.min.js"></script>
<script src="jsa/adminlte.js"></script>
<script src="jsa/demo.js"></script>
<script src="jsa/jquery-login.js"></script>
  </body>
</html>

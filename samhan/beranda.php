<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ceebad55d6.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
    <title>Samhan logistic</title>
</head>
<style>
   
    
    .title{
        font-size: 1.2rem;
        color: #c50404;
        font-weight: bold;
    }
    .iconl{
        width: 120px;
        cursor: pointer;
    }
    #bann{
        height: 100vh;
        width: 100%;
        background-image: url(assets/BANNER/Banner1.png);
        background-repeat: no-repeat;
        background-size: cover;
    }
    .navbar{
        background-color: #9cbacb!important;
    }
    .nav-link  {
        color:#c11618;
        font-weight: 500;
    }
    .nav-link:hover  {
        color:#c11618;
        font-weight: 500;
    }
    .navbar-nav{
        margin-left: 200px;      
    }
    .btn-red{
        background-color: #c50404;
        padding: 8px 30px;
        color: white;
        border: none;
        border-bottom-left-radius: 20px;
        border-top-right-radius: 20px;
    }
    .btn-white{
        background-color: transparent;
        width: 160px!important;
        color: #c50404;
        font-weight: bold;
        border: none;
        border: 4px solid #c50404;
        border-bottom-left-radius: 20px;
        border-top-right-radius: 20px;
    }
    .btn-white:hover{
      background-color: #c50404;
      color: white;
      -webkit-transition: all 400ms linear;
      -ms-transition: all 400ms linear;
      transition: all 400ms linear;
    }
    .btn-play{
      background-color: #ffffff;
        width: 160px!important;
        color: #c50404;
        font-weight: bold;
        border: none;
        border-bottom-left-radius: 20px;
        border-top-right-radius: 20px;
    }

    #hubungi{
        margin-top: 75vh;
        background-color: transparent;
        font-weight: bold;
        padding: 5px 20px;
        color: #c50404;
        /* border: none; */
        border-bottom-left-radius: 20px;
        border-top-right-radius: 20px;
        border: 4px solid #c50404;
    }
    #hubungi:hover{
      background-color: white;
      -webkit-transition: background-color 400ms linear;
      -ms-transition: background-color 400ms linear;
      transition: background-color 400ms linear;
    }
    .title{
      color: #c50404;
      font-weight: 700;
      font-size: 1.4rem;
    }
    .subtitle{
      color: #d02235;
      font-weight: 600;
    }
    .client{
      width:200px;
    }
    .client img{
      height: 60px;
      width:auto;
    }
    footer{
      background-color: #990000;
      color: white;
      font-size: .8rem;
    }
    .alamat{
      margin-top: 60px;
    }
    .alamat ul{
      list-style: none;
      padding-left: 0px;
    }
    .alamat ul li{
      margin-left: 0px;
      padding-left: 0px;
    }
</style>
<body>
   <div class="container-fluid" id="bann" >
    <nav class="navbar navbar-expand-lg  fixed-top bg-light">
      <div class="container-fluid">
        <img class="ms-5" src="logo.png" alt="" srcset="" height="50px">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Shipper</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Transporter
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#" tabindex="-1" >Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#" tabindex="-1" >Tentang Kami</a>
            </li>
          </ul>
         
          <button class="btn-red" id="login">Login</button>
        </div>
      </div>
    </nav> 

    <button id="hubungi" class="ms-5">Hubungi Kami</button>
   </div>


   <div class="container-fluid  p-0" >
      <div class="row m-0 p-0">
        <div class="col-lg-6  m-0 p-0">
          <img class="img-fluid" src="layanan.png" alt="" srcset="">
        </div>
        <div class="col-lg-6  m-0 pt-5">
          <h4 class="title">Nikmati pelayanan pengiriman berbasis teknologi <br>
          dengan penerapan TMS yang terintegrasi</h4>
          <p class="subtitle">Dalam melakukan pelayanan, kami menerapkan TMS yang terintegrasi dengan<br>
berbagai fitur sehingga user kami baik Shipper maupun Transporter akan<br>
mendapatkan pelayanan yang prima dan memudahkan dalam menjalankan<br>
sebuah project dengan kami.</p>
<button class="btn-red" >Lihat layanan kami</button>
        </div>
       
        </div>
      </div>
   </div>


   <div class="container-fluid  p-0" >
      <div class="row m-0 p-0">
      <div class="col-lg-7  m-0 pt-5 ps-5">
          <h4 class="title">Jalankan project Anda bersama kami hanya dengan
          <br>
          “Tinggal Klik” saja lewat SALOGIS.</h4>
          <p class="subtitle">Kini Kami telah meluncurkan Aplikasi SALOGIS untuk menunjang pelaksanaan<br>
project Anda. Semua hal yang berkaitan dengan project, mulai dari booking, proses<br>
pengiriman, hingga project selesai akan bisa dipantau dari genggaman ponsel Anda</p>
<button class="btn-red" >Pakai Aplikasi SALOGIS</button>
        </div>
        <div class="col-lg-5  m-0 p-0">
          <img class="img-fluid" src="promo.png" alt="" srcset="">
        </div>
        
       
        </div>
      </div>
   </div>


   <div class="container-fluid  p-0 " >
   
      <div class="row m-0 p-0 justify-content-center">
        <button class="btn-white mt-3" width="100px" >Client Kami</button>
      
      </div>
      <div class="row justify-content-center text-center mt-5 mb-2">
        <div class="client">
          <img class="img-fluid" src="assets/CLIENT KAMI/Client Logo 1.png" alt="" srcset="">
        </div>
        <div class="client">
          <img class="img-fluid" src="assets/CLIENT KAMI/Client Logo 2.png" alt="" srcset="">
        </div>
        <div class="client">
          <img class="img-fluid" src="assets/CLIENT KAMI/Client Logo 3.png" alt="" srcset="">
        </div>
        <div class="client">
          <img class="img-fluid" src="assets/CLIENT KAMI/Client Logo 4.png" alt="" srcset="">
        </div>
        <div class="client">
          <img class="img-fluid" src="assets/CLIENT KAMI/Client Logo 5.png" alt="" srcset="">
        </div>
      </div>
   </div>

   <footer class="container-fluid p-5 mt-5">
      <div class="row">
        <div class="col-3">
          <img src="assets/Logo Samhan Putih.png" alt="" srcset="" width="140px">
          <br>
          <div class="alamat">
          <b>Kalisalak</b> <br>Jl. Ketapang No 1 <br>Kalisalak, Kab. Batang
          </div>
        </div>
        <div class="col-6">
          <div class="row">
            <div class="col">
              Shipper
              <div class="alamat">
              <ul>
                <li>Jaminan Layanan</li>
                <li>Informasi Armada</li>
                <li>Cek Harga</li>
              </ul>
              </div>
            </div>
            <div class="col">
              Transporter
              <div class="alamat">
                <ul>
                  <li>Alur Daftar Vendor</li>
                  <li>List Project</li>
                
                </ul>
              </div>
            </div>
            <div class="col">
            Perusahaan
            <div class="alamat">
                <ul>
                  <li>Tentang Kami</li>
                  <li>Blog</li>
                  <li>Hubungi kami</li>
                
                </ul>
              </div>
            </div>
             
            
          </div>

        </div>
        <div class="col-3 text-end">
          <button class="btn-play"><img src="gplay.png" class="img-fluid" srcset=""></button>
        </div>
      </div>
   </footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>



   
</script>
</html>
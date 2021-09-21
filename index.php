<?php

  include_once "autoload.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Pemira | Pemilu Raya PNB 2019 </title>

  <!-- Font Awesome Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link rel="stylesheet" href="css/animations.css">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/creative.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-danger fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-dark js-scroll-trigger" href="#page-top">Pemilu Raya</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <?php 
              if(empty($_SESSION['nama'])){ ;?>
                <li> <a class="btn btn-danger text-white" data-toggle="modal" data-target="#loginModals">Ayo Memilih !</a> </li>
              <?php } 
                else {; ?>
                  <li><a href="user/"><?= $_SESSION['nama']  ?></a></li>
                <?php } ?>

        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100 animatedParent">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-6 align-self-end ">
          <img src="img/logo-pemilu.png" width="400" alt="" srcset="">
        </div>
        <div class="col-lg-6 align-self-end ">
          <h1 class="text-uppercase text-dark font-weight-bold animated fadeInRightShort slowest">Pemilu Raya Politeknik Negeri Bali</h1>
          <hr class="my-4" style="width: 0rem;">
        </div>
        <div class="col-lg-12 align-self-baseline">
          <br>
          <br>
          <p class=" font-weight-light mb-5">Karena masa depan kita di tangan kita sendiri !</p>
        </div>
      </div>
      
    </div>
  </header>

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#dc3545" fill-opacity="1" d="M0,96L48,90.7C96,85,192,75,288,80C384,85,480,107,576,128C672,149,768,171,864,160C960,149,1056,107,1152,112C1248,117,1344,171,1392,197.3L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
  </svg>  
  <section class="page-section bg-danger animatedParent" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 about-text text-center">
          <h2 class="text-white handwriting mt-0 animated fadeInRightShort">Pilihan mu menentukan Masa Depan Kita !</h2>
          <hr class="divider light my-4">
          <p class="text-white mb-4 animated fadeIn slowest">
                Sebagai seorang mahasiswa , Menggunakan hak pilihmu merupakan salah satu caramu membutikan
                bahwa kamu adalah seorang yang menjunjung tinggi nilai nilai pancasila , Oleh karena itu
                mulailah dari sekarang dengan berkontribusi dalam pemira ini !</p>
          <?php
            if(!empty($_SESSION['nama'])){ ; ?>
                  <a href="user" class="btn btn-light btn-xl js-scroll-trigger animated growIn slowest">Ayo Memilih !</a>
            <?php } else { ?>
                <a class="btn btn-light btn-xl js-scroll-trigger animated growIn slowest" data-toggle="modal" data-target="#loginModals">Ayo Memilih !</a>
            <?php }
          ?>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1" d="M0,320L48,298.7C96,277,192,235,288,213.3C384,192,480,192,576,213.3C672,235,768,277,864,256C960,235,1056,149,1152,101.3C1248,53,1344,43,1392,37.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
  </section>
  
  

  <section class="page-section" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          
        </div>
      </div>
    </div>
  </section>


  <section class="page-section mb-5 ml-5 animatedParent" id="candidate">
      <div class="container">
        <h2 class="candidate-quotes text-center mt-0"> Kandidat Yang Akan maju </h2>
        <hr class="divider my-4">
        <div class="row">
          <div class="col-lg-4 col-md-6 text-center">
            <div class="mt-5">
              <!-- Nama Calon -->
              <div class="shadow card animated fadeInLeftShort slowest" style="width: 20rem;"> 

              <img src="img/candidate/candidate-1.png" class="card-img-top" alt="candidate-1"> 
            
                  <div class="card-body">
                    <h5 class="card-title"> Indira Lutfiah Khoirunnisa & I Gede Redi Pradnyana </h5>
                    <p class="card-text modal-quotes">" Tanggung Jawab. Kekeluargaan, Solidaritas, dan Dedikasi. "</p>
                    <br>
                    <a href="candidate/1.php" class="btn btn-danger">Pelajari Lebih Lanjut</a>
                  </div>
                </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 text-center">
            <div class="mt-5">
              <!-- Nama Calon -->
              <div class="shadow  card animated fadeInUpShort slowest" style="width: 20rem;">
                  <img src="img/candidate/candidate-2.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Made Wira Cahyanta & Kadek Pande Sanjaya Sugiarta</h5>
                    <p class="card-text modal-quotes">" Aktif, Kreatif, Solidaritas, dan Integritas. "</p>
                    <a href="candidate/2.php" class="btn btn-danger">Pelajari Lebih Lanjut</a>
                  </div>
                </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 text-center">
            <div class="mt-5">
              <!-- Nama Calom -->
              <div class="shadow card animated fadeInRightShort slowest" style="width: 20rem;">
                  <img src="img/candidate/candidate-3.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"> I Gede Windu Wicaksana & Putu Wahyu Pratama </h5>
                    <br>
                    <p class="card-text modal-quotes">" Pembangunan yang Kreatif, Inovatif, dan Bersinergi. "</p>
                    <a href="candidate/3.php" class="btn btn-danger">Pelajari Lebih Lanjut </a>
                  </div>
                </div>
            </div>
          </div>
          
        </div>
      </div>
    </section>


    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#dc3545" fill-opacity="1" d="M0,160L48,165.3C96,171,192,181,288,202.7C384,224,480,256,576,234.7C672,213,768,139,864,138.7C960,139,1056,213,1152,208C1248,203,1344,117,1392,74.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#dc3545" fill-opacity="1" d="M0,160L48,165.3C96,171,192,181,288,202.7C384,224,480,256,576,234.7C672,213,768,139,864,138.7C960,139,1056,213,1152,208C1248,203,1344,117,1392,74.7L1440,32L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
    </svg>

  

  <!-- Kiat Memilih -->
  <section class="page-section " id="howto">
    <div class="container">
      <h2 class="text-center mt-0"> Kiat Kiat Memilih </h2>
      <hr class="divider my-4">
      <div class="row">
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-user-friends text-dark mb-4"></i>
            <h3 class="h4 mb-2"> Kenali Calon nya</h3>
            <p class="text-muted mb-0">Kenali serta pelajari tentang rekam jejak calon </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-list-ol text-dark mb-4"></i>
            <h3 class="h4 mb-2">Liat Visi Misi nya</h3>
            <p class="text-muted mb-0">Pelajari serta pahami visi misi yang calon berikan padamu sebagai tolak ukur dalam memilih</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-user-check text-dark mb-4"></i>
            <h3 class="h4 mb-2">Pilih Calon mu </h3>
            <p class="text-muted mb-0">Pilihlah Calonmu tanpa adanya paksaan dari pihak lain</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-glass-cheers text-dark mb-4"></i>
            <h3 class="h4 mb-2">Rayakan Pesta Demokrasi !</h3>
            <p class="text-muted mb-0">Rayakan Pesta demokrasi di dalam Politeknik Negeri Bali !</p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#dc3545" fill-opacity="1" d="M0,160L48,165.3C96,171,192,181,288,202.7C384,224,480,256,576,234.7C672,213,768,139,864,138.7C960,139,1056,213,1152,208C1248,203,1344,117,1392,74.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
  </svg>
  <!-- Footer -->
  <footer class="bg-danger py-5">
    <div class="container">
      <div class="small text-center text-white">Copyright &copy; 2019 - <span id="admin-login" onclick="loadLogin()">UKM Computer Club</span> - Politeknik Negeri Bali</div>
    </div>
  </footer>



  <!-- Modals Login -->
  <!-- Modal -->
  <div class="modal fade" id="loginModals" tabindex="-1" role="dialog" aria-labelledby="loginModals" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
            <div class="col-lg-12">
                  <center>
                    <img src="img/logo.png" height="150" alt="" srcset="">
                    <hr class="modal-hr">
                  </center>
                <div class="form mt-5">
                    <form action="login-process.php" method="POST">
                        <input class="form-control mt-2" type="text" placeholder="NIM" name="nim">
                        <input class="form-control mt-2" type="password" placeholder="Password" name="password">
                        <br>
                        <br>
                        <hr class="modal-hr">
                        <p class="modal-quotes"> "Jaga Kerahasiaan Akunmu , Agar tidak terjadi penggelembungan hak pilih !"</p>
                        <input class="form-control text-white lead mt-2 bg-danger" type="submit" value="Masuk" name="submit" placeholder="Masuk">
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  <script src="js/css3-animate-it.js"></script>

  <script type="text/JavaScript">
      document.getElementById("admin-login").onclick = function () {
        location.href = "base/";
    };
  </script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/creative.min.js"></script>

</body>

</html>

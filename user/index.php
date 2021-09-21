<?php

  include_once "../autoload.php";
  include_once $BASE_URL . 'tables/pemilih.php';
  if(empty($_SESSION['nama'])){
    header('location: ' .$BASE_URL . 'index.php');
  }
  
  $data = $pemilih->where('nim',$_SESSION['nim']);
  
  
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
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
  <!-- Plugin CSS -->
  <link href="../vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/animations.css">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="../css/creative.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-danger fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-dark js-scroll-trigger" href="../">Pemilu Raya</a>
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
                  <li><a href="../logout.php" class="btn btn-danger text-white"> <i class="fas fa-sign-out-alt "></i> Keluar</a> </li>
                <?php } ?>

        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100 animatedParent">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-12">
            <h1 > Hallo, <span class="animated fadeInUpShort slow"><?= $_SESSION['nama'] ?></span></h1>
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
          <h2 class="text-white mt-0 candidate-quotes animated fadeInRightShort">Pilihan mu menentukan Masa Depan Kita !</h2>
          <hr class="divider light my-4">
          <p class="text-white mb-4 animated fadeIn slowest">
                Sebagai seorang mahasiswa , Menggunakan hak pilihmu merupakan salah satu caramu membutikan
                bahwa kamu adalah seorang yang menjunjung tinggi nilai nilai pancasila , Oleh karena itu
                mulailah dari sekarang dengan berkontribusi dalam pemira ini !</p>
          <a href="../index.php" class="btn btn-light btn-xl js-scroll-trigger animated growIn slowest"> Lihat Visi dan Misi </a>
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


  <?php if($data['status'] == 0){ ; ?>

    
    <section class="page-section mb-5 ml-5 animatedParent" id="candidate">
      <form action="api/vote-process.php" method="post">
      <div class="container">
        <h2 class="text-center mt-0"> Kandidat Yang Akan maju </h2>
        <hr class="divider my-4">
        <div class="row">
          <div class="col-lg-4 col-md-6 text-center">
            <div class="mt-5">
              <!-- Nama Calon -->
              <div class="shadow card animated fadeInLeftShort slowest" style="width: 20rem;">
                  <img src="../img/candidate/candidate-1.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Indira Lutfiah Khoirunnisa & I Gede Redi Pradnyana</h5>
                    <br>
                    <br>
                    <a href="api/vote-process.php?vote=1" class="btn btn-danger"> PILIH CALON </a>
                    
                  </div>
                </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 text-center">
            <div class="mt-5">
              <!-- Nama Calon -->
              <div class="shadow  card animated fadeInUpShort slowest" style="width: 20rem;">
                  <img src="../img/candidate/candidate-2.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Made Wira Cahyanta & Kadek Pande Sanjaya Sugiarta</h5>
                    <br>
                    <a href="api/vote-process.php?vote=2" onclick="confirm('Yakin Memilih ?')" class="btn btn-danger"> PILIH CALON </a>
                  </div>
                </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 text-center">
            <div class="mt-5">
              <!-- Nama Calom -->
              <div class="shadow card animated fadeInRightShort slowest" style="width: 20rem;">
                  <img src="../img/candidate/candidate-3.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">I Gede Windu Wicaksana & Putu Wahyu Pratama</h5>
                    <br>
                    <br>
                    <a href="api/vote-process.php?vote=3" class="btn btn-danger"> PILIH CALON </a>
                  </div>
                </div>
            </div>
          </div>
          
        </div>
      </div>
      </form>
    </section>

  <?php }
  else { ?>
  
  <section class="page-section mb-5  animatedParent" id="candidate">
      <div class="container">
        <br>
        <br>
        <br>
        <br>
        <h6 class="text-center mt-5 greeting-name"> Selamat Pagi , <?= $_SESSION['nama']?></h6>
        <h1 class="text-center mt-5 candidate-quotes"> Terima kasih sudah Memilih ! </h1>
        <hr class="divider my-4">
        <div class="row">
            <p class="candidate-quotes text-center pr-5 ml-5">
                Jagalah Kerahasiaan Pilihan anda , Terima kasih sudah memilih dengan Jujur dan Adil Serta jangan lupa dukung dan saksikan hasil PEMIRA tanggal 
            </p>
            <br>
            <br>
            <p class="candidate-quotes text-center mx-auto mt-5"> Sampai jumpa di <b>PEMIRA</b> Selanjutnya tahun depan ! </p>
        </div>
      </div>
    </section>


  <?php } ?>



  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#dc3545" fill-opacity="1" d="M0,160L48,165.3C96,171,192,181,288,202.7C384,224,480,256,576,234.7C672,213,768,139,864,138.7C960,139,1056,213,1152,208C1248,203,1344,117,1392,74.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
  </svg>
  <!-- Footer -->
  <footer class="bg-danger py-5">
    <div class="container">
      <div class="small text-center text-white">Copyright &copy; 2019 - UKM Computer Club - Politeknik Negeri Bali</div>
    </div>
  </footer>


  <div class="modal fade" id="voteModals" tabindex="-1" role="dialog" aria-labelledby="voteModals" aria-hidden="true">
        <div class="modal-dialog" style="width: 100rem;" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">



                                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>


  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  <script src="../js/css3-animate-it.js"></script>

  <!-- Plugin JavaScript -->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="../js/creative.min.js"></script>

</body>

</html>

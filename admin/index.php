<?php

  include_once "../autoload.php";
  include_once $BASE_URL . "tables/pilihan.php"; 
  if(empty($_SESSION['nama']) && $_SESSION['status'] !== "Admin" ){
    header('Location: ../index.php');
  }

  $dataCount = $pilihan->all();

  
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
      <a class="navbar-brand text-dark js-scroll-trigger" href="">Pemilu Raya</a>
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
            <br>
            <br>
            <br>
            <h1 > Hallo, <span class="animated fadeInUpShort slow">Admin <?= $_SESSION['nama'] ?></span></h1>
        </div>
        <div class="col-lg-12 align-items-end">
            <div class="row">

                <div class="col-md-4 align-item-center">
                    <a href="" class="btn btn-danger btn-xl js-scroll-trigger animated growIn slowest" data-toggle="modal" data-target="#RegisterModals"> Tambahkan Data </a>
                </div>
                <div class="col-md-4 align-item-center">
                    <a href="" class="btn btn-danger btn-xl js-scroll-trigger animated growIn slowest" data-toggle="modal" data-target="#adminModals"> Data Pemilih </a>
                </div>
                <div class="col-md-4 align-item-center">
                    <a href="" class="btn btn-danger btn-xl js-scroll-trigger animated growIn slowest" data-toggle="modal" data-target="#adminModals"> Tambahkan Admin </a>
                </div>

            </div>
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
          <h2 class="text-white mt-0 animated fadeInRightShort">Pilihan mu menentukan Masa Depan Kita !</h2>
          <hr class="divider light my-4">
          <p class="text-white mb-4 animated fadeIn slowest">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus delectus soluta voluptatibus repellat, nisi libero maxime asperiores placeat commodi voluptas illum debitis tempora eum corrupti. Ex, quae? Incidunt, nemo repudiandae!</p>
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
        <h2 class="text-center mt-0"> DASHBOARD </h2>
        <hr class="divider my-4">
        <div class="row">
          <div class="col-lg-4 col-md-6 text-center">
            <div class="mt-5">
              <!-- Nama Calon -->
              <div class="shadow card animated fadeInLeftShort slowest" style="width: 20rem;">
                  <div class="card-img-top">
                      <div class="row">
                        <div class="col-lg-12 quotes-count">
                            <h1>12</h1>
                        </div>
                      </div>
                  </div>
                  <br>
                  <br>
                  <br>
                  <br>
                  <div class="card-body">
                    <br>
                    <h5 class="card-title">Jumlah Suara masuk</h5>
                    <br>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 text-center">
            <div class="mt-5">
              <!-- Nama Calon -->
              <?php $winner = $pilihan->winner();
                    foreach($winner as $winner){ ; ?>
              <div class="shadow  card animated fadeInUpShort slowest" style="width: 20rem;">
                  <img src="../img/candidate/candidate-<?=$winner['no_urut']?>.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <br>
                    <br>
                    <h5 class="card-title">Suara Terbanyak</h5>
                    <br>
                    <p class="card-text"><?= $winner['nama_calon'] ?>.</p>
                    
                  </div>
                </div>
                <?php } ?>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 text-center">
            <div class="mt-5">
              <!-- Nama Calom -->
              <div class="shadow card animated fadeInRightShort slowest" style="width: 20rem;">
              <canvas id="myChart" width="200" height="200"></canvas>
              <br>
              <br>
                  <div class="card-body">
                    <h5 class="card-title">Perolehan Data Sementara</h5>
                    <br>
                    <p class="card-text"> Hasil dari perhitungan suara sementara</p>
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
  <!-- Footer -->
  <footer class="bg-danger py-5">
    <div class="container">
      <div class="small text-center text-white">Copyright &copy; 2019 - UKM Computer Club - Politeknik Negeri Bali</div>
    </div>
  </footer>



      
      <div class="modal fade" id="RegisterModals" tabindex="-1" role="dialog" aria-labelledby="loginModals" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
            <div class="col-lg-12">
                  <center>
                    <img src="../img/logo.png" height="150" alt="" srcset="">
                    <hr class="modal-hr">
                  </center>
                <div class="form mt-5">
                    <form action="api/register-user.php" method="POST">
                        <input class="form-control mt-2" type="text" name="nim" placeholder="NIM">
                        <input class="form-control mt-2" type="text" name="nama" placeholder="Nama">
                        <br>    
                        <label for="exampleFormControlSelect2" style="margin-left:.5rem"> Jurusan  </label>
                        <select class="form-control" id="exampleFormControlSelect2" name="prodi">
                                <option value="teknik sipil">Tekni Sipil</option>
                                <option value="pariwisata">Pariwisata</option>
                            </select>
                        <br>
                        <br>
                        <hr class="modal-hr">
                        <input class="form-control text-white lead mt-2 bg-danger" type="submit" value="Masuk" name="submit" placeholder="Masuk">
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="adminModals" tabindex="-1" role="dialog" aria-labelledby="adminModals" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
            <div class="col-lg-12">
                  <center>
                    <img src="../img/logo.png" height="150" alt="" srcset="">
                    <hr class="modal-hr">
                  </center>
                <div class="form mt-5">
                    <form action="api/register-admin.php" method="POST">
                      <input class="form-control mt-2" type="text" placeholder="Nama Admin" name="nama">
                      <input class="form-control mt-2" type="text" placeholder="Username" name="username">
                        <input class="form-control mt-2" type="password" placeholder="Password" name="password">
                        <hr class="modal-hr">
                        <input class="form-control text-white lead mt-2 bg-danger" type="submit" value="Masuk" name="submit" placeholder="Masuk">
                    </form>
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
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

  <script type="text/JavaScript"> 

  var ctx = document.getElementById('myChart').getContext('2d');
  var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'doughnut',
    data: data = {
    datasets: [{
      backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
            ],
          data: [
            <?php foreach($dataCount as $data){ ; ?>
                '<?= $data['pemilih'] ?>',
            <?php } ?>
          ]
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
      <?php foreach($dataCount as $data){ ; ?>
                'Calon <?=$data['no_urut'] ?> : <?= $data['pemilih']?> Orang',
            <?php } ?>
      ]
    },

    // Configuration options go here
    options: {}
});
  </script>

  <!-- Plugin JavaScript -->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="../js/creative.min.js"></script>

</body>

</html>

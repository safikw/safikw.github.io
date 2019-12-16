<!DOCTYPE html>
<html lang="en">
  <head>
    <title>lapskuy! Untuk Yogyakarta Lebih Baik</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500|Gaegu:700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.timepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="">lapskuy!</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">

          @guest
          <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Masuk</a></li>
          @if (Route::has('register'))
          <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Daftar</a></li>
          @endif
          @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                   </form>
                  </div>
                  </li>
            @endguest
          </ul>
          </div>
          </nav>
          <main class="py-4">
          @yield('content')
              </ul>
            </div>
          </div>
        </nav>
  <!-- END nav -->
  
  <div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
      <div class="block-30 item" style="background-image: url('assets/images/coba4.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7">
              <h2 class="heading">Bergabunglah Bersama Kami Untuk Membuat Yogyakarta Menjadi Lebih Baik</h2>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  

  <div class="site-section">
    <div class="container">
      <div class="row">
        <h2>Berita</h2>
      </div>
    </div>
  </div>


  <div class="featured-donate overlay-color" style="background-image: url('assets/images/coba6.jpg');">
    
    <div class="container">
      <div class="row">
        <div class="col-lg-8 order-lg-2 mb-3 mb-lg-0">
          <img src="assets/images/coba6.jpg" alt="Image placeholder" class="img-fluid">
        </div>
        <div class="col-lg-4 pr-lg-5">
          <span class="featured-text mb-3 d-block">Peninggalan Sejarah</span>
          <h2>Candi Ratu Boko</h2>
          <p class="mb-3"> Candhi Ratu Baka) adalah situs purbakala yang merupakan kompleks sejumlah sisa bangunan yang berada kira-kira 3 km di sebelah selatan dari kompleks Candi Prambanan, 18 km sebelah timur Kota Yogyakarta atau 50 km barat daya Kota Surakarta, Jawa Tengah, Indonesia. Situs Ratu Boko terletak di sebuah bukit pada ketinggian 196 meter dari permukaan laut. Luas keseluruhan kompleks adalah sekitar 25 ha.</p>
          <p><a href="https://id.wikipedia.org/wiki/Situs_Ratu_Baka" class="btn btn-primary btn-hover-white py-3 px-5">Baca Selengkapnya</a></p>
        </div>
        
      </div>
    </div>

  </div> <!-- .featured-donate -->

  <div class="site-section fund-raisers">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-12">
          <h2>Destinasi Wisata Yogyakarta</h2>
        </div>
      </div>

      <div class="row">
        
        <div class="col-md-12 block-11">
          <div class="nonloop-block-11 owl-carousel">

            <div class="card fundraise-item">
              <a href="#"><img class="card-img-top" src="assets/images/coba7.jpg" alt="Image placeholder"></a>
              <div class="card-body">
                <h3 class="card-title"><a href="https://id.wikipedia.org/wiki/Candi_Prambanan">Candi Prambanan</a></h3>
                <p class="card-text">Candi Prambanan atau Candi Roro Jonggrang adalah kompleks candi Hindu terbesar di Indonesia yang dibangun.</p>
              </div>
            </div>

            
            <div class="card fundraise-item">
              <a href="#"><img class="card-img-top" src="assets/images/coba8.jpg" alt="Image placeholder"></a>
              <div class="card-body">
                <h3 class="card-title"><a href="https://id.wikipedia.org/wiki/Jalan_Malioboro">Malioboro</a></h3>
                <p class="card-text">
                Jalan Malioboro adalah nama salah satu kawasan jalan dari tiga jalan di Kota Yogyakarta yang membentang dari Tugu Yogyakarta.</p>
              </div>
            </div>
            
            <div class="card fundraise-item">
              <a href="#"><img class="card-img-top" src="assets/images/coba4.jpg" alt="Image placeholder"></a>
              <div class="card-body">
                <h3 class="card-title"><a href="https://id.wikipedia.org/wiki/Tugu_Yogyakarta">Tugu</a></h3>
                <p class="card-text">Tugu Yogyakarta adalah sebuah tugu atau monumen yang sering dipakai sebagai simbol atau lambang dari kota Yogyakarta. Tugu ini dibangun oleh pemerintah Belanda setelah tugu sebelumnya.</p>
              </div>
            </div>


            <div class="card fundraise-item">
              <a href="#"><img class="card-img-top" src="assets/images/coba5.jpg" alt="Image placeholder"></a>
              <div class="card-body">
                <h3 class="card-title"><a href="https://id.wikipedia.org/wiki/Situs_Ratu_Baka">Candi Ratu Boko</a></h3>
                <p class="card-text">itus Ratu Baka atau Candi Boko adalah situs purbakala yang merupakan kompleks sejumlah sisa bangunan yang berada kira-kira 3 km di sebelah selatan dari kompleks Candi Prambanan.</p>
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </div>
  </div> <!-- .section -->


  <div class="site-section fund-raisers">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-12 text-center">
          <h2>Tim Sukses</h2>
        </div>
      </div>

       <div class="row">
        <div class="col-md-6 col-lg-3 mb-5">
          <div class="person-donate text-center bg-light pt-4">
            <img src="assets/images/aku.jpg" alt="Image placeholder" class="img-fluid">
            <div class="donate-info">
              <h2>Yudi Febriyanto</h2>
              <span class="time d-block mb-3">Project Manager dan Developer</span>
            </div>
          </div>    
        </div>

        <div class="col-md-6 col-lg-3 mb-5">
          <div class="person-donate text-center bg-light pt-4">
            <img src="assets/images/safik.jpg" alt="Image placeholder" class="img-fluid">
            <div class="donate-info">
              <h2>Safik Widiantoro</h2>
              <span class="time d-block mb-3">Tester dan Developer</span>
            </div>
          </div>    
        </div>

        <div class="col-md-6 col-lg-3 mb-5">
          <div class="person-donate text-center bg-light pt-4">
            <img src="assets/images/ris.jpg" alt="Image placeholder" class="img-fluid">
            <div class="donate-info">
              <h2>Muhammad Rizhan Ridha</h2>
              <span class="time d-block mb-3">Dokumentor dan Developer</span>
            </div>
          </div>    
        </div>

        <div class="col-md-6 col-lg-3 mb-5">
          <div class="person-donate text-center bg-light pt-4">
            <img src="assets/images/rillo.jpg" alt="Image placeholder" class="img-fluid">
            <div class="donate-info">
              <h2>Rillo Muhammad s</h2>
              <span class="time d-block mb-3">Dokumentor dan Developer</span>
            </div>
          </div>    
        </div>
      </div>
    </div>
  </div> <!-- .section -->

  <div class="featured-section overlay-color-2" style="background-image: url('assets/images/coba.png');">
    
    <div class="container">
      <div class="row">

        <div class="col-md-6">
          <img src="assets/images/coba.png" alt="Image placeholder" class="img-fluid">
        </div>

        <div class="col-md-6 pl-md-5">
          <span class="featured-text d-block mb-3">Semua Tentang Wisata Yogyakarta</span>
          <h2>Cari info tentang Wisata Yogyakarta di sini aja </h2>
          <p><a href="https://visitingjogja.com/" class="btn btn-success btn-hover-white py-3 px-5">Kunjungi</a></p>
        </div>
      </div>
    </div>
  </div> <!-- .featured-donate -->

  
  <footer class="footer">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-6 col-lg-4">
          <h3 class="heading-section">Tentang lapskuy!</h3>
          <p class="mb-5">lapskuy! adalah web application yang berguna untuk memantau dan melaporkan kerusakan – kerusakan yang terjadi di daerah pariwisata yang khususnya di Yogyakarta.</p>
        </div>
        
        <div class="col-md-6 col-lg-4">
          <h3 class="heading-section">Tim Sukses</h3>
          <p>Yudi Febriyanto (18523074)</p>
          <p>Safik Widiantoro (18523280)</p>
          <p>Muhammad Rizhan Ridha (18523026)</p>
          <p>Rillo Muhammad surgawa (18523185)</p>
        </div>

       <div class="col-md-6 col-lg-4">
          <div class="block-23">
            <h3 class="heading-section">Hubungi Kami</h3>
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">Universitas Islam Indonesia, Jalan Kaliurang Km 14,5</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+62 274 898444</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@uii.ac.id</span></a></li>
              </ul>
            </div>
        </div>
        
      </div>
      <div class="row pt-5">
        <div class="col-md-12 text-center">
          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> | <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">lapskuy!</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{ asset('assets/js/popper.min.js')}}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('assets/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{ asset('assets/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{ asset('assets/js/jquery.stellar.min.js')}}"></script>
  <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{ asset('assets/js/bootstrap-datepicker.js')}}"></script>
  
  <script src="{{ asset('assets/js/aos.js')}}"></script>
  <script src="{{ asset('assets/js/jquery.animateNumber.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('assets/js/google-map.js')}}"></script>
  <script src="{{ asset('assets/js/main.js')}}"></script>
    
  </body>
</html>
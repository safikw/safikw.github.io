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
      <a class="navbar-brand" href="/beranda">lapskuy!</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="/beranda" class="nav-link">Beranda</a></li>
          <li class="nav-item"><a href="/galery" class="nav-link">Album</a></li>
          <li class="nav-item active"><a href="/Tentang" class="nav-link">Tentang</a></li>
          @if(auth()->user()->role == 'user')
          <li class="nav-item"><a href="/laporan/create" class="nav-link">Laporkan</a></li>
          <li class="nav-item"><a href="/feedbackuser" class="nav-link">Point</a></li>

          @endif
          @if(auth()->user()->role == 'admin')
          <li class="nav-item"><a href="laporan" class="nav-link">Data Laporan</a></li>
          <li class="nav-item"><a href="/feedback" class="nav-link">Beri Rating</a></li>
          @endif
          

          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

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
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->
  
  <div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
      <div class="block-30 block-30-sm item" style="background-image: url('assets/images/coba.png');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center">
              <h2 class="heading">Tentang lapskuy!</h2>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  
  <div class="site-section mb-5">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-12 mb-5">
          <img src="assets/images/coba4.jpg" alt="Image placeholder" class="img-fluid">
        </div>
        <div class="col-md-6">
            <p>Pariwisata merupakan salah satu sektor yang ikut berperan penting dalam usaha peningkatan pendapatan atau devisa negara yang besar. Oleh karena itu penting bagi pemerintah untuk mengembangkan sektor pariwisata lebih baik lagi dan mempromosikan wisata-wisata yang ada di Indonesia kepada wisatawan lokal dan mancanegara.</p>
            <p>Yogyakarta merupakan salah satu kota di Indonesia yang sering dikunjungi oleh wisatawan baik lokal maupun mancanegara. Terdapat banyak tempat wisata di Yogyakarta yang dapat dikunjungi.</p>
            <p>Namun, pertumbuhan jumlah wisatawan yang berkunjung ke Yogyakarta masih fluktuatif. Dari tahun 2015 ke tahun 2016 persentase pendapatan DIY dari sektor pariwisata naik 12,7%, menjadi 32,6%. Akan tetapi, pada tahun 2017 persentase pendapatan DIY dari sektor pariwisata turun menjadi 19,6%. Maka dari itu diperlukan promosi wisata agar jumlah wisatawan dapat meningkat.</p>
          </div>
          <div class="col-md-6">
            <p>Penurunan jumlah wisatawan ke Yogyakarta dapat dipengaruhi beberapa faktor, yaitu keamanan, fasilitas umum, dan kebersihan lingkungan.</p>
            <p>lapskuy! adalah web application yang berguna untuk memantau dan melaporkan kerusakan – kerusakan yang terjadi di daerah pariwisata yang khususnya di Yogyakarta.</p>
          </div>
      </div>
      
      <div class="row mt-5">
        <div class="col-md-12 mb-5 text-center mt-5">
          <h2>Team</h2>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="block-38 text-center">
            <div class="block-38-img">
              <div class="block-38-header">
                <img src="assets/images/aku.jpg" alt="Image placeholder" class="img-fluid" style="width: 50%">
                <h3 class="block-38-heading">Yudi Febriyanto</h3>
                <p class="block-38-subheading">18523074@students.uii.ac.id</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="block-38 text-center">
            <div class="block-38-img">
              <div class="block-38-header">
                <img src="assets/images/safik.jpg" alt="Image placeholder">
                <h3 class="block-38-heading">Safik Widiantoro</h3>
                <p class="block-38-subheading">18523280@students.uii.ac.id</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="block-38 text-center">
            <div class="block-38-img">
              <div class="block-38-header">
                <img src="assets/images/ris.jpg" alt="Image placeholder">
                <h3 class="block-38-heading">Muhammad Rizhan Ridha</h3>
                <p class="block-38-subheading">18523026@students.uii.ac.id</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="block-38 text-center">
            <div class="block-38-img">
              <div class="block-38-header">
                <img src="assets/images/rillo.jpg" alt="Image placeholder">
                <h3 class="block-38-heading">Rillo Muhammad surgawa</h3>
                <p class="block-38-subheading">18523185@students.uii.ac.id</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="block-31 mb-5" style="position: relative;">
          <div class="owl-carousel loop-block-31">
            <div class="block-30 no-overlay item" style="background-image: url('assets/images/coba4.jpg');"></div>
            <div class="block-30 no-overlay item" style="background-image: url('assets/images/coba6.jpg');"></div>
            <div class="block-30 no-overlay item" style="background-image: url('assets/images/coba.png');"></div>
          </div>
        </div>
    </div>
  </div>

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
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> | <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">lapskyu!</a>
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
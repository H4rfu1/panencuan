<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="description" content="Mobile Application HTML5 Template">

  <meta name="copyright" content="MACode ID, https://www.macodeid.com/">

  <title>Home</title>

  <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

  <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">

  <link rel="stylesheet" href="assets/css/maicons.css">

  <link rel="stylesheet" href="assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="assets/vendor/owl-carousel/css/owl.carousel.min.css">

  <link rel="stylesheet" href="assets/css/bootstrap.css">

  <link rel="stylesheet" href="assets/css/mobster.css">
  <link rel="stylesheet" href="assets/css/nav.css">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark navbar-floating">
  <div class="container">
    <a class="navbar-brand" href="{{url('/')}}">
      <img src="{{asset('assets/favicon-light.png')}}" alt="" width="40">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarToggler">
      <ul class="navbar-nav ml-auto mt-3 mt-lg-0">
        <li class="nav-item @if(Route::current()->getName() == 'home'){{'active'}}@endif">
			<a class="nav-link" href="{{url('/')}}">Home</a>
        </li>
		@if(Auth::check())
			@if(Auth::user()->role_id == 1)
			<li class="nav-item @if(Route::current()->getName() == 'video'){{'active'}}@endif">
				<a class="nav-link" href="{{url('video')}}">Video</a>
			</li>
			<li class="nav-item @if(Route::current()->getName() == 'emiten'){{'active'}}@endif">
				<a class="nav-link" href="{{url('emiten')}}">Analisis Emiten</a>
			</li>
			<li class="nav-item @if(Route::current()->getName() == 'webinar'){{'active'}}@endif">
				<a class="nav-link" href="webinar">Webinar</a>
			</li>
			<li class="nav-item @if(Route::current()->getName() == 'kalkulator'){{'active'}}@endif">
				<a class="nav-link" href="{{url('kalkulator')}}">Kalkulator</a>
			</li>
			@if(Auth::user()->status_id == 2)
			<li class="nav-item @if(Route::current()->getName() == 'komunitas'){{'active'}}@endif">
				<a class="nav-link" href="{{url('komunitas')}}">Komunitas</a>
			</li>
			@endif
			<li class="nav-item @if(Route::current()->getName() == 'diskusi'){{'active'}}@endif">
				<a class="nav-link" href="diskusi">Diskusi</a>
			</li>
			@endif
			@if(Auth::user()->role_id == 3)
			<li class="nav-item @if(Route::current()->getName() == 'komunitas'){{'active'}}@endif">
				<a class="nav-link" href="{{url('komunitas')}}">Komunitas</a>
			</li>
			<li class="nav-item @if(Route::current()->getName() == 'diskusi'){{'active'}}@endif">
				<a class="nav-link" href="diskusi">Diskusi</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{url('pemateri')}}">Dashboard</a>
			</li>
			@endif
		@endif
      </ul>
      @if(Auth::check())
      <div class="ml-auto my-2 my-lg-0">
        <!-- <a href="login.html" class="btn btn-dark rounded-pill" role="button">Login</a>
        <a href="daftar.html" class="btn btn-dark rounded-pill" role="button">Register</a> -->
        <div class="dropdown">
          <a href="#" data-toggle="dropdown" class="dropdown-toggle user-action text-white text-decoration-none"><img src="{{asset('images/img.png')}}" class="rounded-circle" alt="Avatar">{{Auth::user()->name}}<b class="caret"></b></a>
          <ul class="dropdown-menu">
            @if(Auth::user()->role_id == 3)
            <li><a href="{{url('/pemateri')}}" class="text-decoration-none"><i class="fa fa-tachometer"></i> Dashboard</a></li>
            @endif
            <li><a href="{{url('/profil')}}" class="text-decoration-none"><i class="fa fa-user-o"></i> Profile</a></li>
            @if(Auth::user()->role_id == 1)
            <li><a href="{{url('/membership')}}" class="text-decoration-none"><i class="fa fa-level-up"></i> Membership</a></li>
			      @endif
            <!-- <li><a href="#" class="text-decoration-none"><i class="fa fa-calendar-o"></i> Calendar</a></li>
            <li><a href="#" class="text-decoration-none"><i class="fa fa-sliders"></i> Settings</a></li> -->
            <li class="dropdown-divider"></li>
            <li><a href="#" data-toggle="modal" data-target="#exampleModal" class="text-decoration-none"><i class="fa fa-sign-out"></i> Logout</a></li>
          </ul>
			  </div>
      </div>
      @else
      <div class="ml-auto my-2 my-lg-0">
        <a href="{{url('/login')}}" class="btn btn-dark rounded-pill" role="button">Login</a>
        <a href="{{url('/register')}}" class="btn btn-dark rounded-pill" role="button">Daftar</a>
      </div>
      @endif
    </div>
  </div>
</nav>

<div class="page-hero-section bg-image hero-home-2" style="background-image: url(assets/img/bg_hero_2.svg);">
  <div class="hero-caption">
    <div class="container fg-white h-100">
      <div class="row align-items-center h-100">
        <div class="col-lg-6 wow fadeInUp">
          <div class="badge badge-soft mb-2">#1 Website Finansial</div>
          <h1 class="mb-4 fw-normal">Mahasiswa Belajar Finansial</h1>
          <p class="mb-4">Mendapat materi seputar finansial <br>
          Menemukan komunitas terbaik.</p>

          <a href="{{url('register')}}" class="btn btn-dark">Daftar</a>

        </div>
        <div class="col-lg-6 d-none d-lg-block wow zoomIn">
          <div class="img-place mobile-preview shadow floating-animate">
            <img src="assets/img/app_showcase.svg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="page-section no-scroll">
  <div class="container">
  <div id="carouselExampleIndicators" class="carousel slide wow zoomIn" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{asset('images/slide show 1.jpg')}}" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('images/slide show 2.jpg')}}" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('images/slide show 3.jpg')}}" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('images/slide show 4.jpg')}}" alt="Four slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('images/slide show 5.jpg')}}" alt="five slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
</div>

<div class="page-section no-scroll">
  <div class="container">
  @if (session('status'))
        <div class="text-success text-center mb-3">
            <small>
                {{ session('status') }}
            </small>
        </div>
    @endif 
    <h2 class="text-center wow fadeIn">Panencuan</h2>

    <div class="row justify-content-center mt-5">
      <div class="col-lg-10">
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4 py-3 wow fadeInLeft">
            <div class="card card-body border-0 text-center shadow pt-5">
              <div class="svg-icon mx-auto mb-4">
                <img src="assets/img/icons/payment.png" alt="">
              </div>
              <h5 class="fg-gray">Kenapa kami?</h5>
              <p class="fs-small"><strong>Karena kami yang pertama</strong> <br>
kami satu-satunya forum edukasi finansial di Universitas Jember yang bekerjasama dengan Kelompok Studi Pasar Modal – Galeri Investasi di Universitas Jember yang ahli di bidangnya
</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 py-3 wow fadeInUp">
            <div class="card card-body border-0 text-center shadow pt-5">
              <div class="svg-icon mx-auto mb-4">
                <img src="assets/img/icons/customizable.png" alt="">
              </div>
              <h5 class="fg-gray">Misi Kami</h5>
              <p class="fs-small"><strong>Edukasi Finansial</strong> <br>
Menjadi sarana informasi dan edukasi mengenai finansial dan pasar modal di kalangan mahasiswa untuk mewujudkan mahasiswa yang bebas finansial di masa depan
</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 py-3 wow fadeInRight">
            <div class="card card-body border-0 text-center shadow pt-5">
              <div class="svg-icon mx-auto mb-4">
                <img src="assets/img/icons/concept.png" alt="">
              </div>
              <h5 class="fg-gray">Yang Kami Lakukan</h5>
              <p class="fs-small"><strong>Mengedukasi finansial dan Pasar Modal Ke Mahasiswa</strong> <br>
Dengan adanya Panen Cuan ini untuk kalangan mahasiswa diharapkan dapat menjadi jembatan untuk mengenalkan finansial dan pasar modal kepada mahasiswa yang masih buta mengenai finansial dan pasar modal
</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<hr>

<!-- Pricing Table -->
<div class="page-section">
  <div class="container">
    <div class="row justify-content-center text-center wow fadeInUp">
      <div class="col-lg-6">
        <h2 class="mb-3">Membership PANEN CUAN</h2>
        <p class="mb-5">Dapatkan lebih banyak manfaat dengan membership</p>
      </div>
    </div>
    <div class="pricing-table mt-5 wow fadeInUp">
      @foreach($paket as $p)
      <div class="pricing-item active no-transform">
        <div class="pricing-header">
          <h5>{{$p->nama_paket}}</h5>
          <h1 class="fw-normal">Rp. {{$p->harga}}</h1>
        </div>
        <div class="pricing-body">
          <ul class="theme-list">
            <li class="list-item">Melihat Semua Video</li>
            <li class="list-item">ikut live kelas member tiap bulan</li>
            <li class="list-item">Mendapatkan grup komunitas</li>
            <li class="list-item">harga spesial untuk webinar dan live kelas</li>
            <li class="list-item">Sinyal saham di grup komunitas</li>
          </ul>
        </div>
        <a class="btn btn-dark" href="{{url('membership/'.$p->id_paket)}}">Pilih Plan</a>
      </div>
      @endforeach
    </div>
  </div>
</div>

<hr>

<!-- FAQ -->
<div class="page-section bg-light">
  <div class="container">
  <div class="row justify-content-center text-center wow fadeInUp">
      <div class="col-lg-6">
        <h2 class="mb-3">Daftar Webinar/Live Kelas</h2>
        <p class="mb-5">Dapatkan lebih ilmu dengan join webinar / live kelas</p>
      </div>
    </div>

    <div class="row justify-content-center align-items-center wow fadeInUp">
      <div class="card-group">
      @foreach($webinar as $p)
      @if($loop->iteration > 4)
      @php break; @endphp
      @endif
        <div class="card">
          <img class="card-img-top" src="{{asset('storage/image/'.$p->image)}}" alt="Card image cap mx-auto d-block" style="max-height: 300px; ">
          <div class="card-body">
            <h5 class="card-title">{{$p->opsi}} : {{$p->judul}}</h5>
            <p class="card-text">{{$p->deskripsi}}</p>
            <p class="card-text"><small class="text-muted"> {{ substr($p->waktu,0,10) }} </small></p>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>

<!-- Clients -->
<div class="page-section">
  <div class="container">
    <div class="text-center wow fadeIn">
      <h2 class="mb-4">Our partners</h2>
    </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 justify-content-center align-items-center mt-5">
      <div class="p-3 wow zoomIn">
        <div class="img-place client-img" style="min-hight:200px;">
          <img src="{{asset('images/kspm.png')}}" alt="">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="page-footer-section bg-dark fg-white">
  <div class="container mb-5">
    <div class="row justify-content-center text-center wow fadeInUp">
      <div class="col-lg-8">
        <div class="text-center mb-3">
          <img src="assets/favicon-light.png" alt="" height="80">
        </div>
        <h3 class="mb-3"><span class="fg-primary">Panen</span>Cuan</h3>
      </div>
    </div>
  </div>

  <hr>
  <!-- Please don't remove or modify the credits below -->
  <p class="text-center mt-4 wow fadeIn">Copyright &copy; 2020 <a href="https://www.macodeid.com/" class="fg-white fw-medium">MACode ID</a>. All right reserved</p>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
              @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Apakah anda yakin ingin keluar?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Logout</button>
      </div>
      </form>
    </div>
  </div>
</div>

<script src="assets/js/jquery-3.5.1.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="assets/vendor/wow/wow.min.js"></script>

<script src="assets/js/mobster.js"></script>

</body>
</html>

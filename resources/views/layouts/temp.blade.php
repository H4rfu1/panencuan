<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="description" content="Mobile Application HTML5 Template">

  <meta name="copyright" content="MACode ID, https://www.macodeid.com/">

  <title>PenenCuan</title>

  <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">

  <link rel="shortcut icon" href="{{asset('assets/favicon.png')}}" type="image/x-icon">

  <link rel="stylesheet" href="{{asset('assets/css/maicons.css')}}">

  <link rel="stylesheet" href="{{asset('assets/vendor/animate/animate.css')}}">

  <link rel="stylesheet" href="{{asset('assets/vendor/owl-carousel/css/owl.carousel.min.css')}}">

  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">

  <link rel="stylesheet" href="{{asset('assets/css/mobster.css')}}">

  <style>
        body {
        background-color: #f9f9fa
    }

    .padding {
        padding: 3rem !important
    }

    .user-card-full {
        overflow: hidden
    }

    .card {
        border-radius: 5px;
        -webkit-box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
        box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
        border: none;
        margin-bottom: 30px
    }

    .m-r-0 {
        margin-right: 0px
    }

    .m-l-0 {
        margin-left: 0px
    }

    .user-card-full .user-profile {
        border-radius: 5px 0 0 5px
    }

    .bg-c-lite-green {
        background: -webkit-gradient(linear, left top, right top, from(#6a11cb), to(#2575fc));
        background: linear-gradient(to 6a11cb, #ee5a6f, #2575fc)
    }

    .user-profile {
        padding: 20px 0
    }

    .card-block {
        padding: 1.25rem
    }

    .m-b-25 {
        margin-bottom: 25px
    }

    .img-radius {
        border-radius: 5px
    }

    h6 {
        font-size: 14px
    }

    .card .card-block p {
        line-height: 25px
    }

    @media only screen and (min-width: 1400px) {
        p {
            font-size: 14px
        }
    }

    .card-block {
        padding: 1.25rem
    }

    .b-b-default {
        border-bottom: 1px solid #e0e0e0
    }

    .m-b-20 {
        margin-bottom: 20px
    }

    .p-b-5 {
        padding-bottom: 5px !important
    }

    .card .card-block p {
        line-height: 25px
    }

    .m-b-10 {
        margin-bottom: 10px
    }

    .text-muted {
        color: #919aa3 !important
    }

    .b-b-default {
        border-bottom: 1px solid #e0e0e0
    }

    .f-w-600 {
        font-weight: 600
    }

    .m-b-20 {
        margin-bottom: 20px
    }

    .m-t-40 {
        margin-top: 20px
    }

    .p-b-5 {
        padding-bottom: 5px !important
    }

    .m-b-10 {
        margin-bottom: 10px
    }

    .m-t-40 {
        margin-top: 20px
    }

    .user-card-full .social-link li {
        display: inline-block
    }

    .user-card-full .social-link li a {
        font-size: 20px;
        margin: 0 10px 0 0;
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out
    }
  </style>
  
  <link rel="stylesheet" href="{{asset('assets/css/nav.css')}}">

  
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
        <li class="nav-item">
          <a class="nav-link" href="{{url('')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('membership')}}">Upgrade Member</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Webinar</a>
        </li>
      </ul>
      @if(Auth::check())
      <div class="ml-auto my-2 my-lg-0">
        <!-- <a href="login.html" class="btn btn-dark rounded-pill" role="button">Login</a>
        <a href="daftar.html" class="btn btn-dark rounded-pill" role="button">Register</a> -->
        <div class="dropdown">
          <a href="#" data-toggle="dropdown" class="dropdown-toggle user-action text-white text-decoration-none"><img src="https://www.tutorialrepublic.com/examples/images/avatar/2.jpg" class="rounded-circle" alt="Avatar">{{Auth::user()->name}}<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="{{url('/profil')}}" class="text-decoration-none"><i class="fa fa-user-o"></i> Profile</a></li>
            <!-- <li><a href="#" class="text-decoration-none"><i class="fa fa-calendar-o"></i> Calendar</a></li>
            <li><a href="#" class="text-decoration-none"><i class="fa fa-sliders"></i> Settings</a></li> -->
            <li class="dropdown-divider"></li>
            <li><a href="{{ route('logout') }}"
                  onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-decoration-none"><i class="fa fa-sign-out"></i> Logout</a></li>
          </ul>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
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


<div class="bg-light">

<div class="page-hero-section bg-image hero-mini" style="background-image: url({{asset('assets/img/hero_mini.svg')}});">
  <div class="hero-caption">
    <div class="container fg-white h-100">
      <div class="row justify-content-center align-items-center text-center h-100">
        <div class="col-lg-6">
          <h3 class="mb-3 fw-medium">Profil</h3>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-dark justify-content-center bg-transparent">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">@yield('judul')</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>

@yield('content')

</div>


<div class="page-footer-section bg-dark fg-white p-2">
  <div class="d-flex justify-content-center">
        <p class="d-inline-block center">Copyright &copy; <a href="https://www.macodeid.com/" class="fg-white fw-medium">MACode ID</a>. All rights reserved</p>
  </div>
</div>

<script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>

<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('assets/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('assets/vendor/wow/wow.min.js')}}"></script>

<script src="{{asset('assets/js/mobster.js')}}"></script>

</body>
</html>
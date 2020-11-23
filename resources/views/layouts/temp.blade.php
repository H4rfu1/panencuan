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

  @if(Route::current()->getName() == 'purchase')
  <style>
    .credit-card{
 background-color: #f4f4f4;
  height: 100vh;
  width: 100%;
  
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.card-holder {
  margin: 2em 0;
}

.img-box {
 padding-top: 20px;    
 display: flex;
 justify-content: center;
}
.card-box {
  font-weight: 800;
  padding: 1em 1em;
  border-radius: 0.25em;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}
.bg-news {
  background: -webkit-linear-gradient(70deg, #6a11cb 0%, #2575fc 60%);
  background: -o-linear-gradient(70deg, #6a11cb 0%, #2575fc 60%);
  background: -moz-linear-gradient(70deg, #6a11cb 0%, #2575fc 60%);
  background: linear-gradient(70deg, #6a11cb 0%, #2575fc 60%);
}
.btn-primary{
 background-image: -webkit-linear-gradient(315deg, #2575fc 0%, #6a11cb 100%);
background-image: -moz- oldlinear-gradient(315deg, #2575fc 0%, #6a11cb 100%);
background-image: -o-linear-gradient(315deg, #2575fc 0%, #6a11cb 100%);
background-image: linear-gradient(135deg, #2575fc 0%, #6a11cb 100%);
-webkit-filter: hue-rotate(0deg);
filter: hue-rotate(0deg);
border: none !important;
}

.credit-card form{
	background-color: #ffffff;
	padding: 0;
	max-width: 600px;
	margin: auto;
}

.credit-card .title{
	font-family: 'Abhaya Libre', serif;
	font-size: 1em;
	color: #2C3E50;
	border-bottom: 1px solid rgba(0,0,0,0.1);
	margin-bottom: 0.8em;
	font-weight: 600;
	padding-bottom: 8px;
}
.credit-card .card-details{
	padding: 25px 25px 15px;
}

.inner-addon {
  position: relative;
}

.inner-addon .fas, .inner-addon .far {
  position: absolute;
  padding: 10px;
  pointer-events: none;
  color: #bcbdbd !important;
}
.right-addon .fas, .right-addon .far { right: 0px; top: 40px;}
.right-addon input { padding-right: 30px; }

.credit-card .card-details label{
	font-family: 'Abhaya Libre', serif;
	font-size: 14px;
	font-weight: 400;
	margin-bottom: 15px;
	color: #79818a;
	text-transform: uppercase;
}

.credit-card .card-details input[type="text"] {
	font-family: "Poppins", sans-serif;
	font-size: 16px;
	font-weight: 500;
	padding: 10px 10px 10px 5px;
	-webkit-appearance: none;
	display: block;
	background: #fafafa;
	color: #636363;
	border: none;
	border-radius: 0;
	border-bottom: 1px solid #757575;	
}
.credit-card .card-details input[type="text"]:focus { outline: none; }

.credit-card .card-details button{
	margin-top: 0.6em;
	padding:12px 0;
	font-weight: 600;
}

.credit-card .date-separator{
 	margin-left: 10px;
    margin-right: 10px;
    margin-top: 5px;
}

@media (max-width: 768px) {
	.credit-card{
	  height: 250vh;
	  width: 100%;
	}
	.credit-card .title {
		font-size: 1.2em; 
	}

	.credit-card .row .col-lg-6 {
		margin-bottom: 40px; 
  	}
  	.credit-card .card-details {
    	padding: 40px 40px 30px; 
    }

  	.credit-card .card-details button {
    	margin-top: 2em; 
    } 
}
  </style>
 @endif 

 @if(Route::current()->getName() == 'komunitas' | Route::current()->getName() == 'video' | Route::current()->getName() == 'emiten')
 <style>
	 .bg-light{
			background: #7F7FD5;
	       background: -webkit-linear-gradient(135deg, #2575fc 0%, #6a11cb 60%);
	        background: linear-gradient(135deg, #2575fc 0%, #6a11cb 60%);
		}
 </style>
 @endif 

 @if(Route::current()->getName() == 'komunitas')
  <style>
		.chat{
			margin-top: auto;
			margin-bottom: auto;
		}
		.card{
			height: 500px;
			border-radius: 15px !important;
			background-color: rgba(0,0,0,0.4) !important;
		}
		.contacts_body{
			padding:  0.75rem 0 !important;
			overflow-y: auto;
			white-space: nowrap;
		}
		.msg_card_body{
			overflow-y: auto;
		}
		.card-header{
			border-radius: 15px 15px 0 0 !important;
			border-bottom: 0 !important;
		}
	 .card-footer{
		border-radius: 0 0 15px 15px !important;
			border-top: 0 !important;
	}
		.container{
			align-content: center;
		}
		.search{
			border-radius: 15px 0 0 15px !important;
			background-color: rgba(0,0,0,0.3) !important;
			border:0 !important;
			color:white !important;
		}
		.search:focus{
		     box-shadow:none !important;
           outline:0px !important;
		}
		.type_msg{
			background-color: rgba(0,0,0,0.3) !important;
			border:0 !important;
			color:white !important;
			height: 60px !important;
			overflow-y: auto;
		}
			.type_msg:focus{
		     box-shadow:none !important;
           outline:0px !important;
		}
		.attach_btn{
	border-radius: 15px 0 0 15px !important;
	background-color: rgba(0,0,0,0.3) !important;
			border:0 !important;
			color: white !important;
			cursor: pointer;
		}
		.send_btn{
	border-radius: 0 15px 15px 0 !important;
	background-color: rgba(0,0,0,0.3) !important;
			border:0 !important;
			color: white !important;
			cursor: pointer;
		}
		.search_btn{
			border-radius: 0 15px 15px 0 !important;
			background-color: rgba(0,0,0,0.3) !important;
			border:0 !important;
			color: white !important;
			cursor: pointer;
		}
		.contacts{
			list-style: none;
			padding: 0;
		}
		.contacts li{
			width: 100% !important;
			padding: 5px 10px;
			margin-bottom: 15px !important;
		}
	}
		.user_img{
			height: 70px;
			width: 70px;
			border:1.5px solid #f5f6fa;
		
		}
		.user_img_msg{
			height: 40px;
			width: 40px;
			border:1.5px solid #f5f6fa;
		
		}
	.img_cont{
			position: relative;
			height: 70px;
			width: 70px;
	}
	.img_cont_msg{
			height: 40px;
			width: 40px;
	}
	.online_icon{
		position: absolute;
		height: 15px;
		width:15px;
		background-color: #4cd137;
		border-radius: 50%;
		bottom: 0.2em;
		right: 0.4em;
		border:1.5px solid white;
	}
	.offline{
		background-color: #c23616 !important;
	}
	.user_info{
		margin-top: auto;
		margin-bottom: auto;
		margin-left: 15px;
	}
	.user_info span{
		font-size: 20px;
		color: white;
	}
	.user_info p{
	font-size: 10px;
	color: rgba(255,255,255,0.6);
	}
	.video_cam{
		margin-left: 50px;
		margin-top: 5px;
	}
	.video_cam span{
		color: white;
		font-size: 20px;
		cursor: pointer;
		margin-right: 20px;
	}
	.msg_cotainer{
		margin-top: auto;
		margin-bottom: auto;
		margin-left: 10px;
		border-radius: 25px;
		background-color: #82ccdd;
		padding: 10px;
		position: relative;
	}
	.msg_cotainer_send{
		margin-top: auto;
		margin-bottom: auto;
		margin-right: 10px;
		border-radius: 25px;
		background-color: #78e08f;
		padding: 10px;
		position: relative;
	}
	.msg_time{
		position: absolute;
		left: 0;
		bottom: -15px;
		color: rgba(255,255,255,0.5);
		font-size: 10px;
	}
	.msg_time_send{
		position: absolute;
		right:0;
		bottom: -15px;
		color: rgba(255,255,255,0.5);
		font-size: 10px;
	}
	.msg_head{
		position: relative;
	}
	#action_menu_btn{
		position: absolute;
		right: 10px;
		top: 10px;
		color: white;
		cursor: pointer;
		font-size: 20px;
	}
	.action_menu{
		z-index: 1;
		position: absolute;
		padding: 15px 0;
		background-color: rgba(0,0,0,0.5);
		color: white;
		border-radius: 15px;
		top: 30px;
		right: 15px;
		display: none;
	}
	.action_menu ul{
		list-style: none;
		padding: 0;
	margin: 0;
	}
	.action_menu ul li{
		width: 100%;
		padding: 10px 15px;
		margin-bottom: 5px;
	}
	.action_menu ul li i{
		padding-right: 10px;
	
	}
	.action_menu ul li:hover{
		cursor: pointer;
		background-color: rgba(0,0,0,0.2);
	}
	@media(max-width: 576px){
	.contacts_card{
		margin-bottom: 15px !important;
	}
	}
  </style>
 @endif 
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
          <a class="nav-link" href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('membership')}}">Upgrade Member</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('video')}}">Video</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('komunitas')}}">Komunitas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('emiten')}}">Analisis Emiten</a>
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


<div class="bg-light">

<div class="page-hero-section bg-image hero-mini" style="background-image: url({{asset('assets/img/hero_mini.svg')}});">
  <div class="hero-caption">
    <div class="container fg-white h-100">
      <div class="row justify-content-center align-items-center text-center h-100">
        <div class="col-lg-6">
          <h3 class="mb-3 fw-medium">@yield('judul1')</h3>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-dark justify-content-center bg-transparent">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
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


<script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>

<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('assets/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('assets/vendor/wow/wow.min.js')}}"></script>

<script src="{{asset('assets/js/mobster.js')}}"></script>

</body>
</html>
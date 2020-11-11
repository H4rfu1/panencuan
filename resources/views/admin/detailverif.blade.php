<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{url('favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{url('favicon.ico')}}" type="image/x-icon">

    <title>Panen Cuan</title>
    <!-- Bootstrap -->
    <link href="{{url('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{url('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{url('vendors/nprogress/nprogress.css" rel="stylesheet')}}">

    <!-- Custom Theme Style -->
    <link href="{{url('css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{url('home')}}" class="site_title"><img src="{{asset('assets/favicon-light.png')}}" height="55" > <span>PanenCuan</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{asset('images/img.jpg')}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>nama</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Akun</h3>
                <ul class="nav side-menu">
                <li><a href="{{url('admin/userverif')}}"><i class="fa fa-laptop"></i> Verifikasi Member</a></li>
                  <li><a><i class="fa fa-sitemap"></i> Kelola Akun <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="{{url('admin/user')}}">Akun Member</a>
                        <li><a href="{{url('admin/pemateri')}}">Akun Pemateri</a>
                        </li>
                    </ul>
                  </li>                  
                </ul>
              </div>
              <div class="menu_section">
                <h3>Materi</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bar-chart-o"></i> video <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Laporan Harian</a>
                        <li><a href="#level1_2">Laporan Bulanan</a>
                        </li>
                    </ul>
                  </li>                  
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <!-- <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a> -->
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <img src="{{asset('images/img.jpg')}}" alt="">nama
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="#"> Profile</a>
                      <a class="dropdown-item"  href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                  </li>
  
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Detail Pembayaran</h3>
                        </div>

                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Akun 
                                    </h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                        <div class="field item form-group">
                                            <label class="col-md-3 col-sm-3  label-align">Nama<span > : </span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <p>{{$data->name}}</p>
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-md-3 col-sm-3  label-align">Email<span > : </span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <p> {{$data->email}} </p></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-md-3 col-sm-3  label-align">harga<span > : </span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <p> {{$data->harga}} </p></div>
                                        </div>
                                        <!-- <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Confirm email address<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="email" class='email' name="confirm_email" data-validate-linked='email' required='required' /></div>
                                        </div> -->
                                        <!-- <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">No. HP <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="number" class='number' name="number" data-validate-minmax="10,100" required='required'></div>
                                        </div> -->
                                        <!-- <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Time<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='time' type="time" name="time" required='required'></div>
                                        </div> -->
<!--                                         
                                        <div class="field item form-group">
											<label class="col-form-label col-md-3 col-sm-3  label-align">Password<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6">
												<input class="form-control" type="password" id="password1" name="password" pattern="(?=.*[a-z,A-Z]).{3,}" title="Minimum 8 Characters Including An Upper And Lower Case Letter, A Number And A Unique Character" required />
												
												<span style="position: absolute;right:15px;top:7px;" onclick="hideshow()" >
													<i id="slash" class="fa fa-eye-slash"></i>
													<i id="eye" class="fa fa-eye"></i>
												</span>
											</div>
										</div> -->
                                        
                                        <!-- <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Ulangi password<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="password" name="password2" data-validate-linked='password' required='required' /></div>
                                        </div> -->
                                        <div class="field item form-group">
                                            <label class="col-md-3 col-sm-3  label-align">Nim<span > : </span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <p>{{$data->nim}}</p></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-md-3 col-sm-3  label-align">jurusan<span > : </span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <p>{{$data->jurusan}}</p>
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-md-3 col-sm-3  label-align">bukti pembayaran<span > : </span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <img src="{{asset('storage/image/'.$data->foto)}}" alt="" srcset="" width="400">
                                            </div>
                                        </div>
                                        <div class="ln_solid">
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-3">
                                                    <a class="btn btn-danger" href = "{{url('admin/userverif')}}
                                                    ">Kembali</a>
                                                    <form action="{{url('/admin/verif')}}" method="post" class="d-inline">
                                                  @csrf
                                                  <input type="hidden" name="id" value="{{$data->id_pembayaran}}">
                                                  <button type="submit" class="btn btn-success">Setujui</button>
                                                  </form>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="{{url('vendors/validator/multifield.js')}}"></script>
    <script src="{{url('vendors/validator/validator.js')}}"></script>
    
    <!-- Javascript functions	-->
	<script>
		function hideshow(){
			var password = document.getElementById("password1");
			var slash = document.getElementById("slash");
			var eye = document.getElementById("eye");
			
			if(password.type === 'password'){
				password.type = "text";
				slash.style.display = "block";
				eye.style.display = "none";
			}
			else{
				password.type = "password";
				slash.style.display = "none";
				eye.style.display = "block";
			}

		}
	</script>

    <script>
        // initialize a validator instance from the "FormValidator" constructor.
        // A "<form>" element is optionally passed as an argument, but is not a must
        var validator = new FormValidator({
            "events": ['blur', 'input', 'change']
        }, document.forms[0]);
        // on form "submit" event
        document.forms[0].onsubmit = function(e) {
            var submit = true,
                validatorResult = validator.checkAll(this);
            console.log(validatorResult);
            return !!validatorResult.valid;
        };
        // on form "reset" event
        document.forms[0].onreset = function(e) {
            validator.reset();
        };
        // stuff related ONLY for this demo page:
        $('.toggleValidationTooltips').change(function() {
            validator.settings.alerts = !this.checked;
            if (this.checked)
                $('form .alert').remove();
        }).prop('checked', false);

    </script>

    <!-- jQuery -->
    <script src="{{url('vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{url('vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{url('vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{url('vendors/nprogress/nprogress.js')}}"></script>
    <!-- validator -->
    <!-- <script src="vendors/validator/validator.js"></script> -->

    <!-- Custom Theme Scripts -->
    <script src="{{url('js/custom.min.js')}}"></script>

</body>

</html>
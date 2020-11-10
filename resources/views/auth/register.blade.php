@extends('layouts.auth')

@section('judul', 'Daftar')

@section('content')
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-b-160 p-t-50">
				<form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
					@csrf

					<div class="login100-form-avatar">
						<a href="{{url('/')}}"><img src="assets/favicon-light.png" alt="AVATAR"></a>
					</div>
					<span class="login100-form-title p-t-20 p-b-45">
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Name is required">
						<input id="name" class="input100 @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Nama Lengkap">
						<span class="focus-input100">asd</span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle"></i>
						</span>
						@error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input id="username" class="input100 @error('username') is-invalid @enderror" type="text" name="username" value="{{ old('username') }}" required autocomplete="username" placeholder="Username">
						<span class="focus-input100">asd</span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
						@error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>
					
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Email is required">
						<input id="email"  class="input100 @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope"></i>
						</span>
						@error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input id="jenis_kelamin" class="input100 @error('jenis_kelamin') is-invalid @enderror" type="text" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}" required autocomplete="jenis_kelamin" placeholder="Jenis Kelamin">
						<span class="focus-input100">asd</span>
						<span class="symbol-input100">
							<i class="fa fa-venus-mars"></i>
						</span>
						@error('jenis_kelamin')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input id="tanggal" class="input100 @error('tanggal') is-invalid @enderror" type="date" name="tanggal" value="{{ old('tanggal') }}" required autocomplete="tanggal" placeholder="Tanggal Lahir">
						<span class="focus-input100">asd</span>
						<span class="symbol-input100">
							<i class="fa fa-calendar"></i>
						</span>
						@error('tanggal')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input id="kota" class="input100 @error('kota') is-invalid @enderror" type="text" name="kota" value="{{ old('kota') }}" required autocomplete="kota" placeholder="Kota">
						<span class="focus-input100">asd</span>
						<span class="symbol-input100">
							<i class="fa fa-building"></i>
						</span>
						@error('kota')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input id="no_hp" class="input100 @error('no_hp') is-invalid @enderror" type="text" name="no_hp" value="{{ old('no_hp') }}" required autocomplete="no_hp" placeholder="No. HP">
						<span class="focus-input100">asd</span>
						<span class="symbol-input100">
							<i class="fa fa-phone"></i>
						</span>
						@error('no_hp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input id="nim" class="input100 @error('nim') is-invalid @enderror" type="text" name="nim" value="{{ old('nim') }}" required autocomplete="nim" placeholder="NIM">
						<span class="focus-input100">asd</span>
						<span class="symbol-input100">
							<i class="fa fa-id-card"></i>
						</span>
						@error('nim')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input id="jurusan" class="input100 @error('jurusan') is-invalid @enderror" type="jurusan" name="jurusan" value="{{ old('jurusan') }}" required autocomplete="jurusan" placeholder="Jurusan">
						<span class="focus-input100">asd</span>
						<span class="symbol-input100">
							<i class="fa fa-industry"></i>
						</span>
						@error('jurusan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input id="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" type="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>
					@error('password')
                        <span>
                                <strong>{{ $message }}</strong>
                        </span>
                    @enderror
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="password_confirmation" placeholder="Konfirmasi Password" id="password-confirm" required autocomplete="new-password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn" type="submit">
							{{ __('Daftar') }}
						</button>
					</div>
					<div class="text-center w-full p-t-23">
						<a href="{{url('/login')}}" class="txt1 float-left" >
									{{ __('Login') }}
						</a>
						<a href="#" class="txt1 float-right">
									{{ __('Lupa password?') }}
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
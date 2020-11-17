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
						<input id="name" class="input100 @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" autocomplete="name" placeholder="Nama Lengkap" >
						<span class="focus-input100">asd</span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input id="username" class="input100 @error('username') is-invalid @enderror" type="text" name="username" value="{{ old('username') }}" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" autocomplete="username" placeholder="Username">
						<span class="focus-input100">asd</span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>
					@error('username')
							<p class=" text-center text-white">{{ $message }}</p>
					@enderror
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Email is required">
						<input id="email"  class="input100 @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" autocomplete="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope"></i>
						</span>
					</div>
					@error('email')
							<p class=" text-center text-white">{{ $message }}</p>
					@enderror

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input id="jenis_kelamin" class="input100 @error('jenis_kelamin') is-invalid @enderror" type="text" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}" required autocomplete="jenis_kelamin" placeholder="Jenis Kelamin" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
						<span class="focus-input100">asd</span>
						<span class="symbol-input100">
							<i class="fa fa-venus-mars"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input id="tanggal" class="input100 @error('tanggal') is-invalid @enderror" type="date" name="tanggal" value="{{ old('tanggal') }}" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" autocomplete="tanggal" placeholder="Tanggal Lahir">
						<span class="focus-input100">asd</span>
						<span class="symbol-input100">
							<i class="fa fa-calendar"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input id="kota" class="input100 @error('kota') is-invalid @enderror" type="text" name="kota" value="{{ old('kota') }}" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" autocomplete="kota" placeholder="Kota">
						<span class="focus-input100">asd</span>
						<span class="symbol-input100">
							<i class="fa fa-building"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input id="no_hp" class="input100 @error('no_hp') is-invalid @enderror" type="text" name="no_hp" value="{{ old('no_hp') }}" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" autocomplete="no_hp" placeholder="No. HP">
						<span class="focus-input100">asd</span>
						<span class="symbol-input100">
							<i class="fa fa-phone"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input id="nim" class="input100 @error('nim') is-invalid @enderror" type="text" name="nim" value="{{ old('nim') }}" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" autocomplete="nim" placeholder="NIM">
						<span class="focus-input100">asd</span>
						<span class="symbol-input100">
							<i class="fa fa-id-card"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input id="jurusan" class="input100 @error('jurusan') is-invalid @enderror" type="jurusan" name="jurusan" value="{{ old('jurusan') }}" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" autocomplete="jurusan" placeholder="Jurusan">
						<span class="focus-input100">asd</span>
						<span class="symbol-input100">
							<i class="fa fa-industry"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input id="password" class="input100 @error('password') is-invalid @enderror" name="password" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" autocomplete="new-password" type="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>
					@error('password')
							<p class=" text-center text-white">{{ $message }}</p>
					@enderror
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="password_confirmation" placeholder="Konfirmasi Password" id="password-confirm" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" autocomplete="new-password">
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
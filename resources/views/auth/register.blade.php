@extends('layouts.auth')

@section('judul', 'login')

@section('content')
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-b-160 p-t-50">
				<form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
					@csrf

					<div class="login100-form-avatar">
						<a href="index.html"><img src="assets/favicon-light.png" alt="AVATAR"></a>
					</div>
					<span class="login100-form-title p-t-20 p-b-45">
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input id="name" class="input100 @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Nama">
						<span class="focus-input100">asd</span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
						@error('name')
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
@extends('layouts.auth')

@section('judul', 'login')

@section('content')
    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-b-160 p-t-50">
				<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                    @csrf
					<div class="login100-form-avatar">
						<a href="{{url('/')}}"><img src="assets/favicon-light.png" alt="AVATAR"></a>
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100 @error('username') is-invalid @enderror" id="username" type="text" name="username" value="{{ old('username') }}" required autocomplete="username" placeholder="Username" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>S
                            </span>
                        @enderror
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100 @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" required autocomplete="current-password" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<!-- <div class="text-center checkbox w-full p-t-10 text-white">
						<label style="font-size: 1em">
						<input type="checkbox" value="" name="remember"  {{ old('remember') ? 'checked' : '' }}>
						<span class="cr"><i class="cr-icon fa fa-check"></i></span>
						{{ __('Remember Me') }}
						</label>
					</div> -->

					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn" type="submit">
                            {{ __('Login') }}
						</button>
					</div>
					<div class="text-center w-full p-t-23">
						<a href="{{url('/register')}}" class="txt1 float-left" >
							{{ __('Buat akun') }}
						</a>
						<a href="#" class="txt1 float-right">
                        {{ __('Lupa Password?') }}
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection

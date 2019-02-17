@extends('main')
@section('content')

	<!-- sign in form -->
	 <section>
		<div id="agileits-sign-in-page" class="sign-in-wrapper">
			<div class="agileinfo_signin">
			<h3>Sign In</h3>
				<a href="/login/facebook" ><button class="btn btn-success"><span id="connect">Sign in with <i class="fa fa-facebook"></i>acebook </span></button></a><br/><br/>

				<form  method="POST" action="{{ route('login') }}">

					<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

					@if ($errors->has('email'))
						<span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
					@endif
					<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

					@if ($errors->has('password'))
						<span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
					@endif
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
							@if (Route::has('password.request'))
								<a class="btn btn-link" href="{{ route('password.request') }}">
									{{ __('Forgot Your Password?') }}
								</a>
							@endif
							<label class="form-check-label" for="remember">
								{{ __('Remember Me') }}
							</label>
						</div>
					<input type="submit" value="Sign In">
						<div class="clearfix"> </div>
				</form>
				<br/
				<h6> Not a Member Yet? <a href="/register">Sign Up Now</a> </h6>
			</div>
		</div>
	</section>
	<!-- //sign in form -->
@endsection

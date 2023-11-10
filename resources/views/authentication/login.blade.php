@extends('authentication.default')
@section("template")
	
<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6 text-center mb-5">
				<h2 class="heading-section">Login #10</h2>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-6 col-lg-4">
				<div class="login-wrap p-0">
			<h3 class="mb-4 text-center"><b>Have an account?</b></h3>
			@if(Session::has('success'))
				<div class = "alert alert-success">{{session::get('success')}}</div>
			@endif
			@if(Session::has('fail'))
				<div class = "alert alert-danger">{{session::get('fail')}}</div>
			@endif
			<form action="{{route('login-user')}}" class="login-form"  method='post' >
				@csrf
				<div class="form-group">
					<input type="email" class="form-control" placeholder="Email"  name = "email" required>
					<span class ='text-danger'>@error('email') {{$message}} @enderror</span>
				</div>
			<div class="form-group">
				<input id="password-field" type="password" class="form-control" placeholder="Password" name="pass" required>
				<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
			</div>
			<div class="form-group">
				<button type="submit" class="form-control btn btn-primary submit px-3">Log In</button>
			</div>
			<div class="form-group d-md-flex">
				<div class="w-50">
					<label class="checkbox-wrap checkbox-primary">Remember Me
						<input type="checkbox" checked>
						<span class="checkmark"></span>
					</label>
				</div>
				<div class="w-50 text-md-right">
					<a href="{{ route('forget-password') }}" style="color: #fff"><b> Forgot Password</b></a>
				</div>
			</div>
			</form>
			<p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
			<div class="form-group">
				<button type="submit" class="form-control btn btn-primary submit px-3" onclick="location.href='/register'">Sign Up</button>
			</div>
			<div class="social d-flex text-center">
			<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
			<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
			</div>
			</div>
			</div>
		</div>
	</div>
</section>
@endsection



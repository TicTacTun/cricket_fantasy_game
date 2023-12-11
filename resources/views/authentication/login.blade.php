@extends('authentication.default')
@section("template")
	
<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6 text-center mb-5">
				<h2 class="heading-section">CRICKET FANTASY GAME</h2>
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
							<div class="w-100 text-center">
								<a href="{{ route('forget-password') }}" style="color: #fff"><b> Forgot Password</b></a>
							</div>
						</div>
					</form>
					<p class="w-100 text-center">&mdash; Don't have any account? &mdash;</p>
					<div class="form-group">
						<button type="submit" class="form-control btn btn-primary submit px-3" onclick="location.href='/register'">Sign Up</button>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>
@endsection



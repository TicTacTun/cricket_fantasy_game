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
                    <h3 class="mb-4 text-center"><b>Forgot Password?</b></h3>
                    @if(Session::has('success'))
                        <div class = "alert alert-success">{{session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                        <div class = "alert alert-danger">{{session::get('fail')}}</div>
                    @endif
                    <form action="{{ route('post-reset') }}" class="login-form"  method='post' >
                        @csrf
                        
                        <div class="form-group">
                            <input id="password-field" type="password" class="form-control" placeholder="New Password" name=pass
                            autocomplete="new-password" required>
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            <span class ='text-danger'>@error('pass') {{$message}} @enderror</span>
                        </div>
                        <div class="form-group">
                            <input id="password-field" type="password" class="form-control" placeholder="Confirm New Password" name=cpass
                                required>
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            <span class ='text-danger'>@error('pass') {{$message}} @enderror</span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary submit px-3">Reset</button>
                        </div>
                    
                    </form>
                    <span>Don't have an account? <a href="{{ url('register')}}"><b>sign up</b></a></span>
        
                
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
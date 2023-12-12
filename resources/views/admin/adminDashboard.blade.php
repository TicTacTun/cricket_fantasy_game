<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
	<!-- BOOTSTRAP STYLES-->
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.css') }}">
     <!-- FONTAWESOME STYLES-->
    <link rel="stylesheet" href="{{ asset('admin/css/font-awesome.css') }}">
     <!-- MORRIS CHART STYLES-->
    <link rel="stylesheet" href="{{ asset('admin/js/morris/morris-0.4.3.min.css') }}">
     <!-- CUSTOM STYLES-->
    <link rel="stylesheet" href="{{ asset('admin/css/custom.css') }}">
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="{{ asset('admin/img/cricket.png') }}" class="user-image img-responsive"/>
					</li>
				
					<li>
                        <a  class="active-menu"  href="{{ url('adminDashboard')}}"><i class="fa fa-qrcode fa-3x"></i> User</a>
                    </li>
                    <li>
                        <a href="{{ url('adminpoints')}}"><i class="fa fa-dashboard fa-3x"></i> Points Update</a>
                    </li>
                     <li>
                        <a  href="logout"><i class="fa fa-desktop fa-3x"></i> Logout</a>
                    </li>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Cricket Fantasy Game Admin Dashboard</h2>   
                         <!-- Main -->
                        <div class="container">
                            <div class="row">
                            <div class="col">
                                <main class="main-container">
                                <div class="main-title">
                                    <p class="font-weight-bold">Users</p>
                                </div>

                                <div class="main-cards">
                                    <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Action</th>
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($user as $users)
                                        @if ($users->user_type == 'user')
                                            <tr>
                                            <td>{{$users->name}}</td>
                                            <td>{{$users->email}}</td>
                                            <form action="{{ route('delete_user_admin',['id' => $users->id]) }}" method="POST">
                                                @csrf
                                                <td>
                                                <button type='submit'class="btn btn-danger">Delete</button>
                                                </td>
                                            </form>
                                            </tr>
                                        @endif
                                        @endforeach
                                    </tbody>
                                    </table> 
                                </div>

                            
                                </main>
                            </div>
                            <div class="col">
                                <div class="main-title">
                                <p class="font-weight-bold">Update User</p>
                                </div>
                                <form action="{{ route('update_user')}}" method="post">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group">
                                    <label for="inputAddress">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Name" name='name' style='width:570px;'>
                                    </div>
                                    <div class="form-group col-md-6">
                                    
                                    <select class="form-control" name='email' id='email'>
                                        <option>--Select email--</option>
                                        @foreach($user as $users)
                                            @if ($users->user_type == 'user')
                                            <option value='{{$users->id}}'>{{$users->email}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    </div>
                                </div>     
                                    
                                    
                                    
                                    
                                    
                                <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                                
                            
                            
                            </div>
                        <!-- End Main -->
                    </div>
                </div> 
   
</body>
</html>

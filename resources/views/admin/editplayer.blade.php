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
					
                    <li>
                        <a  class='active-menu' href="{{ url('adminpoints')}}"><i class="fa fa-dashboard fa-3x"></i> Points Update</a>
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
                        <form action='{{route("update_points")}}'  method="POST">
                            @csrf
                            <div class="form-row">
                                <input type="text" class="form-control"  id='id' name='id' value="{{$id}}" style="display: none;">
                                
                                <div class="col-md-6 mb-3">
                                    <label for="validationTooltip01">Name</label>

                                    <input type="text" class="form-control"  id='name' name='name' value="{{$name}}" >
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationTooltip01">Role</label>
                                    <input type="text" class="form-control" id='role' name='role' value="{{$country}}" >
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationTooltip01">Country</label>
                                    <input type="text" class="form-control"  id='country' name='country' value="{{$role}}">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationTooltip01">Runs</label>
                                    <input type="text" class="form-control" id="runs" name='runs'>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationTooltip02">Fours</label>
                                    <input type="text" class="form-control" id="fours" name="fours">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationTooltip02">Sixes</label>
                                    <input type="text" class="form-control" id="sixes" name="sixes">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationTooltip02">Catches</label>
                                    <input type="text" class="form-control"  id="catches" name="catches">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationTooltip02">Wickets</label>
                                    <input type="text" class="form-control"  id="wickets" name="wickets"  >
                                </div>
                                
                            </div>
                            
                            <button class="btn btn-primary" type="submit" style="margin-top: 90px;margin-right:500px;">Submit </button>
                            
                        </form>

                                
                            
                            
                        <!-- End Main -->
                    </div>
                </div> 
   
</body>
</html>

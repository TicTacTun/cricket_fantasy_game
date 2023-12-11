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
                        <a class="active-menu"  href=""><i class="fa fa-dashboard fa-3x"></i> Points Update</a>
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
                        <h5>Welcome Admin, Love to see you back. </h5>
                    </div>
                </div> 
   
</body>
</html>

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
                    <img src="{{ asset('admin/img/cricket.png') }}" class="user-image img-responsive" />
                </li>

                <li>
                    <a href="{{ url('adminDashboard')}}"><i class="fa fa-qrcode fa-3x"></i> User</a>
                </li>
                <li>
                    <a class="active-menu" href="{{ url('adminpoints')}}"><i class="fa fa-dashboard fa-3x"></i> Points
                        Update</a>
                </li>
                <li>
                    <a href="logout"><i class="fa fa-desktop fa-3x"></i> Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Cricket Fantasy Game Admin Dashboard</h2>
                    @if(Session::has('deleted'))
                        <div class = "alert alert-danger">{{session::get('deleted')}}</div>
                    @endif
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Country</th>
                                <th scope="col">Role</th>
                                <th scope="col">Runs </th>
                                <th scope="col">Fours</th>
                                <th scope="col">Sixes</th>
                                <th scope="col">Wickets</th>
                                <th scope="col">Catches</th>
                                <th scope="col">Total points</th>
                                
                                <th scope="col">Action</th>
                                <th scope="col"></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($player as $p)
                            <tr>
                                <td>{{$p->name}}</td>
                                <td>{{$p->country}}</td>
                                <td>{{$p->role}}</td>
                                <td>{{$p->runs}}</td>
                                <td>{{$p->fours}}</td>
                                <td>{{$p->sixes}}</td>
                                <td>{{$p->wickets}}</td>
                                <td>{{$p->catches}}</td>
                                <td>{{$p->total_points}}</td>
                                
                                <td>
                                    <button type="submit"  onclick="location.href='{{ route('admineditpoints', ['id' => $p->id,'name'=>$p->name,'country'=>$p->country,'role'=>$p->role])  }}'">
                                        Edit
                                    </button>  
                                </td>

                                <td>
                                    <form action="{{ route('delete_player_admin',['id' => $p->id]) }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">
                                            Delete
                                        </button>

                                    </form>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- End Main -->
                </div>
            </div>
        </div>
    </div>

    </body>
    </html>

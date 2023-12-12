<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Cricket Fantasy Game</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboardcss/css/bootstrap.css')}}" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('dashboardcss/css/style.css')}}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('dashboardcss/css/responsive.css')}}" rel="stylesheet" />
    <link href="{{ asset('allcss/cric.scss')}}" rel="stylesheet" />
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.html">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                            <ul class="navbar-nav  ">
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ url('dashboard')}}">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ url('cricinfo')}}"> Match Status  </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('teamcreation')}}"> Team Creation </a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ url('fixture')}}"> Fixture </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="points"> Squad </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="howtoplay"> How to Play </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <section class="slider_section position-relative">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div>
                            <div class="col-lg-10 col-md-11 mx-auto">
                                <div class="detail-box">
                                    <div class="container">
                                        <div class="row" style="overflow:auto;height: 1000px;">

                                            <table class="table" style='background-color:white;'>
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Name of the Match</th>
                                                        
                                                        <th scope="col">Year</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($fixure as $fix)
                                                        @if($fix->league_year!=2022)
                                                        <tr>
                                                            <td>{{ $fix->league_name}}</td>
                                                            
                                                            <td>{{$fix->league_year}} </td>
                                                        </tr>
                                                        @endif
                                                    @endforeach
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end slider section -->
    </div>


    <section class="us_section layout_padding">
        <div class="container">


            <div class="us_container ">
                <div class="row">

                </div>
            </div>
        </div>
    </section>
    <!-- end us section -->

    <!-- footer section -->
    <footer class="container-fluid footer_section">
        <p>
            &copy; 2023 All Rights Reserved. Designed by Tutan, Shakib, Apurbo & Zubair
        </p>
    </footer>
    <!-- footer section -->

    <script src="{{ asset('dashboardcss/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{ asset('dashboardcss/js/bootstrap.js')}}"></script>

</body>

</html>

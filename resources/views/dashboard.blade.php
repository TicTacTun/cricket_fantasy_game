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
  <link rel="stylesheet" type="text/css" href="dashboardcss/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="dashboardcss/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="dashboardcss/css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
              <li class="nav-item active">
                  <a class="nav-link" href="{{ url('dashboard')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{ url('cricinfo')}}"> Match Status  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('teamcreation')}}"> Team Creation </a>
                </li>
                <li class="nav-item">
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
    <section class=" slider_section position-relative">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="col-lg-10 col-md-11 mx-auto">
                <div class="detail-box">
                  <div>
                    <h1>
                      Cricket Fantasy Game
                    </h1>
                    <p>
                      WELCOME
                    </p>
                    <div class="">
                      <a href="logout">
                        LOGOUT
                      </a>
                    </div>
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


  <!-- Us section -->

  <section class="us_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          How to Play?
        </h2>
      </div>

      <div class="us_container ">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="box">
              <div class="img-box">
                <img src="images/u-1.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Create Your Team
                </h5>
                <p>
                    Go to <a href=“teamcreation”>Create Team</a> to make your own dream team
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="box">
              <div class="img-box">
                <img src="images/u-4.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Earn Points
                </h5>
                <p>
                  Don't forget to take the best players in your team. Select them and earn points as you go !
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="box">
              <div class="img-box">
                <img src="images/u-2.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Track Your Points
                </h5>
                <p>
                  Compete with other players around the world
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="box">
              <div class="img-box">
                <img src="images/u-3.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Still Struggling?
                </h5>
                <p>
                  Go to <a href=""> How to Play </a> for more informations
                </p>
              </div>
            </div>
          </div>
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

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>

</body>

</html>
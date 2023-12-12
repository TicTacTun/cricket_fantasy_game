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
  <link href="{{ asset('allcss/cricinfo/blueTheme.css')}}"rel="stylesheet" />
  <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
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
                <li class="nav-item ">
                  <a class="nav-link" href="{{ url('dashboard')}}">Home </a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="{{ url('cricinfo')}}"> Match Status <span class="sr-only">(current)</span> </a>
                </li>
                <li class="nav-item ">
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
              <!--Widget Outer-->
              <div class="rca-row">
                <div class="rca-column-12">
                  <!--Widget Inner -->
                  <div class="rca-menu-scroll rca-left-border">
                  
                    <ul class="rca-season-list">
                    @foreach($result_all as $result)
                      <li> 
                      <a href=" {{ route('playerdetail',['key'=>$result->event_key])}} ">
                        
                        ({{ $result->event_home_team }} VS {{ $result->event_away_team }} Time: {{ $result->event_time }})
                      </a>
                          
                      </li>
                    @endforeach
                    </ul>
                    
                  </div>
                </div>
              </div>
              <!--Widget Outer-->
              <div class="rca-row">
                <!--Widget Inner -->
                
                  <div class="rca-column-4">
                      <!-- Live Season -->
                      @foreach($result_all as $result)
                          
                        <div class="rca-menu-widget rca-live-season rca-left-border">
                            <a class="rca-padding" style="color: grey;">
                                {{ $result->event_status_info }}<br>
                                <p style="color: black;">{{ $result->league_name }}</p>
                                <span class="rca-match-title rca-live-text">
                                    @if ($result->event_home_team_logo !== 'null' || $result->event_away_team_logo !== 'null')
                                        <img width='20' height ='20' src="{{ $result->event_home_team_logo }}" alt="">
                                        &nbsp;{{ strtoupper(substr($result->event_home_team, 0, 3)) }} :
                                        &nbsp;<span class="rca-match-score">{{ $result->event_home_final_result }}</span>
                                        <br>
                                        <img width='20' height ='20' src="{{ $result->event_away_team_logo }}" alt="">
                                        &nbsp;{{ strtoupper(substr($result->event_away_team, 0, 3)) }} :
                                        &nbsp;<span class="rca-match-score">{{ $result->event_away_final_result }}</span>
                                    @else
                                        {{ strtoupper(substr($result->event_home_team, 0, 3)) }} :
                                        &nbsp;<span class="rca-match-score">{{ $result->event_home_final_result }}</span>
                                        <br>
                                        {{ strtoupper(substr($result->event_away_team, 0, 3)) }} :
                                        &nbsp;<span class="rca-match-score">{{ $result->event_away_final_result }}</span>
                                    @endif
                                </span>
                                <span class="rca-live-label rca-right">Live</span>
                            </a>
                        </div>
                      
                      @endforeach
                  </div>
              </div>

                
              <div class="rca-column-4">
                <!--Match Series-->
                <div class="rca-mini-widget rca-top-border rca-tab-simple">
                  <ul class="rca-tab-list">
                    <li class="rca-tab-link active" data-tab="ltab-1" onclick="showTab(this);">Live</li>
                    
                  </ul>
                    
                    
                  <div id="ltab-1" class="rca-padding rca-tab-content rca-multi-season active">
                    <ul class="rca-tab-list">
                        @foreach($result_all as $result)
                            <li class="rca-tab-link active" data-tab="iltab-{{ $loop->index + 1 }}" onclick="showTab(this);">
                                <span class="rca-live-label">{{ strtoupper(substr($result->event_home_team, 0, 3)) }} vs {{ strtoupper(substr($result->event_away_team, 0, 3)) }} </span>
                            </li>
                        @endforeach
                    </ul>
                    @foreach($result_all as $result)
                        <div id="iltab-{{ $loop->index + 1 }}" class="rca-tab-content active">
                            <div class="rca-padding">
                                @foreach ($result->scorecard as $key => $value)
                                    <h3 class="rca-match-title">
                                        <a href="#">
                                            @php 
                                                $inningsWithout1INN = str_replace(' 1 INN', '', $key);
                                            @endphp
                                            @if ($result->event_home_team === $inningsWithout1INN)
                                                {{$inningsWithout1INN}} : {{$result->event_home_final_result}}
                                            @else
                                                {{$inningsWithout1INN}} : {{$result->event_away_final_result}}
                                            @endif
                                        </a>
                                    </h3>
                                    <p class="rca-match-info">
                                        @if(count((array)$result->scorecard) == 2 && $loop->index == 1)
                                            @if ($result->event_home_team === $inningsWithout1INN)
                                                <span>CRR : {{$result->event_home_rr}}</span>
                                                <span>Req RR :{{$result->event_away_rr}} </span>
                                            @else
                                                <span>CRR :  {{$result->event_away_rr}} </span>
                                                <span>Req RR :{{$result->event_home_rr}}</span>
                                            @endif
                                        @elseif(count((array)$result->scorecard) == 2 && $loop->index == 0)
                                        @else
                                            @if ($result->event_home_team === $inningsWithout1INN)
                                                <span>CRR : {{$result->event_home_rr}}</span>
                                                <span>Req RR :{{$result->event_away_rr}} </span>
                                            @else
                                                <span>CRR : {{$result->event_away_rr}} </span>
                                                <span>Req RR :{{$result->event_home_rr}}</span>
                                            @endif 
                                        @endif
                                    </p>
                                    @foreach($value as $val)
                                        @if($val->status == 'not out')
                                            <div class="rca-top-padding">
                                                <div class="rca-batsman striker">
                                                    <span class="player"><b>{{$val->player}}</b></span>
                                                    <span><b></b>{{$val->R}}({{$val->B}})</b></span>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div class="rca-ball-detail">
                                        <div class="rca-match-schedule">
                                            <p>----------------------------------------------------</p>
                                        </div>
                                        <ul class="rca-ball-by">
                                        </ul>
                                    </div>
                                @endforeach
                                @foreach ($result->comments as $key => $value)
                                    <div class="rca-ball-detail">
                                        <div class="rca-match-schedule">
                                        @foreach($value as $val)
                                          @if($loop->last)
                                            @if($val->post!=null)
                                            <p>Comments: Bowling {{ $val->post}}</p>
                                            @endif
                                          @endif
                                        @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            
                        </div>
                    @endforeach
                </div>


                      
                    
                  
                  <!----- Result ------------------->
                  
                </div> 
              </div>
            </div>

            

            <div class="rca-row">
              <div class="rca-column-12">
                  
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

      <div class="us_container ">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="box">
              <div class="img-box">
                
              </div>
              <div class="detail-box">
                <h5>
                  
                </h5>
                <p>
                   
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="box">
              <div class="img-box">
              
              </div>
              <div class="detail-box">
                <h5>
                  
                </h5>
                <p>
                 
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
                  
                </h5>
                <p>
                  
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
                  
                </h5>
                <p>
                  
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
  <script>
    document.addEventListener('DOMContentLoaded', function () {
        // Automatically click the first tab when the page is refreshed
        var firstTab = document.querySelector('.rca-tab-link[data-tab="iltab-1"]');
        if (firstTab) {
            firstTab.click();
        }
    });

    function showTab(event) {
        var sourceParent = event.parentElement.parentElement;
        var sourceChilds = sourceParent.getElementsByClassName("rca-tab-content");
        var sourceLinkParent = sourceParent.getElementsByClassName("rca-tab-link");

        // Remove "active" class from tab contents
        for (var i = 0; i < sourceChilds.length; i++) {
            sourceChilds[i].classList.remove("active");
        }

        // Remove "active" class from tab links
        for (var i = 0; i < sourceLinkParent.length; i++) {
            sourceLinkParent[i].classList.remove("active");
        }

        var dataTab = event.getAttribute("data-tab");

        // Add "active" class to the clicked tab link
        event.classList.add("active");

        // Add "active" class to the corresponding tab content
        var targetTabContent = document.getElementById(dataTab);
        if (targetTabContent) {
            targetTabContent.classList.add("active");
        }

        // Store the active tab in localStorage
        localStorage.setItem('activeTab', dataTab);
    }
</script>
</body>

</html>
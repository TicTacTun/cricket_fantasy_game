<html>
<head>

<link rel="stylesheet" href="{{asset('allcss/players.css')}}" >
    <title>team creation</title>
</head>

<body>

<div class = "wrapper pre">

</div>
<div class="wrapper">
  <div class="title">
    Players List
    <div class="line"></div>
  </div>
  <div class="container">
    <div class="card tabs">
      <input id="tab-1" type="radio" class="tab tab-selector" checked="checked" name="tab" />
      <label for="tab-1" class="tab tab-primary">WK</label>
      <input id="tab-2" type="radio" class="tab tab-selector" name="tab" />
      <label for="tab-2" class="tab tab-success">BAT</label>
      <input id="tab-3" type="radio" class="tab tab-selector" name="tab" />
      <label for="tab-3" class="tab tab-default">AR</label>
      <input id="tab-4" type="radio" class="tab tab-selector" name="tab" />
      <label for="tab-4" class="tab tab-warning">BOWL</label>
      <div class="tabsShadow"></div>
      <div class="glider"></div>
      <section class="content">
        <div class="item" id="content-1" style="overflow: scroll;height: 250px;">
          <table>

            @foreach($players as $player)
            @if($player -> role == "Wicket Keeper")
            <tr>
              <td>{{$player -> name}}</td>
            </tr>
            @endif
            @endforeach 
          </table>
        </div>
        <div class="item" id="content-2" style="overflow: scroll;height: 250px;"> 
          <table>
            @foreach($players as $player)
            @if($player -> role == "Batsman")
            <tr>
              <td>{{$player -> name}}</td>
            </tr>
            @endif
            @endforeach 
          </table>      
        </div>
        <div class="item" id="content-3" style="overflow: scroll;height: 250px;"> 
          <table>

            @foreach($players as $player)
            @if($player -> role == "All Rounder")
            <tr>
              <td>{{$player -> name}}</td>
            </tr>
            @endif
            @endforeach 
          </table>  
        </div>
        <div class="item" id="content-4"style="overflow: scroll;height: 250px;">
          <table>

            @foreach($players as $player)
            @if($player -> role == "Bowler")
            <tr>
              <td>{{$player -> name}}</td>
            </tr>
            @endif
            @endforeach 
          </table>  
        </div>
      </section>

    </div>
      <a target="/player_table" href="{{url('player_table')}}">
      <button 
        style="
        background-color: black;
        color: white;
        border-radius: 8px;
        height: 50px;
        width: 200px;
        font-size: 18px;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sam-serif;
        
        "
      >
        Create Your Team
      </button>
      </a>
    </div>
  </div>
</div>
  
</body>



</html>

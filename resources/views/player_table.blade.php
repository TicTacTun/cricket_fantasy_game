<html>
<head>

<link rel="stylesheet" href="{{asset('allcss/player_table.css')}}" >
    <title>Create_Teams</title>
</head>
<body>
 <div id="wrapper">
  <h1>Create Your Team</h1>
  
  <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>Player Name</span></th>
        <th><span>Country</span></th>
        <th><span>Role</span></th>
        <th><span>ADD</span></th>
        <th><span>REMOVE</span></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="lalign">
        <table>

            @foreach($players as $player)
            @if($player -> role == "Wicket Keeper")
            <tr>
            <td>{{$player -> name}}</td>
            </tr>
            @endif
            @endforeach 
        </table>
        </td>
        <td>
        <table>

            @foreach($players as $player)
            @if($player -> role == "Wicket Keeper")
            <tr>
            <td>{{$player -> country}}</td>
            </tr>
            @endif
            @endforeach 
        </table>
        </td>
        <td>
        <table>

            @foreach($players as $player)
            @if($player -> role == "Wicket Keeper")
            <tr>
            <td>{{$player -> role}}</td>
            </tr>
            @endif
            @endforeach 
        </table>
        </td>
        <td>
        <table>

            @foreach($players as $player)
            @if($player -> role == "Wicket Keeper")
            <tr>
            <td>
              <button class="button" style="background-color: green; color: white; padding: 0.005px 1px; font-size: 10px;">ADD</button>
            </td>

            </tr>
            @endif
            @endforeach 
        </table>
        </td>
        <td>
        <table>

            @foreach($players as $player)
            @if($player -> role == "Wicket Keeper")
            <tr>
            <td>
              <button class="button" style="background-color: green; color: white; padding: 0.005px 1px; font-size: 10px;">REMOVE</button>
            </td>

            </tr>
            @endif
            @endforeach 
        </table>
        </td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td class="lalign">
        <table>
            @foreach($players as $player)
            @if($player -> role == "Batsman")
            <tr>
              <td>{{$player -> name}}</td>
            </tr>
            @endif
            @endforeach 
        </table>  
        </td>
        <td>
        <table>

            @foreach($players as $player)
            @if($player -> role == "Batsman")
            <tr>
            <td>{{$player -> country}}</td>
            </tr>
            @endif
            @endforeach 
        </table>
        </td>
        <td>
        <table>

            @foreach($players as $player)
            @if($player -> role == "Batsman")
            <tr>
            <td>{{$player -> role}}</td>
            </tr>
            @endif
            @endforeach 
        </table>
        </td>
        <td>
        <table>

            @foreach($players as $player)
            @if($player -> role == "Batsman")
            <tr>
            <td>
              <button class="button" style="background-color: green; color: white; padding: 0.005px 1px; font-size: 10px;">ADD</button>
            </td>

            </tr>
            @endif
            @endforeach 
        </table>
        </td>
        <td>
        <table>

            @foreach($players as $player)
            @if($player -> role == "Batsman")
            <tr>
            <td>
              <button class="button" style="background-color: green; color: white; padding: 0.005px 1px; font-size: 10px;">REMOVE</button>
            </td>

            </tr>
            @endif
            @endforeach 
        </table>
        </td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td class="lalign">
        <table>
            @foreach($players as $player)
            @if($player -> role == "All Rounder")
            <tr>
              <td>{{$player -> name}}</td>
            </tr>
            @endif
            @endforeach 
        </table> 
        </td>
        <td>
        <table>

            @foreach($players as $player)
            @if($player -> role == "All Rounder")
            <tr>
            <td>{{$player -> country}}</td>
            </tr>
            @endif
            @endforeach 
        </table>
        </td>
        <td>
        <table>

            @foreach($players as $player)
            @if($player -> role == "All Rounder")
            <tr>
            <td>{{$player -> role}}</td>
            </tr>
            @endif
            @endforeach 
        </table>
        </td>
        <td>
        <table>

            @foreach($players as $player)
            @if($player -> role == "All Rounder")
            <tr>
            <td>
              <button class="button" style="background-color: green; color: white; padding: 0.005px 1px; font-size: 10px;">ADD</button>
            </td>

            </tr>
            @endif
            @endforeach 
        </table>
        </td>
        <td>
        <table>

            @foreach($players as $player)
            @if($player -> role == "All Rounder")
            <tr>
            <td>
              <button class="button" style="background-color: green; color: white; padding: 0.005px 1px; font-size: 10px;">REMOVE</button>
            </td>

            </tr>
            @endif
            @endforeach 
        </table>
        </td>
        
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td class="lalign">
        <table>
            @foreach($players as $player)
            @if($player -> role == "Bowler")
            <tr>
              <td>{{$player -> name}}</td>
            </tr>
            @endif
            @endforeach 
        </table> 
        </td>
        <td>
        <table>

            @foreach($players as $player)
            @if($player -> role == "Bowler")
            <tr>
            <td>{{$player -> country}}</td>
            </tr>
            @endif
            @endforeach 
        </table>
        </td>
        <td>
        <table>

            @foreach($players as $player)
            @if($player -> role == "Bowler")
            <tr>
            <td>{{$player -> role}}</td>
            </tr>
            @endif
            @endforeach 
        </table>
        </td>
        <td>
        <table>

            @foreach($players as $player)
            @if($player -> role == "Bowler")
            <tr>
            <td>
              <button class="button" style="background-color: green; color: white; padding: 0.005px 1px; font-size: 10px;">ADD</button>
            </td>

            </tr>
            @endif
            @endforeach 
        </table>
        </td>
        <td>
        <table>

            @foreach($players as $player)
            @if($player -> role == "Bowler")
            <tr>
            <td>
              <button class="button" style="background-color: green; color: white; padding: 0.005px 1px; font-size: 10px;">REMOVE</button>
            </td>

            </tr>
            @endif
            @endforeach 
        </table>
        </td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>
 </div> 
</body>

<html>

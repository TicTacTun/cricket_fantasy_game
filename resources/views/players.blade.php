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
        <div class="item" id="content-1">
          <h2 class="tab-title tab-primary">All Keepers in this Tournament</h2>
          <p>
            <span class = "numit">1)</span>Litton Kumar Crush
          </p>
        </div>
        <div class="item" id="content-2">
          <h2 class="tab-title tab-success">All Batsmen in this Tournament</h2>
          <p>
            <span class = "numit">2)</span>Shanto Bhaia</p>
        </div>
        <div class="item" id="content-3">
          <h2 class="tab-title tab-default">All All-Rounders in this Tournament</h2>
          <p>
            <span class = "numit">3)</span>Hageyb Al Hasan</p>
        </div>
        <div class="item" id="content-4">
          <h2 class="tab-title tab-warning">All Bowlers in this Tournament</h2>
          <p>
            <span class = "numit">4)</span>Shofirul</p>
        </div>
      </section>

    </div>
  </div>
</div>
</body>


</html>
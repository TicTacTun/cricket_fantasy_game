<!DOCTYPE html>
<html>

<head>
    <link href="howtoplaycss/style.css" rel="stylesheet" />
</head>

<body>
<h1>
    <b> How to Play ? </b> <br>

</h1>

<div class="tabs">
    <div class="tab-2">
        <label for="tab2-1">INTRODUCTION</label>
        <input id="tab2-1" name="tabs-two" type="radio" checked="checked">
        <div style="margin-left: 100px;">
            <p> Follow these 4 easy steps to get started:<br><br>

                <b>Select A Match::</b><br>
                Select any of the upcoming matches from any of the current or upcoming cricket series.<br><br>

                <b>Create Your Team::</b><br>
                Use your cricket knowledge and showcase your skills to create your team within a limit.<br><br>

                <b>Follow Leaderboard::</b><br>
                Follow the leaderboard to compete with your alliences<br><br>

                <b>Follow the Match::</b><br>
                Watch the real match and track your fantasy points<br><br>
            </p>
        </div>
    </div>
    <div class="tab-2">
        <label for="tab2-2">CREATE YOUR TEAM</label>
        <input id="tab2-2" name="tabs-two" type="radio">
        <div style="margin-left: -410px;">
            <p>
            <b> Step 1: Go to Create Team tab from the Dashboard </b><br>
                    Go to the desired page and select the match you want to play <br><br>

                <b> Step 2: Create your Team </b></br>
                    Create your team by picking 11 players within a budget. <br>
                    Select players for your team from all 4 of the categories mentioned below: <br>
                    WK - Wicket-keepers<br>
                    BAT - Batters<br>
                    BWL - Bowlers<br>
                    AR - All-Rounders<br>
                    Sort players as per their teams, credits or points.<br><br>

                <b> Step 3: Keep eye on gaining points </b><br>
                    Remember to choose the best players for your dream 11 team. Make sure to sort them with their desired role.<br>
                    Don't forget to update team before every matches.<br><br>

                <b> Step 4: Creating multiple teams </b><br>
                    You can create multiple matches and earn multiple points. Check leaderboard for your position in the contest.<br>
            </p>
        </div>
    </div>
    <div class="tab-2">
        <label for="tab2-3">MANAGE TEAMS</label>
        <input id="tab2-3" name="tabs-two" type="radio" checked="checked">
        <div style="margin-left: -830px;">
            <p>
            Update your team according to the matches <br>
            Your team will be showed in a table with all the roles you selected
            </p>
        </div>
    </div>
    <div class="tab-2">
        <label for="tab2-4">POINT SYSTEM</label>
        <input id="tab2-4" name="tabs-two" type="radio" checked="checked">
        <div style="margin-left: -1250px;">
            <p>
                <b> The points are applied in some crdentials as following: </b> <br>
                <ul>
                    <li> Per Run: +1 </li>
                    <li> Per Fours: +4 </li>
                    <li> Per Sixes: +6 </li>
                    <li> Per Wickets: +10 </li>
                    <li> Per Catches: +2 </li>
                    <li> Per Maiden: +2 </li>
                    <li> Century: +10 </li>
                    <li> Half Century: +5 </li>
                    <li> Duck: -3</li>
                </ul>
            </p>
        </div>
    </div>
</div>


<footer>
<head>
<style>
    footer {
    text-align: center;
    padding-top: 3% 
  }
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: rgba(255,255,255,0.2);
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 18px;
  padding: 11px;
  width: 160px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\276E';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
</head>
<body>

    <a class="button" href="dashboard"><span>Dashboard</span></a>

</body>

</footer>
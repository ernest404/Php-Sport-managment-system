<?php
$totalRounds = ;
$teams = array('Team 1', 'Team 2', 'Team 3', 'Team 4', 'Team 5');
echo 'Total Teams: ' , $totalTeams = count($teams) , '<br/>';
$turns = $totalTeams;

for($round=1; $round<$totalRounds+1; $round++){
    echo 'Round: ' , $round , '<br/>';

    for($homeTeam = 0; $homeTeam < $totalTeams - 1; $homeTeam++) {
        for($awayTeam=$homeTeam + 1; $awayTeam < $totalTeams; $awayTeam++) {
            echo $teams[$homeTeam] , ' v/s ' , $teams[$awayTeam] , '<br/>';
        }
    }
    echo '<br/>';
}
?>
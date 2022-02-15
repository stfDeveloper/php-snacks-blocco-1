<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->
<?php
$squadre = [
    ['nameHome' =>"Olimpia",'pointsHome'=> 53 ,'nameGuest' =>"Virtus" ,'pointsGuest'=> 34],
    ['nameHome' =>"Lakers" ,'pointsHome'=> 56 , 'nameGuest' =>"Brindisi",'pointsGuest'=> 23],
    ['nameHome' =>"Allianz",'pointsHome'=> 43 , 'nameGuest' =>"Fortitudo",'pointsGuest'=> 65]
] 
?>
<h1> <?php
for ($i=0; $i <count($squadre); $i++) { 
    echo $squadre[$i]['nameHome']." - ".$squadre[$i]['nameGuest']." | " .$squadre[$i]['pointsHome']."-".$squadre[$i]['pointsGuest']."<br>";
}

?></h1>

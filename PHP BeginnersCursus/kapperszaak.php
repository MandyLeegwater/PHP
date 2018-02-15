<?php

$kappersagenda["9:15"] = "Mevr. Pieterson";
$kappersagenda["9:30"] = "Mevr. Willems" ;
$kappersagenda["9:45"] = "";
$kappersagenda["10:00"] = "Paul van den Broek";
$kappersagenda["10:15"] = "Karel de Meeuw";
$kappersagenda["10:30"] = "";

echo "De volgende moementen zijn nog beschikbaar:<ul>";

foreach ($kappersagenda as $tijd => $afspraak){
    if($afspraak == ""){
        echo "<li>".$tijd."</li>";
    }
}
echo "</ul>";
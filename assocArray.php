<?php

// $topspeed = array("honda"=>180,"Skoda"=>220);
$topspeed = array("honda"=>"180 kmph","Skoda"=>"220 kmph");



// echo $topspeed["honda"];

foreach ( $topspeed as $company=>$speed){


    echo "<h1> $company has top speed of $speed </h1>";

}



?>
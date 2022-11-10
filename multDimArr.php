<?php

function pp ($str){

    echo "<span>  " . $str . " </span>    ";

}

function newLine(){
    echo "<br>";

}


    $cars = array(
        array("volvo",23,18),
        array("BMW",23,18),
        // array("volvo",23,18),
    );


    // echo $cars[0][0];

    for ($i = 0 ; $i < ($cars) ; $i++){

        // $inner = $cars[$i];

        echo "<h1>";
        for ($j = 0 ; $j< ($cars[$i]); $j ++ ){

            pp($cars[$i][$j]);
            
        }
        echo "</h1>";

        newLine();
        newLine();


    }






?>
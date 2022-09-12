<?php 

    function pp ($str){

        echo "<h1>  " . $str . " </h1>";

    }


    function oddOrEven($num){

        if($num %2 == 0 ){
            pp("$num is even");
        }
        else{
            pp("$num is odd");

        }

    }


    $numbers = [1,69,3,22,100];


    foreach( $numbers as $number){
        oddOrEven($number);

    }




?>
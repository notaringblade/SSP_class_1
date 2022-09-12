<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    $arr = [23,41,37,33,33,31];

    $i  = 0;

    while($i < count($arr) and $arr[$i] % 2 != 0  ){
        
        echo "$i";


        echo "<h1>". $arr[$i] ."</h1>";

        $i++;
    }


?>
</body>
</html>
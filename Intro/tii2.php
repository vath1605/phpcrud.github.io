<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

    // Arithmetic Operator

    $a = 10;
    $b = 20;
    $c = $a + $b;
    echo "a + b ={$c} <br>" ;
    $d = $c / $a;
    echo "c / a = {$d} <br>" ;
    $e = $c * $a;
    echo "c * a ={$e} <br>" ;
    $f = $c - $a;
    echo "c - a= {$f} <br>" ;
    $z = 2 ;
    $n = $z**5;
    echo "n = {$n} <br>" ;

    // Shortcut Operator

    $i = 1;
    $i++; 
    echo "i = $i <br>";
    $x = 5; 
    $x += 10;
    echo "x = {$x} <br>" ;
    $x *= 10 ;
    echo "x = {$x} <br>" ;
    $x /= 5; 
    echo "x = {$x} <br>" ;

    
?>
</body>
</html>
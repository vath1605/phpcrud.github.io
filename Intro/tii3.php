<?php 
    $code = 101 ;
    $name = "Coke";
    $price = 5;
    $qty = 10;
    $total = $price * $qty;
    if($total > 1 &&  $total <= 10){
        $dis = 10;
    }elseif($total > 10 && $total <=20){
        $dis = 20;
    }elseif($total > 20 && $total <=30){
        $dis = 30;
    }elseif($total > 30 && $total <=40){
        $dis = 40;
    }elseif($total > 40 && $total <=50){
        $dis = 50;
    }elseif($total > 50 && $total <60){
        $dis = 60;
    }else {
        $dis = 70;
    }
    $dis = $dis / 100 * $total;

    $payment = $total - $dis;
    echo "Name &emsp; Code &emsp; QTY &emsp; Price &emsp; Total &emsp; Payment <br>";
    echo "$name &emsp; $code &emsp; $qty &emsp; $price &emsp; $total &emsp; $payment <br>";
?>
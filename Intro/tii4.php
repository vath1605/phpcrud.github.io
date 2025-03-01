<?php 

    $sc1 = 90;
    $sc2 = 90;
    $sc3 = 99;
    $sc4 = 99;
    $sc5 = 95;
    $total = $sc1 + $sc2 + $sc3 + $sc4 + $sc5;
    $avg = $total / 5;
    if($avg >= 90 && $avg <=100){
        $grade = 'A';
    }elseif($avg >=80 && $avg <90){
        $grade = 'B';
    }elseif($avg >=70 && $avg < 80){
        $grade = 'C';
    }elseif($avg >=60 && $avg < 70){
        $grade = 'D';
    }elseif($avg >=50 && $avg < 60){
        $grade = 'E';
    }else{
        $grade = 'F';
    }

    echo "Student Score Total : ".$total."<br>";
    echo "Student Score average score: ". $avg. "<br>";
    echo "Student grade: ". $grade;


?>
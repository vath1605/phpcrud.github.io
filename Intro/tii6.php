<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        width: 100%;
        height: 100vh;
        background-color: gray;
    }
</style>
<body>
    <form method="post" action="tii6.php">
        <label>Input Student Name: </label><br>
        <input type="text" name="stuName"> <br><br>
        <label>Input Student ID: </label><br>
        <input type="number" name="id"><br><br>
        <label>Input Score 1: </label><br>
        <input type="number" name="sc1"><br><br>
        <label>Input Score 2: </label><br>
        <input type="number" name="sc2"><br><br>
        <label>Input Score 3: </label><br>
        <input type="number" name="sc3"><br><br>
        <label>Input Score 4: </label><br>
        <input type="number" name="sc4"><br><br>
        <label>Input Score 5: </label><br>
        <input type="number" name="sc5"><br><br>
        <label>Input Score 6: </label><br>
        <input type="number" name="sc6"><br><br>
        <label>Input Score 7: </label><br>
        <input type="number" name="sc7"><br><br>
        <button type="submit" name="btn">Save</button>
    </form>

    <table border="" cellpadding="10px">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Total</th>
            <th>Avg</th>
            <th>Grade</th>
        </tr>
       

    <?php 
    
    if(isset($_POST["btn"])){
        $name = $_POST["stuName"];
        $id = $_POST["id"];
        $sc1 = $_POST["sc1"];
        $sc2 = $_POST["sc2"];
        $sc3 = $_POST["sc3"];
        $sc4 = $_POST["sc4"];
        $sc5 = $_POST["sc5"];
        $sc6 = $_POST["sc6"];
        $sc7 = $_POST["sc7"];

    $total = $sc1 + $sc2 + $sc3 + $sc4 + $sc5 + $sc6 + $sc7;

    $avg = $total / 7;

    $avg = round($avg , 2);

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

    echo " <tr>
            <td>{$id}</td>
            <td>{$name}</td>
            <td>{$total}</td>
            <td>{$avg}</td>
            <td>{$grade}</td>
        </tr>
    </table>";
    
    }
    
    ?>
</body>
</html>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/tii9.css">
</head>
<body>
    <div class="bg">
        <div class="cal">

        <form action="tii9.php" method="get">
        <label for="num1">First Number:</label>
        <input type="number" name="num1" id="num1"><br><br>
        <label for="num2">Second Number:</label>
            <input type="number" name="num2" id="num2">
            <div class="btn">
            <button type="submit" name="+">+</button>
            <button type="submit" name="-">-</button>
            <button type="submit" name="*">X</button>
            <button type="submit" name="/">/</button>
            <button type="submit" name="%">%</button>
            </div>
            <div class="result">
            <?php 
            if(isset($_GET["+"]) || isset($_GET["-"]) || isset($_GET["*"]) || isset($_GET["/"]) || isset($_GET["%"])){
                $num1 = $_GET["num1"];
                $num2 = $_GET["num2"];
                if(isset($_GET["+"])){
                    $res = $num1 + $num2;
                }
                if(isset($_GET["-"])){
                    $res = $num1 - $num2;
                }
                if(isset($_GET["*"])){
                    $res = $num1 * $num2;
                }
                if(isset($_GET["/"])){
                    if($num2!= 0){
                        $res = $num1 / $num2;
                    }else{
                        echo "Cannot divide by zero!";
                    }
                }
                if(isset($_GET["%"])){
                    $res = $num1 % $num2;
                }
                echo "<input type=\"text\" readonly value=\"$res\">";
            }
            ?>
            
            </div>
        </form>
        </div>
    </div>

    
</body>
</html> -->
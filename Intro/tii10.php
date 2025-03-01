<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/tii10.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="container-fluid cal">
        <div class="bg">
            <h1 class="text-white py-5 text-center fw-bold">Calculator</h1>
            <form action="tii10.php" method="get">
                <label class="form-label fw-bold ms-5 me-4">
                    First Number:    
                </label>
                <input class="form-control-sm mb-4" type="number" name="num1" placeholder="First Number...">
                <br>
                <label class="form-label fw-bold ms-5">
                    Second Number: 
                </label>
                <input class="form-control-sm mb-3" type="number" name="num2" placeholder="Second Number...">
                <div class="container d-flex justify-content-evenly py-3 w-75">
                <button type="submit" name="+" class="btn btn-primary">+</button>
                <button type="submit" name="-" class="btn btn-primary">-</button>
                <button type="submit" name="*" class="btn btn-primary">x</button>
                <button type="submit" name="/" class="btn btn-primary">/</button>
                <button type="submit" name="%" class="btn btn-primary">%</button>
                </div>
                <div class="container d-flex justify-content-center">

                <?php
                
                if(isset($_GET["+"]) || isset($_GET["-"]) || isset($_GET["*"]) || isset($_GET["/"]) || isset($_GET["%"])){

                    
                    $num1 = 0;
                    $num2 = 0;
                    $num1 = $_GET["num1"];
                    $num2 = $_GET["num2"];

                    if(empty($_GET["num1"]) || empty($_GET["num2"])){
                        echo "<h1 style=\"color: red;\">Number is null.</h1>";
                    }

                    else{

                        if(isset($_GET ["+"])){
                            $res = $num1 + $num2;
                        }
                        if(isset($_GET ["-"])){
                            $res = $num1 - $num2;
                        }
                        if(isset($_GET ["*"])){
                            $res = $num1 * $num2;
                        }
                        if(isset($_GET ["/"])){
                            if($num2 == 0 ){
                                echo "<h1 style=\"color: red;\">Devided by 0.</h1>";
                            }
                            else{
                                $res = $num1 / $num2;
                            }
                        }
                        if(isset($_GET ["%"])){
                            $res = $num1 % $num2;
                        }
                        echo "<input type=\"text\" readonly class=\"my-5 text-center form-control-sm\" value=\"$res\" >";
                    }
                }
                ?>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
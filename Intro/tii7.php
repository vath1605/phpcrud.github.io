<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/tii7.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="parent">
    <div class="child1"><img src="../assets/image/banner.png" alt=""></div>
    <div class="child2"><img src="../assets/image/nav.png" alt=""></div>
    <div class="child3">
        <div class="left">
            <img src="../assets/image/vdo.png" alt="">
        </div>
        <div class="right">
            <fieldset>
            <legend>Product Information</legend>
            <form action="tii7.php" method="get">
                <label for="">Input Code</label>
                <input type="text" name="code" id="code"> <br><br>
                <label for="">Input Name</label>
                <input type="text" name="name" id="name"> <br><br>
                <label for="">Input QTY</label>
                <input type="number" name="qty" id="qty"> <br><br>
                <label for="">Input Price</label>
                <input type="number" name="price" id="price"> <br><br>
                <button type="submit" name="buy" class="btn btn-success mb-3">Buy Now</button>
            </form>
            </fieldset>
        </div>
    </div>
    <div class="child4">
       <div class="container">
       <table class="table table-striped">
            <thead>
                <th>CODE</th>
                <th>Name</th>
                <th>Price</th>
                <th>QTY</th>
                <th>Total</th>
                <th>Discount</th>
                <th>Payment</th>
            </thead>
            
        <?php
        if(isset($_GET["buy"])){
            $code = $_GET["code"];
            $name = $_GET["name"]; 
            $price = $_GET["price"];
            $qty = $_GET["qty"];
            $total = $price * $qty;
        if($total >0 && $total <=10){
            $dis = 0 ;
        }elseif($total > 10 && $total < 20){
            $dis = 5;
        }elseif($total > 20 && $total<30){
            $dis = 10;
        }elseif($total > 30 && $total<40){
            $dis = 15;
        }else{
            $dis = 30;
        }
        $subDis = $dis * $total / 100;
        $pay = $total - $subDis;
        echo "<tbody>
                <td>{$code}</td>
                <td>{$name}</td>
                <td>{$price}</td>
                <td>{$qty}</td>
                <td>{$total}</td>
                <td>{$dis}</td>
                <td>{$pay}</td>
            </tbody>
        </table>"; 
        }
        ?>
       </div>
    </div>
    </div>
</body>
</html>
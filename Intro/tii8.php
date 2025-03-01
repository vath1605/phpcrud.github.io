<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container w-50">
    <form action="tii8.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="pw" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button name="btn" type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    <?php 
    if(isset($_POST["btn"])){
        $myEmail = "etec2012@gmail.com";
        $myPass = "Eteccenter2012";
        $email = $_POST["email"];
        $pw = $_POST["pw"];
        $isEmail = false;
        $isPass = false;
        if($myEmail == $email || $myPass == $pw){
            if($myEmail != $email){
                echo "Email is incorrect";
            }else {
                $isEmail = true;
            }
            if($myPass != $pw){
                echo "Pass is incorrect";
            }else{
                $isPass = true;
            }
            if($isEmail && $isPass){
                echo "Login Successful";
            }
        }else{
            echo "Login Failed";
        }
    }
    
    ?>
</body>
    <script src="../bootstrap/js/bootstrap.js"></script>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./tii5.php" method="post">
        <label for="">input Username:</label>
        <input type="text" name="username" id="username">
        <br><br>
        <label for="">Input Password: </label>
        <input type="password" name="pass" id="pass">
        <br><br>
        <button type="submit">Save</button>
    </form>

    <?php 
        echo "<h1>Username : {$_POST["username"]} </h1> <br>";
        echo "<h1>Password : {$_POST["pass"]} </h1> <br>";
    ?>
</body>
</html>
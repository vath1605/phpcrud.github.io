<?php 

include './database.php';

if(isset($_GET['deleteID'])){
    $id = $_GET['deleteID'];
    $sql = "DELETE FROM tbl_client WHERE id = $id";
    try{
        mysqli_query($conn, $sql);
        header("location: ../index.php");
    }catch(mysqli_sql_exception $e){
        echo $e->getMessage();
    }
}

?>
<?php
include "connect.php";


if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `hardtb` WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    if($result){
        header("location: display.php");
    }
    else{
        die("something went wrong".mysqli_error($conn));
    }
}

?>
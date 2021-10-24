<?php
include "connect.php";
$id =$_GET['updateid'];

$sql = "select * from `hardtb` where id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$passsword = $row['password'];

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $passsword = $_POST['password'];

    $sql = "UPDATE hardtb set name='$name',email='$email', password='$passsword' where id='$id'";
    $result =mysqli_query($conn, $sql);
    if($result){
        header("location: display.php");
    }else{
        echo "something went wrong".mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updation of users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
<div class="container bg-warning p-4 text-light  my-5" method="POST">
    <h1>The updation form of exiting users.</h1>
    <form role="form" method="POST">
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter your name" autocomplete="off" value="<?php echo $name; ?>">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email" placeholder="Enter your email" autocomplete="off" value="<?php echo $email; ?>">
    </div>
    <div class="form-group">
        <label>password</label>
        <input type="password" class="form-control" name="password"  placeholder="Enter your password" autocomplete="off" value="<?php echo $passsword; ?>">
    </div>
     <button type="submit" class="btn btn-primary mt-4"name="submit">update</button>

    </form>
</div>
</body>
</html>
<?php
 include 'connect.php';
 if(isset($_POST['submit'])){
     $name = $_POST['name'];
     $email = $_POST['email'];
     $password = $_POST['password'];

     $sql =  "INSERT INTO `hardtb` (name, email, password) VALUES ( '$name', '$email', '$password')";
     $result= mysqli_query($conn, $sql);
     if($result){
         header ("location:display.php");
     }else{
         die("failed");
     }
 }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>best project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>  
<div class="container bg-secondary p-4 text-light  my-5" method="POST">
    <h1>The simple project by mozil.</h1>
    <form role="form" method="POST">
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter your name" autocomplete="off">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email" placeholder="Enter your email" autocomplete="off">
    </div>
    <div class="form-group">
        <label>password</label>
        <input type="password" class="form-control" name="password"  placeholder="Enter your password autocomplete="off"">
    </div>
     <button type="submit" class="btn btn-primary mt-4"name="submit">submit</button>

    </form>
</div>
</body>
</html>
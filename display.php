<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    <div class="container my-5 bg-info p-4  ">
        <button class="btn btn-primary"> <a href="index.php" class="text-light">add users</a></button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">SL NO.</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $sql = "SELECT * from `hardtb` ";
      $result = mysqli_query($conn, $sql);
      if($result){
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $password = $row['password'];
            echo  "<tr>
                        <th scope='row'>". $id ."</th>
                        <td>" . $name . "</td>
                        <td>" . $email . "</td>
                        <td>" . $password ."</td>
                        <td>
                        <button class='btn btn-primary'><a href='update.php?updateid=". $id ."' class='text-light'>Edit</a></button>
                        <button class='btn btn-danger'><a href='delete.php?deleteid=". $id ."' class='text-light'>Delete</a></button>
                        </td>

                  </tr>";
               
            
        }
    }


      ?>
  <!--  <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>
    </div>
</body>
</html>

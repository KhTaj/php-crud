<?php
    include 'connect.php';
    $id=$_GET['updateid'];
    $sql="Select * from `crud` where id=$id";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $name=$row['name'];
    $email=$row['email'];
    $phone=$row['phone'];
    $password=$row['password'];


    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $password=$_POST['password'];

        $sql="update `crud` set id=$id,name='$name',email='$email',phone='$phone',password='$password' where id=$id";
        $result=mysqli_query($conn,$sql);
        if($result){
            // echo "Data updated successfully";
            header('location:display.php');
        }else{
            die(mysqli_error($conn));
        }
    }


?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container my-5">

    <form method="post">
  

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" placeholder="Enter your Name" name="name" autocomplete="off" value=<?php echo $name;?>>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" placeholder="Enter your Email address" name="email" autocomplete="off" value=<?php echo $email;?>>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Phone</label>
    <input type="number" class="form-control" placeholder="Enter your mobile number" name = "phone" autocomplete="off" value=<?php echo $phone;?>>
    
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Enter your password" name = "password" autocomplete="off" value=<?php echo $password;?>>
  </div>
 
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>

  </body>
</html>
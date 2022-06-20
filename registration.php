<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
    body{
      background-image: url("reg.jpg");
      background-size:cover;
      background-repeat: no-repeat;
    }
  </style>
</head>
<body>
  <center><h1>Registration form</h1></center>
  <?php

if(isset($_GET['msg'])){
 if($_GET['msg']==="success"){
   echo "<h3 style='color:green'>Congrats!!You registerd sucessfully</h3>";
 }
}
 
 ?>
 <div class="container">
 <form action="insertdata.php" method="post">
 <div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    <input type="text" class="form-control" name="username" aria-describedby="emailHelp" placeholder="Enter username">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control"  name="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control"  name="password" placeholder="Password">
  </div>
 
  <button type="submit" name="register" class="btn btn-primary">Submit</button>
</form>
 </div>

 <div class="container ml-10 mt-3">
   <button class="bg-orange"><a href="login.php" class="bg-success text-light">Go to login</a></button>
 </div>
  <!-- <div class="container">
  <form action="insertdata.php" method="post">
    <input type="text" name="username" placeholder="enter username"><br/>
    <input type="email" name="email" placeholder="enter email"><br/>
    <input type="password" name="password" placeholder="enter password"><br/>
    <button type="submit" name="register">REGISTER</button>
  </form>
  </div> -->
  <!-- login page -->
  <!-- <div class="container">
  <h1>Login form</h1>
  <form action="checkuser.php" method="post">
    <input type="email" name="email" placeholder="enter email"><br/>
    <input type="password" name="password" placeholder="enter password"><br/>
    <button type="submit" name="login">LOGIN</button>
  </form>
  </div> -->

  <!-- <div class="container mr-md">
  <form action="login.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-primary" name="login">LOGIN</button>
</form>
  </div> -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

<?php

if(isset($_POST['register'])){
  $name=$_POST['username'];
  $email=$_POST['email'];
  $password=$_POST['password'];

//database connection
$con=new mysqli('localhost','root','','notes');
if($con->connect_error){
  die("something wrong in database connection.....Try again!!!!");
}

//inserting data into table
$sql="insert into user_data(username,email,password) values('$name','$email','$password')";
  if($con->query($sql)){


header("location:registration.php?msg=success");
  }
  else{
    echo "something wrong .....try again";
  }
}
?>
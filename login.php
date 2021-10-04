<?php
session_start();
include("index1.php");
$con = new connection();
if(isset($_SESSION['admin'])){
  header("Location:home.php");
}
elseif(isset($_SESSION['client'])){
  header("Location:alldocs.php");
}

if(isset($_POST['email'])){
  $t = $con->conn->query('select * from admin where email="'.$_POST['email'].'" and password ="'.$_POST['password'].'"');
  if($t->num_rows == 1){
    while($id = $t->fetch_assoc()!=NULL){
      $_SESSION["admin"]=$id['id'];
      header("Location:home.php");
    }
  }
  $t = $con->conn->query('select * from client where email="'.$_POST['email'].'" and password ="'.$_POST['password'].'"');
  if($t->num_rows == 1){
    echo"h1";
    while($id = $t->fetch_assoc()){
      $_SESSION["client"]=$id['id'] ;
      header("Location:alldocs.php");
    }
  }
  
}
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper text-center" style="margin: 5%; border: black thin 1px; padding:5%;">
  <div id="formContent">
    <!-- Tabs Titles -->

    <div class="h2">Login</div>
    <!-- Login Form -->
    <form action="" method="POST">
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="login">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
      <br>
      <br>
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
</body>
</html>

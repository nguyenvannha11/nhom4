<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
  <?php 
  session_start();
  include("connect.php");
  if(isset($_POST['ok'])){
    $username= $_POST['username'];
     $password= $_POST['password'];
     "select * from user where user='$username' and password='$password'";
if ($username=='user' and $password=='password') {
  header('location:QuanTri.php');
} else {
  header('location:login.php');
}

     
  } 
  ?>
<form method="$_POST">
  <div class="imgcontainer">
    <img src="img/bicyble_shop.png" alt="Avatar" class="avatar" width="50px">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit" name="ok">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn"><a href="GiaoDien.php">Cancel</a></button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>

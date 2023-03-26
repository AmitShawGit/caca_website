<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup| New User</title>
    <?php include 'links.php'; ?>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
   <div class="mainbox">
    <form action="" class="form" method="POST">
        <img src="./img/logo1.png" alt="" class="img-fluid ml-5" style="width: 158px;">
       <center><h4>Login Form</h4></center>
       <br>
        <label for="email">Email</label><br>
        <input type="email" name="email" class="field" id="email"><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" class="field" id="password"><br><br>
         <center><button type="submit" class="btn btns text-white" name="submit">Submit</button></center>

        <br>
        <center>Don't have a account <a href="signup.php">Signup</a></center>
        <?php 
include 'connection.php';

if(isset($_POST['submit'])){
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);

$searchquery = "select * from reg where email = '$email'";
$squery = mysqli_query($con,$searchquery);
$emailcount = mysqli_num_rows($squery);

if($emailcount){
    $db_email= mysqli_fetch_assoc($squery);
    $db_pass = $db_email['password'];
      $_SESSION['username'] = $db_email['name'];
    $passdecode = password_verify($password,$db_pass);

    if($passdecode){
        header('location:dashboard.php');
    }else{
        echo "wrong password";
    }
}
else{
    echo "not registered yet";
}
}?>
    </form>
   </div>
</body>
</html>

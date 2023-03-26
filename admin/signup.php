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
       <center><h4>Registration Form</h4></center>
       <br>
        <label for="name">Name</label><br>
        <input type="text" name="name" class="field" id="name"><br>
        <label for="number">Mobile</label><br>
        <input type="number" name="number" class="field" id="number"><br>
        <label for="email">Email</label><br>
        <input type="email" name="email" class="field" id="email"><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" class="field" id="password"><br><br>
         <center><button type="submit" class="btn btns text-white" name="submit">Submit</button></center>

        <br>
        <center>Already have a account <a href="index.php">login</a></center>

    </form>
   </div>
</body>
</html>
<?php
include 'connection.php';

if(isset($_POST['submit'])){
$name = mysqli_real_escape_string($con,$_POST['name']);
$number = mysqli_real_escape_string($con, $_POST['number']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);

$cpassword = password_hash($password,PASSWORD_BCRYPT);

$searchquery = "select * from reg where email = '$email'";
$squery = mysqli_query($con,$searchquery);
$emailcount = mysqli_num_rows($squery);

if($emailcount > 0){
    ?>
    <script>
          alert ("already exist");
    </script>
    <?php
}else{
$insertquery = "insert into reg(name,number,email,password) value('$name','$number','$email','$cpassword')";
$query = mysqli_query($con,$insertquery);
header('location:index.php');
}


}
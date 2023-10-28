<?php
     $showAlert=false;
     $showError=false;
     if($_SERVER["REQUEST_METHOD"]=='POST'){
        include "conn.php";
        $username=$_POST['username'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $gender=$_POST['gender'];
        $dob=$_POST['dob'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];

        $existsql="SELECT * FROM `userinfo` WHERE username='$username' ";
        $result=mysqli_query($conn,$existsql);
        $numExistRows=mysqli_num_rows($result);
        if($numExistRows >0){
            $showError ="Username Already Exists";
        }
        else{
            if($password==$cpassword){
                $sql="INSERT INTO `userinfo` (`id`,`username`,`name`,`email`,`gender`,`dob`,`phone`,`password`) VALUES ('','$username','$name','$email','$gender','$dob','$phone','$password')";
                $result= mysqli_query($conn,$sql);
                if($result){
                    $showAlert=true;
                }
            }
            else{
                $showError = "Passwords do not match";
            }
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Create New Account</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="icon" href="partials/icon(1).png">
    </head>    
    <body>
    <?php 
    if($showAlert){
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your account is now created and you can login
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div> ';
        }
        if($showError){
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> '. $showError.'
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div> ';
        }
    ?>
        <div class="container">
        <center><h1>Sign Up</h1></center>
        <form action="/registration_system/signup.php" method="post">
            <div class="form-group">
                <label for "username">username</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="form-group">
                <label for "name">name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Full name">
            </div>
            <div class="form-group">
                <label for "email">email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                Gender<br>
                <input type="radio" id="gender" name="gender" value="Male">
                <label for "male">Male</label> &nbsp; &nbsp;   
                <input type="radio" id="gender" name="gender" value="Female">
                <label for "female">Female</label>
            </div>
            <div class="form-group">
                <label for "phone">phone</label>
                <input type="tel" class="form-control" id="phone" name="phone" pattern="[0-9]{10}" placeholder="country code not required">
            </div>
            <div class="form-group">
                <label for "dob">Date of Birth</label>
                <input type="date" class="form-control" id="dob" name="dob">
            </div>
            <div class="form-group">
                <label for "password">password</label>
                <input type="password" class="form-control" id="" name="password">
            </div>
            <div class="form-group">
                <label for "cpassword">Confirm password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword"><br>
            </div>
           <center><button type="submit" class="btn btn-primary">SignUp</button></center>
        </form>
        </div>
    </body>
</html>
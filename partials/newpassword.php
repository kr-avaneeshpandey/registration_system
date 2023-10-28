<?php
     include("../sessions.php"); // Include the session management file
     
     // Check if the user is logged in
     if (!isUserLoggedIn()) {
         header("location: resetpassword.php"); // Redirect to the login page if not logged in
         exit;
     }
     $showAlert=false;
     $showError=false;
     if($_SERVER["REQUEST_METHOD"]=='POST'){
        include("../conn.php");
        $username=$_SESSION['username'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];

        if($password==$cpassword){
            $sql="UPDATE `userinfo` SET password = '$password' WHERE username='$username'";
            $result= mysqli_query($conn,$sql);
            if($result){
                $showAlert=true;
            }
        }
        else{
            $showError = "Passwords do not match";
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" href="icon(1).png">
    <title>New Password</title>
  </head>
  <body>
    <?php
    if($showAlert){
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your password is changed and you can login
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div> ';
        }
    if($showError){
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> '.$showError.'
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div> ';
        }
    ?>
    <div class="container my-3">
        <form action="/registration_system/partials/newpassword.php" method="post">
            
        <div class="alert alert-success" role="alert"><center>
            <img src="logo.svg" alt="logo" height="100px">
            <hr>
            <h4 class="alert-heading">Enter New Password</h4></center>
            <hr>
            <p class="mb-0">Goto login page<a href="/registration_system/logout.php"> using this link.</a></p>
        </div>
        <div class="form-group">
                <label for "password">password</label>
                <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group">
                <label for "cpassword">confirm password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword">
        </div>
        <center><button type="submit" class="btn btn-primary">Submit</button></center>
    </div>
    </form>
    </body>
</html>
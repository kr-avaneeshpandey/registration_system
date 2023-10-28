<?php
     $showError=false;
     if($_SERVER["REQUEST_METHOD"]=='POST'){
        include("../conn.php");
        $username=$_POST['username'];
        $email=$_POST['email'];
        $dob=$_POST['dob'];
        $stm="select * from userinfo where username='$username' and email='$email'and dob='$dob'";
        $result=mysqli_query($conn,$stm);
        $row_cnt=mysqli_num_rows($result);

        if($row_cnt>0){
            while($val=mysqli_fetch_assoc($result)){
                include("../sessions.php");
                $_SESSION['username']=$val['username'];
                header("Location:newpassword.php");
                exit;
            }
        }
        else{
            $showError="Credentials Didn't Matached";
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
    <title>Reset Password</title>
  </head>
  <body>
    <?php
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
        <form action="/registration_system/partials/resetpassword.php" method="post">
            
        <div class="alert alert-success" role="alert"><center>
            <img src="logo.svg" alt="logo" height="100px">
            <hr>
            <h4 class="alert-heading"> Reset Your Password</h4></center>
            <hr>
            <p class="mb-0">Goto login page <a href="/registration_system/logout.php"> using this link.</a></p>
        </div>
        <div class="form-group">
                <label for "username">username</label>
                <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="form-group">
                <label for "email">email</label>
                <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
                <label for "dob">Date of Birth</label>
                <input type="date" class="form-control" id="dob" name="dob">
        </div>
        <center><button type="submit" class="btn btn-primary">Submit</button></center>
    </div>
    </form>
    </body>
</html>
<?php
include "sessions.php"; // Include the session management file

// Check if the user is logged in
if (!isUserLoggedIn()) {
    header("location: login.php"); // Redirect to the login page if not logged in
    exit;
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
    <title>Welcome </title>
  </head>
  <body>
    <div class="container my-3">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Welcome - <?php echo $_SESSION['name']?></h4>
            <p>You are logged in as <?php echo $_SESSION['username']?></p>
            <hr>
            <img src="partials/logo.svg" alt="logo">
            <hr>
            <p class="mb-0">Whenever you need, be sure to logout <a href="/registration_system/logout.php"> using this link.</a></p>
        </div>
    </div>
  </body>
</html>

 

<?php
session_start();
$_SESSION['loggedin']=true;

// Function to check if the user is logged in
function isUserLoggedIn() {
    return isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true;
}



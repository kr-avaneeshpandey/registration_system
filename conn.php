<?php 
$server="localhost";
$username="root";
$password="";
$database="facebookdb";

$conn = mysqli_connect($server,$username,$password,$database);
if(!$conn){
    die("Error");
}
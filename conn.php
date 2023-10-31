<?php 
$server="localhost";
$username="";
$password="";
$database="facebookdb";

$conn = mysqli_connect($server,$username,$password,$database);
if(!$conn){
    die("Error");
}
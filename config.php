<?php
$SERVER="localhost";
$user="root";
$password="";
$database="login";

$con= mysqli_connect($SERVER,$user,$password,$database);
if(!$con){
    die("<script>alert('connection fail.')</script>");
}

?>
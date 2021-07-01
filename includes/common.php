<?php
$con = mysqli_connect("localhost", "root", "", "ecommerce");

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

?>

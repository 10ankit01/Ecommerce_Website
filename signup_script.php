<?php
include 'includes/common.php';
$email = mysqli_real_escape_string($con,$_POST['email']);
$select_query = "SELECT id FROM users Where email = '$email'";
$select_query_result = mysqli_query($con, $select_query);
$num_rows = mysqli_num_rows($select_query_result);
if($num_rows > 0 ){
    echo "ERROR , Email already exists  <br>";
    echo  '<a href="index.php">click here </a>'; 
}else{
    
    $name = mysqli_real_escape_string($con,$_POST['name']);
$password = mysqli_real_escape_string($con,$_POST['password']);
$phone = $_POST['phone'];
$city = mysqli_real_escape_string($con,$_POST['city']);
$address = mysqli_real_escape_string($con,$_POST['address']);
$user_registration_query = "insert into users(email, name, password, contact , city , address) values ('$email', '$name', '$password', '$phone','$city' , '$address')";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
$_SESSION['email'] = $email;
$_SESSION['id'] = mysqli_insert_id($con);
header('location:product.php');
    
}

?>
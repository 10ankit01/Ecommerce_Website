<?php
include 'includes/common.php';
$email = mysqli_real_escape_string($con,$_POST['email']);
$password = mysqli_real_escape_string($con,$_POST['password']);

$select_query = "SELECT id , email FROM users WHERE email = '$email' AND password = '$password'";
$login_submit = mysqli_query($con, $select_query) or die(mysqli_error($con));
$num_rows = mysqli_num_rows($login_submit);
if($num_rows == 0){
    echo "No user exist with email id $email";
}else{
    $row = mysqli_fetch_array($login_submit);
    $_SESSION['email'] = $row['email'];
    $_SESSION['id'] = $row['id'];
    header('location:product.php');
}

?>
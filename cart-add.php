<?php
require 'includes/common.php';
$user_id = $_SESSION['id'];
$item_id = $_GET['id'];
$insert_query = "insert into users_items(user_id , item_id , status ) Values('$user_id' , '$item_id' , 'Added to cart')";
$insert_query_result = mysqli_query($con, $insert_query);
header('location:product.php');

?>
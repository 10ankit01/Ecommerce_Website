<?php
require 'includes/common.php';
$item_id = $_GET['id'];
$user_id = $_SESSION['id'];
$delete_query = "delete from users_items where item_id = '$item_id' and user_id = '$user_id'";
$delete_query_result = mysqli_query($con, $delete_query) or die(mysqli_error($con));
header('location:cart.php');
?>

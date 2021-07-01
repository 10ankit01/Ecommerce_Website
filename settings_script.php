<?php
 include 'includes/common.php';
if(!$_SESSION['email']){
    header('location:index.php');
    exit();
}
$user_id = $_SESSION['id'];
$oldPassword = mysqli_real_escape_string($con , $_POST['oldPW']);
$newPassword = mysqli_real_escape_string($con , $_POST['newPW']);
$newPassword1 = mysqli_real_escape_string($con , $_POST['newPW1']);
$email = $_SESSION['email'];
if(strlen($newPassword) != strlen($newPassword1)){
     
     echo 'ERROR , old password and new password does not match.';  
      header('Refresh:5 ; url= settings.php');
   
}
else{
    $select_query = "select id from users where email = '$email' and password = '$oldPassword'";
$select_query_result = mysqli_query($con, $select_query);
if(mysqli_num_rows($select_query_result)== 0){
    echo 'ERROR , INCORRECT OLD PASSWORD.';  
    
    header('Refresh:5 ; url= settings.php');
   
}else{
    $update_query = "update users set password = '$newPassword' where email = '$email' and id = '$user_id'";
    $update_query_result = mysqli_query($con, $update_query) or die(mysqli_error($con));
    header('location:product.php');
}

}
?>


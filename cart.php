<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location:index.php');
}

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>cart</title>
        
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="index.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
       <?php include 'includes/header.php';
       $user_id = $_SESSION['id'];
$select_query = "select i.id , i.name , i.price from items i , users_items ui where user_id = '$user_id' and i.id = ui.item_id  and ui.status = 'Added to cart'";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
$sum = 0; ?>
        
        <div class="container overlapping table-responsive">
            <?php if(mysqli_num_rows($select_query_result) == 0){
     echo '<h4 class="container panel-margin">Add products to cart first. Goto <a href="product.php">Products</a> page.</h4>';
            } else {?>
            <div class="row">
                <
                <div style="padding-left: 70px" class="col-xs-5 col-xs-offset-3">
                     <table class="table table-striped table-hover">
                <tbody>
                    <br>
                    <br>
                    <tr>
                        <th>Item Number</th>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th></th>
                    </tr>
                    
                   <?php while ($row= mysqli_fetch_array($select_query_result)){
                       $id = $row['id'];
                       $name = $row['name'];
                       $price = $row['price'];
                       $sum = $sum + $row['price'];?>
                    <tr>
                         <td><?php echo "$id"; ?></td>
                        <th><?php echo "$name" ;?></th>
                        <th><?php echo "$price"; ?></th>
                        <th><a href="cart-remove.php?id=<?php echo $id ; ?>" class="remove_link_link">Remove</a></th>
                        
                    </tr>
                    
                   <?php }?>
                   
                    <tr>
                        <td></td>
                        <td>Total</td>
                        <td><?php echo "$sum";?></td>
                        <td><a href="success.php"><button type="button" class="btn btn-primary">Confirm Order</button></a></td>
                    </tr>
                    
                </tbody>
            </table>
                </div>
                
            </div>
            <?php } ?>
        </div>
   
        
        
        <?php include 'includes/footer.php'; ?>
    </body>
</html>



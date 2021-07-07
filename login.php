<?php require 'includes/common.php';
if (isset($_SESSION['email'])){
      header('location: product.php');
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
        <title>Login</title>
        
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
        
            <?php include 'includes/header.php'; ?>
            
        <div class="container overlapping" style="padding-top: 50px">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning"><em>Login to make a purchase</em></p>
                            <form method="POST" action="login_submit.php">
                               <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                                <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                                <button type="submit" class="btn btn-primary" value=”login_submit”>Login</button>
                            
                            </form>
                             
                        </div>
                        <div class="panel-footer">
                            <p>Don't have an account?<a href="signup.php">Register</a></p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <?php include 'includes/footer.php'; ?>
        
    </body>
</html>

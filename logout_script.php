<?php
   require 'includes/common.php';
   if(isset($_SESSION['email'])){
       session_destroy();
   }
   header('location:index.php');
   ?>


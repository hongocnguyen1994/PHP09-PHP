<?php 
   $error = 0;

   if($username == "" || $password == "") {
      echo "<script type='text/javascript'>alert('Username is empty || Password is empty');</script>";
      $error = 1;
   }
   else {
      $error = 0;
      $sqlError    = "SELECT * FROM users WHERE username = '$username'";
      $resultLogin = $conn_php09_basic->query($sqlError);
      if ($resultLogin->num_rows > 0) {
         echo "<script type='text/javascript'>alert('Username already exists');</script>";
         $error = 1;
      }else {
         $error = 0;
      }
   }
?>
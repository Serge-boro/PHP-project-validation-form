

<?php
  $name = filter_var(trim($_POST['user_name']), FILTER_SANITIZE_STRING);
  $pass = filter_var(trim($_POST['user_password']), FILTER_SANITIZE_STRING);

  $pass = md5($pass.'abc');

  require "../support/valid.php";

  $result = $mysql->query("SELECT * FROM `users` WHERE `username` = '$name' AND `password` = '$pass'");

    if(`username` == $name){

    }else{
     $name_error = "Please check carefully username or password ";
   }

  $user = $result->fetch_assoc();

  if(count($user) == 0){

     include('../validation/login.php');
  }else{
    
   setcookie('user', $user['name'], time() + 3600, "/");
  $mysql->close();
  include('../mainPage.php');
  }
  
   

    
  
   
 

?>


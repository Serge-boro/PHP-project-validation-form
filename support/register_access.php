<?php
 $name = filter_var(trim($_POST['user_name']), FILTER_SANITIZE_STRING);
  $pass = filter_var(trim($_POST['user_password']), FILTER_SANITIZE_STRING);

if(!$name)
  if(empty($name) || empty($pass)){
  $name_error = "Please check you name and password";
 }
 if($name){
   if( strlen($name) < 6 || strlen($pass) < 6){
  $name_error2 = "username needs to have at least 6 letters and password a minimum of 6";
 }
 }

  $passHach = md5($pass.'abc');

 if(strlen($name) >= 6 && strlen($pass) >= 6){
   require "../support/valid.php";
  $mysql->query("INSERT INTO `users` (`username`, `password`) VALUE('$name', '$passHach')");

   $mysql->close();

   include('../validation/login.php');
 }else{
   include('../validation/register.php');
 }
?>
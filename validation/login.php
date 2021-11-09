

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel = "stylesheet", href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">  
 <link rel="stylesheet" href='../css/style.css'> 
 <title>Document</title>
</head>
<body>
   <div class="container">
    <div class="card">
     <div class=img-container></div> 
       <h2 class="autoriz">Authorization</h2><br/>
         <?php if(isset($name_error)) { ?> 
        <p><?php echo $name_error ?></p>
       <?php }?>
       <form action="../support/auth.php" method="POST">
      <input type='text' placeholder="user name" name="user_name"> <br/>
      <input type='password' placeholder="user password" name="user_password">
      <input class="register-button" value="Authorization" type='submit'></input>
    </form>   
    <p><a href='../support/register_access.php'>registration</a></p>
     </div>
   </div>
</body>
</html>


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
       <h2 class="autoriz">REGISTRATION</h2>
      <?php if(isset($name_error)) { ?> 
        <p><?php echo $name_error ?></p>
       <?php }?>
       <?php if(isset($name_error2)) { ?> 
        <p><?php echo $name_error2 ?></p>
       <?php }?>
     
       <form action="../support/register_access.php" method="POST" class="js-register">
      <input type='text' placeholder="user name" name="user_name" value = "<?php echo htmlspecialchars($name);?>"> <br/>
      <input type='password' placeholder="user password" name="user_password">
      <input class="register-button" value="registration" type='submit'></input>
    </form>  
    <p><a href='../support/auth.php'>authorization</a></p> 
     </div>
   </div>
</body>
</html>


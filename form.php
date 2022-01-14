<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>
<?php
$title=$fname=$lname=$email=$password=$password2='';
  $error=array('fname'=>'', 'lname'=>'','email'=>'','password'=>'','password2'=>'');
  if(isset($_POST['submit'])){
  
     if(empty($_POST['fname'])){
        
         $error['fname']="you must but your first name";
     }else
     { $fname=$_POST['fname'];}


     if(empty($_POST['lname'])){
        $error['lname']="you must but your last name";
    }else
    {$lname=$_POST['lname'];}
    
    if(empty($_POST['email'])){
        
        $error['email']="you must but your email";
    }else
    { $email=$_POST['email'];}
    
    
    if(empty($_POST['password'])){
        $password=$_POST['password'];
        $error['password']="you must but your  password";
        
    }else if($_POST['password']!=$_POST['password2'])
    {$password=$_POST['password'];
        $error['password2']="Password does not match";
    }
    
    
    if(empty($_POST['password2'])){
        $password2=$_POST['password2'];
        $error['password2']="you must but your password";
    }else
    { $password2=$_POST['password2'];}
    }
    
    ?>
<h2>SignUp</h2>
<form action="" method="POST">
<input  id="fname" type="text" placeholder="first Name" name="fname" value="<?php echo $fname ?>" ><div><?php echo $error['fname']; ?></div>
<small id="fnamem"></small>
<input id="lname" type="text" name="lname" placeholder="last Name" value="<?php echo $lname ?>"><div><?php echo $error['lname']; ?></div>
<small id="lnamem"></small>
<input  id ="email" type="email" name="email" placeholder="Azooz@gmail.com" value="<?php echo $email ?>"><div><?php echo $error['email']; ?></div>
<small id="emailm"></small>
<input  id ="password"type="password" name="password" placeholder="press your password" value="<?php echo $password ?>"><div><?php echo $error['password']; ?></div>
<small id="passwordm"></small>
<input  id="password2" type="password" name="password2" placeholder="same password" value="<?php echo $password2 ?>"><div><?php echo $error['password2']; ?></div>
<small id="password2m"></small>

<button type="submit" name="submit">SignUp</button>
</form>    

<button><a href="index.php">back</button>
<script src=form.js></script>
</body>
</html>
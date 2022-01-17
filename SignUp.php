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
    } else { $password=$_POST['password'];}
    
    
    if(empty($_POST['password2'])){
        $password2=$_POST['password2'];
        $error['password2']="you must but your password";
    }else
    { $password2=$_POST['password2'];}
    }
    if(!empty($_POST['password2'])&& !empty($_POST['password']) &&!empty($_POST['email']) && !empty($_POST['lname']) &&!empty($_POST['fname']) )
    include("connect.php");
    ?>
<h2>SignUp</h2>
<form  action=""  method="POST">
<input  id="fname" onkeyup="submitData()" required type="text" placeholder="first Name" name="fname" value="<?php echo $fname ?>" ><div><?php echo $error['fname']; ?> </div>
<small id="fnamem"></small>
<input id="lname"  onkeyup="submitData()" required type="text" name="lname" placeholder="last Name" value="<?php echo $lname ?>"><div><?php echo $error['lname']; ?></div>
<small id="lnamem" ></small>
<input  id ="email"  required type="email" name="email" placeholder="Azooz@gmail.com" value="<?php echo $email ?>"><div><?php echo $error['email']; ?></div>
<small id="emailm"></small>
<input  id ="password" onkeyup="submitData()" required type="password" name="password" placeholder="press your password" value="<?php echo $password ?>"><div><?php echo $error['password']; ?></div>
<small id="passwordm"></small>
<input  id="password2" onkeyup="submitData()" required type="password" name="password2" placeholder="same password" value="<?php echo $password2 ?>"><div><?php echo $error['password2']; ?></div>
<small id="password2m"></small>

<button type="submit" name="submit">SignUp</button>
</form>    

<button><a href="index.php">back</button>
<script>

let fname = document.getElementById("fname");
let lname = document.getElementById("lname");
let email = document.getElementById("email");
let password = document.getElementById("password");
let password2 = document.getElementById("password2");
let errorfname = document.getElementById("fnamem");
let errorlname = document.getElementById("lnamem");
let errorEmail = document.getElementById("emailm");
let errorPassword = document.getElementById("passwordm");
let errorpassword2 = document.getElementById("password2m");

echo("azoooz");
function submitData(e){

    if (fname.value.length < 3) {
        errorfname.innerHTML = "name must more than 3";
    }
    if (lname.value.length < 3) {
        
        errorlname.innerHTML = "name must more than 3";
    }
    if (email.value.length < 10) {
        
        errorEmail.innerHTML = "email must more than 3";
    }
    if (password.value.length < 5) {
        errorPassword.innerHTML = "Password must more than 5 ";
        if(password.value!==password2.value){
            errorPassword.innerHTML = " the password not match";
            errorPassword2.innerHTML = " the password  not match";
        }
    }
    
else if(fname.value.length>3 && lname.value.length >3 && password.value.length > 5 && password.value===password2.value){
    header( "Location:signin.php");
}


}



</script>
</body>
</html>
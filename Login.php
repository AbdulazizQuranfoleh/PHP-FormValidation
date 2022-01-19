
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
$title=$fname=$password='';
$error=array('fname'=>'','password'=>'');
// database


// if(isset($_POST['submit'])){
    
//     if(empty($_POST['fname'])){
       
        
//          $error['fname']="you must but your  name";
//      }else
//      { $fname=$_POST['fname'];}

//      if(empty($_POST['password'])){
//         $error['password']="you must but your password";
//     }
$servername = "localhost";
$username = "root";
$passwordd = "";
$dbname = "form_db";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $passwordd);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO users (fname, password)
  VALUES ('$fname    ', ' $password')";
  // use exec() because no results are returned
  $conn->exec($sql);
  $last_id = $conn->lastInsertId();
  echo "New record created successfully. Last inserted ID is: " . $last_id;
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
    

    // include("connectlogin.php");
        ?>

<h2>SignUp</h2>
<form action="" method="POST">
<input  id="fname" type="text" placeholder="first Name" name="fname" value="<?php echo $fname ?>" ><div><?php echo $error['fname']; ?></div>
<input id="password" type="text" name="password" placeholder="password" value="<?php echo $password ?>"><div><?php echo $error['password']; ?></div>
<button type="submit" name="submit">Signin</button>
</form>



<button><a href="index.php">main</button>
</body>
</html>
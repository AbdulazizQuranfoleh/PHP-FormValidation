<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "form_db";

if(isset($_POST['submit'])){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
$password2=$_POST['password2'];
}

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $pass);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $date=date('y-m-d');
  $sql = "INSERT INTO users (fname, lname, email,password,password2,date)
  VALUES ('$fname',' $lname', '$email','$password','$password2','$date')";
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>


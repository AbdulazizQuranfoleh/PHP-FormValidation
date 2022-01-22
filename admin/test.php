<?php



$connection = mysqli_connect("localhost","root","","form_db");
if(isset($_POST['update']))
{
   $id = $_POST['edit_id'];
   $username =$_POST['username-edit'];
   $email = $_POST['email-edit'];
   $password =$_POST['password-edit'];
   $query = "UPDATE users SET fname='$username', email='$email', password='$password' WHERE id='$id'";
   $query_run=mysqli_query($connection, $query);
    if($query_run){        
        header ('location:tables.php');
}else{
    header ('location:tables.php');
}

    


}
?>
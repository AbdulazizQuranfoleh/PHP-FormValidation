<?php

$connection = mysqli_connect("localhost","root","","form_db");
if(isset($_POST['update']))
{
   $id = $_POST['edit_id'];
   $name =$_POST['name-edit'];
   $query = "UPDATE categories SET name='$name' WHERE id='$id'";
   $query_run=mysqli_query($connection, $query);
    if($query_run){        
        header ('location:categories.php');
}else{
    header ('location:categories.php');
}

    


}
?>
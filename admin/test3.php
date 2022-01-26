<?php

$connection = mysqli_connect("localhost","root","","form_db");
if(isset($_POST['update']))
{
   $id = $_POST['edit_id'];
   $name =$_POST['name-edit'];
   $price =$_POST['price-edit'];
   $description =$_POST['description-edit'];
   $query = "UPDATE products SET name='$name',price='$price',description='$description'  WHERE id='$id'";
   $query_run=mysqli_query($connection, $query);
    if($query_run){        
        header ('location:products.php');
}else{
    header ('location:products.php');
}

    


}
?>
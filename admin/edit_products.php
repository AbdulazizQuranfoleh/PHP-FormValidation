
<?php

include("./includes/header.php");
include("includes/navbar.php");
?>

<?php
$connection = mysqli_connect("localhost","root","","form_db");

if(isset($_POST['edit'])){
$id=$_POST['edit'];
$query="SELECT * FROM products WHERE id='$id'";
$query_run= mysqli_query($connection, $query); 
foreach($query_run as $row)
{
    ?>
  
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> EDIT Admin Profile </h6>
  </div>
  <div class="card-body">
<form action="test2.php" method='post'>
<input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>" >
  <div class="form-group">
        <label> name </label>
         <input type="text" name="name-edit" class="form-control" value=<?php echo $row['name']?> placeholder="name">
    </div>
    <div class="form-group">
        <label> price </label>
         <input type="text" name="price-edit" class="form-control" value=<?php echo $row['price']?> placeholder="price ">
    </div>
    <div class="form-group">
        <label> description </label>
         <input type="text" name="description-edit" class="form-control" value=<?php echo $row['description']?> placeholder="description">
    </div>
    
    <a href="tables.php" class="btn btn-danger" > CANCEL  </a>
<button name='update' class="btn btn-primary"> Update </button>
</form>                                   
    <?php 
}
}
?> 
  </div>
</div>


<?php

include('includes/script.php');
include('includes/footer.php');
?>
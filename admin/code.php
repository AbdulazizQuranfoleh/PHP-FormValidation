
<?php

include("./includes/header.php");
include("includes/navbar.php");
?>

<?php
$connection = mysqli_connect("localhost","root","","form_db");

if(isset($_POST['edit'])){
$id=$_POST['edit'];
$query="SELECT * FROM users WHERE id='$id'";
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
<form action="test.php" method='post'>
<input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>" >
  <div class="form-group">
        <label> Username </label>
         <input type="text" name="username-edit" class="form-control" value=<?php echo $row['fname']?> placeholder="Enter Username">
    </div>
    <div class="form-group">
         <label>Email</label>
         <input type="email" name="email-edit" class="form-control" value=<?php echo $row['email']?> placeholder="Enter Email">
    </div>
    <div class="form-group">
         <label>Password</label>
         <input type="password" name="password-edit" class="form-control" value=<?php echo $row['password']?> placeholder="Enter Email">
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
if(isset($_POST['delete_btn']))
    {
        $id=$_POST['delete_id'];
        $query="DELETE FROM users WHERE id =$id";
        $query_run=mysqli_query($connection, $query);
        if($query_run)
        {
          echo"worked you delete account $id
           <button><a href='tables.php'> back to tables</button";
        }
        else
        {
            ('location:tables.php');
        }
    }
?>

<?php

include('includes/script.php');
include('includes/footer.php');
?>
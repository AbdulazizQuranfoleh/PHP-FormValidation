<?php
// session_start();

$currentDate = date('Y-m-d g:i:s');

try {
  $sereverName = "localhost";
  $dbName = "form_db";
  $dbusername = "root";
  $dbpassword = "";
  $conn = new PDO("mysql:host=$sereverName;dbname=$dbName", $dbusername, $dbpassword);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "<br>" . $e->getMessage();
}
?>

<html>  
<head>  
    <title>login </title>  
   
</head>  
<body>  
    <div id = "frm">  
        <h1>Login</h1>  
        <form name="f1" action = "<?php $_SERVER['PHP_SELF']?>" onsubmit = "return validation()" method = "POST">  
            <p>  
                <label> UserName: </label>  
                <input type = "text" id ="user" name  = "user" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="pass" name  = "pass" />  
            </p>  
            <p>     
                <input type =  "submit" id = "btn" value = "Login" />  
            </p>  
        </form>  
      </div>  
      <?php
    
    
if(isset($_POST['user']) && isset($_POST['pass'])){
  $username = $_POST['user'];  
  $password = $_POST['pass'];
        $sql =" SELECT fname,password, admin FROM users WHERE fname='$username' AND password='$password'";  
        $data=$conn->query($sql);
        $result = $data->fetch(PDO::FETCH_ASSOC);
        $last_activity=date('y-m-d');
        if($data->rowCount() ===1 && $result['admin']==1){  
            echo "<h1><center>user  Login successful {$result['fname']}</center></h1>";  
            $data = "UPDATE users SET last_activity='$last_activity' WHERE fname='$username' AND password='$password'";
            $conn->exec($data);  
            
        }else if($data->rowCount() ===1 && $result['admin']!==1){  
            $data = "UPDATE users SET last_activity='$last_activity'WHERE fname='$username' AND password='$password'";
            $conn->exec($data);
            echo "<h1><center>admin Login successful {$result['fname']}</center></h1>"; 
            echo "<button><a href='admin/index.php'><h1><center>go admin </center></h1></button>" ;

      }  
        else {  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        } 
      }
      ?>

    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>     
</html>  
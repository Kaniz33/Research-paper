<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="Admin Login.css">
    <title>Admin Login</title>
 
    
</head>
<body>

    <div class="nevbar">
        <div class="menubar">
            <a href="Home Page.php">Home</a>
            <a href="#" class ="log">Admin</a>
            <a href="login-teacher.php">Teacher</a>
            <a href="student-login">Student</a>
            
        </div>
    </div> 

       <div class="registration">
        <form  action = "Admin Login.php" method = "POST">
        <h1>Admin Login Form</h1>
        <label for="id"><b>ID</b></label>
        <input type="text" placeholder="Enter ID" name="id" class="i"  required>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw"  required>
        <button type="submit"  name ="login" class="registerbtn"><b>Login Now</b></button>
        
</form>

        </div>
</body>
</html> 
<?php      
    include('connection.php'); 
    if(isset($_POST['login'])){
    $id = $_POST['id'];  
     
    $pass = $_POST['psw'];  
      
      $sql = " SELECT * FROM admin WHERE ID='$id' AND Password='$pass' ";
     
      $result = mysqli_query($con, $sql);

      if (mysqli_num_rows($result) > 0){
        ?>
        <script> alert("Login Successfully");</script>;
       
       <script>window.location.assign("Admin.php");</script>;
        
        <?php
      }
      else{
        ?><script> alert("Something Went Wrong Please Try Again");</script>;
       <?php
      }
    }
      
      mysqli_close($con);

   
?>     
   
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="Admin Login.css">
    <title>Add Teacher</title>
    
</head>
<body>

    <div class="nevbar">
        <div class="menubar">
            <a href="Home Page.php">Home</a>
            <a href="#" class="log">Add Teacher</a>
            <a href="Add Student.php">Add Student</a>
            <a href="View Teacher.php">View Teacher</a>
            <a href="View Student.php">View Student</a>
            <a href="View Research.php">View Research Paper</a>
            
        </div>
    </div> 

    <div class="registration">
        <form  action = "Add Teacher.php" method = "POST">
        <h1>Add Teacher</h1>
        <label for="id"><b>Teacher ID</b></label>
        <input type="text" placeholder="Enter ID" name="id"  required>
        <label for="name"><b>Teacher Name</b></label>
        <input type="text" placeholder="Enter Name" name="name"  required>
        <label for="contact"><b>Contact Number</b></label>
        <input type="text" placeholder="Enter Contact Number" name="contact"  required>
        <button type="submit" name ="Add" class="registerbtn"><b>Add Teacher</b></button>
        
        </form>
        

    </div>
</body>
</html>
<?php
include('connection.php'); 
if(isset($_POST['Add'])){
    $id = $_POST['id'];  
    $name = $_POST['name']; 
    $contact = $_POST['contact'];   
    
      
      

    $sql = " INSERT INTO addteacher(ID, Name, Contact) VALUES('$id','$name','$contact') ";
     
      $result = mysqli_query($con, $sql);
      if ($result){
        
       ?>
       <script type="text/javascript">
        alert("Successfully Teacher Added");
       </script>
        
       <?php 
      }
      
    }
      
      mysqli_close($con);

     
?>     
   
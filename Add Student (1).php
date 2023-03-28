<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="Admin Login.css">
    <title>Add Student</title>
    
</head>
<body>

    <div class="nevbar">
        <div class="menubar">
            <a href="Home Page.php">Home</a>
            <a href="Add Teacher.php" >Add Teacher</a>
            <a href="#" class="log">Add Student</a>
            <a href="View Teacher.php">View Teacher</a>
            <a href="View Student.php">View Student</a>
            <a href="View Research.php">View Research Paper</a>
            
        </div>
    </div> 

    <div class="registration">
        <form  action = "Add Student.php" method = "POST">
        <h1>Add Student</h1>
        <label for="id"><b>Student ID</b></label>
        <input type="text" placeholder="Enter ID" name="id"  required>
        <label for="name"><b>Student Name</b></label>
        <input type="text" placeholder="Enter Name" name="name"  required>
        <label for="batch"><b>Batch</b></label>
        <input type="text" placeholder="Enter Batch" name="batch"  required>
        <label for="contact"><b>Contact Number</b></label>
        <input type="text" placeholder="Enter Contact Number" name="contact"  required>
        <button type="submit" name ="Add" class="registerbtn"><b>Add Student</b></button>
        
        </form>
        

    </div>
</body>
</html>
<?php
include('connection.php'); 
if(isset($_POST['Add'])){
    $id = $_POST['id'];  
    $name = $_POST['name']; 
    $batch = $_POST['batch']; 
    $contact = $_POST['contact']; 

    
      
      

    $sql = "  INSERT INTO addstudent(ID, Name, Batch, Contact) VALUES  ('$id','$name','$batch','$contact') ";
     
      $result = mysqli_query($con, $sql);
      if ($result){
        
       ?>
       <script type="text/javascript">
        alert("Successfully Student Added");
       </script>
        
       <?php 
      }
      
    }
      
      mysqli_close($con);

     
?>     
   
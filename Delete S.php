<?php
include('connection.php'); 

   
    $id = $_GET['id'];  
    
      
      

    $sql = " DELETE FROM addstudent  WHERE ID='$id' ";
     
      $result = mysqli_query($con, $sql);
      if ($result){
        ?>
      
       <script type="text/javascript">
        alert("Student Info Deleted Successfully");
        window.location.assign("View Student.php");
       </script>
        <?php
      
      }
      mysqli_close($con);
      ?>
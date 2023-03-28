<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style media="screen">

div{
        border: ;
        width: 500px;
        padding: 60px;
        margin-left: 400px;
        margin-top: 00px;
        background-color: bisque;
      }
      #teacher_id,#teacher_name,#student_id,#student_name,#batch,#file{
        width: 300px;
        padding: 5px;
        margin-top: 5px;
      }
      label{
        font-weight: bold;
        font-size: 16px;
      }
      form{
        margin-left: 30px;
      }
      #submit{
        margin-left: 0px;
        width: 300px;
        padding: 3px;
        font-size: 18px;
        font-weight: bold;
        background-color: black;
        color: white;
        border-radius: 20px;
        border: ;
      }

      nav{
    background-color:black;
    height:80% ;
    position:;
    width:100%;
}
nav ul li{
    display: inline-block;
    line-height:50px;
    margin: 5px;
} 
nav ul li a{
    color: white;
}
a{
    padding: 20px;
}
a:hover{
    background:blueviolet;
}
a:active{
    background:brown;
}
a.te{
    background-color: gray;
}
h2{
  text-align: center;}
  #submit:hover{
    background-color: brown;
    transition: .5s;}
    *{
    padding: 0;
    margin: 0;
    text-decoration:none;
    list-style:none;
    box-sizing: border-box;
}
    
    </style>
</head>
<body>
    <nav>
        <label class="logo"></label>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="teacherhome.php" >Teacher</a></li>
            <li><a href="#" class="te" >Add Resurch Paper</a></li>
            <li><a href="#">View Resurch Paper</a></li>
        </ul>
    </nav>
    <div>
        <h2>Add-Resurchpaper</h2><br>
        <form class="" action="AddResurch.php" method="post">
        <label for="">Teacher ID</label><br>
        <input id="teacher_id" type="text" name="teacher_id" value="" placeholder="Enter Your id" required><br><br>
        <label for="">Teacher Name</label><br>
        <input id="teacher_name" type="text" name="teacher_name" value="" placeholder="Enter Your Name" required>
        <br><br>
        <label for="">Student ID</label><br>
        <input id="student_id" type="text" name="student_id" value="" placeholder="Enter Student id" required><br><br>
        <label for="">Student Name</label><br>
        <input id="student_name" type="text" name="student_name" value="" placeholder="Enter Student Name" required>
        <br><br>
                                            
                                                                                <label>Batch</label><br>
                                                                                <input id="batch" type="text" name="batch" value="" placeholder="Enter Student Batch" required>
        <br>
                                                                        
                                                                                                            <input id="file" name="file" type="file" value="file">
                                                                                                            <input id="submit" type="submit" name="submit" value="Submit"><br>
                                                                                                            <?php
                                                                                                            $host="localhost";
                                                                                                            $user="root";
                                                                                                            $pass="";
                                                                                                            $db="z_new_database";
                                                                                                        
                                                                                                            $conn=mysqli_connect($host,$user,$pass,$db);

                                                                                                        if (isset($_POST['submit'])) {
    
      $teacher_id=$_POST['teacher_id'];
      $teacher_name=$_POST['teacher_name'];
      $student_id=$_POST['student_id'];
      $student_name=$_POST['student_name'];
      $batch=$_POST['batch'];
      $file=$_POST['file'];
      $sql="INSERT INTO addresurch(teacher_id,teacher_name,student_id,student_name,batch,resurch_paper)
       values('$teacher_id','$teacher_name','$student_id','$student_name','$batch','$file')";
       $query=mysqli_query($conn,$sql);

                                                                                                        }
       ?>
            
        </form>
        </div>
</body>
</html>
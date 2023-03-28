<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Teacher Registration Form</title>
    <link rel="icon" href="images/1.png" type="image/gif/png">
    <style media="screen">

      div{
        border: ;
        width: 500px;
        padding: 70px;
        margin-left: 400px;
        margin-top: 40px;
        background-color: bisque;
      }
      #id,#name,#password{
        width: 300px;
        padding: 10px;
        margin-top: 5px;
      }
      label{
        font-weight: bold;
        font-size: 18px;
      }
      form{
        margin-left: 30px;
      }
      #submit{
        margin-left: 0px;
        width: 300px;
        padding: 6px;
        font-size: 18px;
        font-weight: bold;
        background-color: black;
        color: white;
        border-radius: 20px;
        border: ;
      }

      nav{
    background-color:black;
    height: 80%;
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
h1{
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
  <label class="logo"></label>
  <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Admin</a></li>
            <li><a href="#" class="te">Teacher</a></li>
            <li><a href="#">Student</a></li>
        </ul>
    </nav>
    <div>
    <h1>Registration Form</h1><br>
      <form class="" action="teacher reg form.php" method="post">
        <label for="">Teacher ID</label><br>
        <input id="id" type="text" name="id" value="" placeholder="Enter Your id" required><br><br>
        <label for="">Teacher Name</label><br>
        <input id="name" type="text" name="name" value="" placeholder="Enter Your Name" required>
        <br>
        <br>
        
        <label for="">Password</label><br>
        <input id="password" type="password" name="password" value="" placeholder="Set a Password" required><br><br>
        <input id="submit" type="submit" name="submit" value="Submit"><br>
      </form>
    </div>
    <?php
    $host="localhost";
    $user="root";
    $pass="";
    $db="z_new_database";

    $conn=mysqli_connect($host,$user,$pass,$db);

    if (isset($_POST['submit'])) {
    
      $id=$_POST['id'];
      $name=$_POST['name'];

      $password=$_POST['password'];

      $sql="INSERT INTO tregister(ID,Name,Password)
       values('$id','$name','$password')";
       $query=mysqli_query($conn,$sql);
       header("Location: login teacher.php");
       die;
       if ($query) {
         ?>
            <script type="text/javascript">
              alert('Successfully Registered');

            </script>
         <?php
         // code...
       }
    }

     ?>

  </body>
</html>

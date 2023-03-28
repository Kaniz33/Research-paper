<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student_login</title>
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
nav a:hover{
    background:blueviolet;
}
nav a:active{
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
    <nav>
        <label class="logo"></label>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Admin</a></li>
            <li><a href="#">Teacher</a></li>
            <li><a href="#" class="te">Student</a></li>
        </ul>
    </nav>
    <div>
    <h1>Student Login Form</h1><br>
      <form class="" action="student login.php" method="post">
        <label for="">Student ID</label><br>
        <input id="id" type="text" name="id" value="" placeholder="Enter Your id" required><br><br>
        
        <label for="">Password</label><br>
        <input id="password" type="password" name="password" value="" placeholder="Set a Password" required><br><br>
        <input id="submit" type="submit" name="submit" value="Submit"><br><br>
        Not a member?<a href="student reg form.php">Register Now.</a>
      </form>
    </div>
        <?php
        $host="localhost";
        $user="root";
        $pass="";
        $db="z_new_database";
    
        $conn=mysqli_connect($host,$user,$pass,$db);

        if (isset($_POST['id']) && isset($_POST['password'])){
            $id=$_POST['id'];
            $password=$_POST['password'];

            if(!empty($id) && !empty($password)){
                $sql="SELECT * FROM sregister WHERE id='$id' and password='$password'";
                $sql_query=mysqli_query($conn,$sql);
                header("Location: studenthome.php");
       die;

                $mysqli_num_rows = mysqli_num_rows($sql_query);

                if($mysqli_num_rows){
                    echo'Login Successful.';
                }else{
                    echo'Invalid';
                }
            }else{
                echo'Fill up all these field';
            }
        }
        ?>                       
    

    
    
</body>
</html>
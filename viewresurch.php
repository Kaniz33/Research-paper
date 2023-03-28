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
        width: 1366px;
        padding: 5px;
        margin-left: 00px;
        margin-top: px;
        background-color: bisque;
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
  *{
    padding: 0;
    margin: 0;
    text-decoration:none;
    list-style:none;
    box-sizing: border-box;
}
table {
border: 1px;
width: 100%;
color: pink;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: pink;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}

    </style>
</head>
<body>
<nav>
        <label class="logo"></label>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="teacherhome.php" class="">Teacher</a></li>
            <li><a href="AddResurch.php">Add Resurch Paper</a></li>
            <li><a href="#" class="te">View Resurch Paper</a></li>
        </ul>
    </nav>
    <div class="center"><h1>View Resurch Paper</h1></div>
    <?php
    $host="localhost";
    $user="root";
    $pass="";
    $db="z_new_database";

    $conn=mysqli_connect($host,$user,$pass,$db);
    ?>
    <table>
    <th>Teacher Id</th>
    <th>Teacher Name</th>
    <th>Student Id</th>
    <th>Student Name</th>
    <th>Batch</th>
    <th>Resurch-File</th>
    <th>Date</th>
    <th>Download</th>
    <?php
    $sql="SELECT * FROM addresurch";
    $query=mysqli_query($conn,$sql);
    while($info=mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $info['teacher_id'];?></td>
            <td><?php echo $info['teacher_name'];?></td>
            <td><?php echo $info['student_id'];?></td>
            <td><?php echo $info['student_name'];?></td>
            <td><?php echo $info['batch'];?></td>
            <td><?php echo $info['resurch_paper'];?></td>
            <td><?php echo $info['date'];?></td>
            <td><a href="download.php">Download</td>
        </tr>
        <?php
    }
    ?>
    </table>

       
</body>
</html>
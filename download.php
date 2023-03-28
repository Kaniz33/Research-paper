<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Display PDF</title>
    <style media="screen">
      embed{
        border: 2px solid black;
        margin-top: 30px;
      }
      .div1{
        margin-left: 170px;
      }
    </style>
  </head>
  <body>
    <div class="div1">
      <?php

$host="localhost";
$user="root";
$pass="";
$db="z_new_database";

$conn=mysqli_connect($host,$user,$pass,$db);


      $sql="SELECT resurch_paper from addresurch";

      $query=mysqli_query($conn,$sql);
      while ($info=mysqli_fetch_array($query)) {
        ?>
      <embed type="application/pdf" src="resurch_paper/<?php echo $info['resurch_paper'] ; ?>" width="900" height="500">
    <?php
      }

      ?>

    </div>

  </body>
</html>

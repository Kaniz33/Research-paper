<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav>
        <label class="logo"></label>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Admin</a></li>
            <li><a href="#" class="te">Teacher</a></li>
            <li><a href="#">Student</a></li>
        </ul>
    </nav>
    <div class="center">
        <?php
        if (isset($_POST["submit"])) {
           $teacher_id = $_POST["teacher_id"];
           $teacher_name = $_POST["teacher_name"];
           $teacher_password = $_POST["teacher_password"];
           $passwordRepeat = $_POST["repeat_password"];
           
           $passwordHash = password_hash($teacher_password, PASSWORD_DEFAULT);

           $errors = array();
           
           if (empty($teacher_id) OR empty($teacher_name) OR empty($teacher_password) OR empty($passwordRepeat)) {
            array_push($errors,"All fields are required");
           }
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email is not valid");
           }
           if (strlen($password)<8) {
            array_push($errors,"Password must be at least 8 charactes long");
           }
           if ($teacher_password!==$passwordRepeat) {
            array_push($errors,"Password does not match");
           }
           require_once "database.php";
           $sql = "SELECT * FROM users WHERE email = '$email'";
           $result = mysqli_query($conn, $sql);
           $rowCount = mysqli_num_rows($result);
           if ($rowCount>0) {
            array_push($errors,"Email already exists!");
           }
           if (count($errors)>0) {
            foreach ($errors as  $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
           }else{
            
            $sql = "INSERT INTO teacher (teacher_id, teacher_name, teacher_password) VALUES ( ?, ?, ? )";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"sss",$fullName, $email, $passwordHash);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>You are registered successfully.</div>";
            }else{
                die("Something went wrong");
            }
           }
          

        }
        ?>
        <h1>Registration Form</h1>
        <form action="registration.php" method="post">
        <div class="txt_field">
            <input type="text" required name="teacher_id" placeholder="">
            
            <label>Teacher ID</label>
                        </div>
                        <div class="txt_field">
                            <input type="text" required name="teacher_name"  placeholder="" >
                           
                            <label>Name</label>
                                        </div>
                                        <div class="txt_field">
                                            <input type="password" required name="teacher_password" placeholder="">
                                                                                    <label>Password</label>
                                                        </div>
                                                        <div class="txt_field">
                                            <input type="password" required name="repeat_password" placeholder="">
                                                                                    <label>RepeatPassword</label>
                                                        </div>
        
                                                        <input type="submit" value="Sign-in">
        
        </form>
        
    </div>
</body>
</html>
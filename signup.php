<?php
session_start();  

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
       

        if(!empty($username) && !empty($email) && !empty($password) && !is_numeric($username))
        {
            $user_id = random_num(5);
            $query = "insert into users (user_id, username, email, password) values('$user_id', '$username','$email','$password')";
            
            mysqli_query($con, $query);
            header("Location: login.php");
        }else
        {
            echo "Please enter valid information!";
        }


    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="style.css">
    <title>Signup</title>
</head>
<style media="screen">
    label{
        display: block;
    }
    </style>
<body>

<section>
<div class= "center">
<form method="post" action="" name="signup-form">
<h1>Signup</h1>

<label>Username</label>
<input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
<br>

<label for="">Email</label>
        <input type="email" name="email" id="email" required>


<label>Password</label>
<input type="password" name="password" required />



<button type="submit" name="signup" value="signup">Signup</button>
<p>Already have an account? <a href="login.php">login here</a></p>
</form>
</div>

</section>

<script src="script.js"></script>
</body>
</html>
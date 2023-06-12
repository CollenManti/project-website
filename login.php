<?php
session_start();  

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{

    $username = $_POST['username'];
    $password = $_POST['password'];
   

    if(!empty($username) && !empty($password) && !is_numeric($username))
    {
       
        $query = "select * from users where username = '$username' limit 1";

        
        $result = mysqli_query($con, $query);
        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            if ($user_data['password'] === $password)
            {
                    $_SESSION['user_id'] = $user_data['user_id'];
                header("Location: Checkout.php");
                die;
            }
        }
        }
        echo "Please enter valid information!";
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
    <title>Login</title>
</head>
<body>

<div class= "center">
<H1>Login</H1>
<form method="post" >

<div class="text_label">
<input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
    <span></span>
<label>Username</label>

</div>

<div class="text_label">
<input type="password"  name="password" required />
    <span></span>
<label>Password</label>

</div>

<button type="submit" name="login" value="login">Log In</button>
<p>Do not have an account? <a href="signup.php">Register here</a></p>
</form>
</div>

<script src="script.js"></script>
</body>
</html>
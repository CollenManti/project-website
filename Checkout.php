<?php
session_start();
    
    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);
 
    require 'connection.php';

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $province = $_POST["province"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $code = $_POST["code"];
    $comment = $_POST["comment"];

   if($query = "INSERT INTO check_data VALUES('','$email','$province','$name','','','$address','$city','$code','','$comment')"){

    mysqli_query($con,$query);
}    else{

    echo "Data not inserted successfully";
    
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
    <title>Website</title>
</head>
<style media="screen">
    label{
        display: block;
    }
    </style>
<body>
<div class= "center">
<h1>Your Billing Address <?php echo $user_data['username']; ?></h1>

    
    <br>
    
    <form class="" action="" method="post" autocomplete="off">
   
    <label for="">Name</label>
        <input type="text" name="name" value="" required>
   

        <label for="">Email</label>
        <input type="email" name="email" id="email" required>

        <label for="">Province</label>
        <select class="" name="province"  required>
            <option value="" selected hidden>Select Province</option>
            <option value="Eastern Cape">Eastern Cape</option>\
            <option value="Free State">Free State</option>
            <option value="Gauteng">Gauteng</option>
            <option value="KwaZulu-Natal">KwaZulu-Natal</option>
            <option value="Limpopo">Limpopo</option>
            <option value="Mpumalanga">Mpumalanga</option>
            <option value="Northern Cape">Northern Cape</option>
            <option value="North West">North West</option>
            <option value="Western Cape">Western Cape</option>
        </select>
        <label for="">Address</label>
        <input type="text" name="address"  required>
        <label for="">City</label>
        <select class="" name="city"  required>
            <option value="" selected hidden>Select City</option>
            <option value="Pretoria">Pretoria</option>
            <option value="Johannesburg">Johannesburg</option>
            <option value="Durban">Durban</option>
            <option value="Bhisho">Bhisho</option>
            <option value="East London">East London</option>
            <option value="Mbombela">Mbombela</option>
            <option value="Kimberly">Kimberly</option>
            <option value="Stellenbosch">Stellenbosch</option>
            <option value="Polokwane">Polokwane</option>
        </select>
        <label for="">Postal Code</label>
        <input type="text" name="code" value=""  required>

        
        <label for="">Instructions</label>
        <input type="text" name="comment" >
        <br>
        <br>
        <button type="submit" name="submit" >Submit</</button>
        <button type="submit" ><a href="payment.php">Proceed to Payment</a></button>
    
    </form>
</div>
</body>
</html>
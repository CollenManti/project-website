<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcutta Website</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section id = "header"><a href="#"><img src="img/logo.png" class="logo" alt=""></a>

    <div>
        <ul id="navibar">
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="shop.html">Shop</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li id="bag"><a href="cart.html"><i class="far fa-shopping-bag"></i></a></li>
            <li><a href="login.php"><i class="fal fa-user-circle"></i></a></li>
            <a href="#" id="close"><i class="far fa-times"></i></a>
        </ul>
    
    
    </div>
    <div id="mobile">
      <a href="cart.html"><i class="far fa-shopping-bag"></i></a>
      <i id="bar" class="fas fa-outdent"></i>

    </div>




</section>
<section id="hero">
<h2>Welcome to the home
    of </h2>

<h1><img src="img/write.jpg" loading="lazy"></h1><br>
<button  id="Shop"><a href="shop.html">Shop Now</a></button>
</section>
<section id ="feature" class="section-p1">

<div class="feat-box">
<img src="img/feat/th.jfif" alt="">
<h6>Free Delivery</h6>

</div>
<div class="feat-box">
    <img src="img/feat/OL.jfif" alt="">
    <h6>Online Orders</h6>
    
    </div>
    <div class="feat-box">
        <img src="img/feat/TFS.jfif" alt="">
        <h6>Support line</h6>
        
        </div>
        <div class="feat-box">
            <img src="img/feat/Save.jfif" alt="">
            <h6>Save Money</h6>
            
            </div>
           


</section>
<section id="Product" class="section-p1" >
<h2>Featured Products</h2>
<p>Calcutta Special Sauces and Spice</p>
</section>
<section id="Product" class="section-p1" >
<div class="Product-Container">
  <div class="Prod" >
    <img src="img/products/chiliB.jpg" onclick="window.location.href='productd.html'" alt="">
    <div class="description">
      <span>Calcutta Spice</span>
      <h5>Chili beef Spice </h5>
      <div class="rate">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        
      </div>
    <h4>R89.00</h4>
    </div>
    <button onclick="addToCart('Chili beef Spice', 'img/products/chiliB.jpg', 89.00)"><i class="fal fa-shopping-bag" ></i></button>
</div>
<div class="Prod">
  <img src="img/products/ChBBQ.jpg"  onclick="window.location.href='productd1.html'" alt="">
  <div class="description">
    <span>Calcutta Spice</span>
    <h5>Chicken BBQ </h5>
    <div class="rate">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
    </div>
  <h4>R89.00</h4>
  </div>
  <button onclick="addToCart('ChiCKEN BBQ Spice', 'img/products/ChBBQ.jpg', 89.00)"><i class="fal fa-shopping-bag" ></i></button>

</div>
<div class="Prod">
  <img src="img/products/p1.jpg"  onclick="" alt="">
  <div class="description">
    <span>Calcutta Spice</span>
    <h5>Portugues Sauce </h5>
    <div class="rate">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
     
    </div>
  <h4>R69.00</h4>
  </div>
  <button onclick="addToCart('Portugues Sauce', 'img/products/p1.jpg', 69.00)"><i class="fal fa-shopping-bag" ></i></button>

</div>

</div>


</section>

<footer class="section-p1">

<div class="col">
<img src="img/logo.png" alt="">
<h4>Contact</h4>
<p><strong>Address:</strong>Van Riebeek Road, EdenVale</p>
<p><strong>Phone:</strong>011 334 7732/ 011 334 8054</p>
<p><strong>Trading Hours:</strong>08:00am - 17:00pm, Mon - Sat</p>

</div>

<div class="CR">
  <p>Copyright 2023, Spiral x Calcutta website</p>
</div>

</footer>
<script src="script.js"></script>
<style>
  
</style>

</body>
</html>
const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navibar');

if(bar){
    bar.addEventListener('click', ()=> {nav.classList.add('active')})
}
if(close){
    close.addEventListener('click', ()=> {nav.classList.remove('active')})
};

//On the click of the cart icon or button the product will be added to the cart
//and can remove product once inserted


function addToCart(productName, productImage, productPrice) {
  var cartItem = {
    name: productName,
    image: productImage,
    price: productPrice
  };

  // Save the cart item to local storage
  var cart = localStorage.getItem('cart');
  if (cart) {
    cart = JSON.parse(cart);
    cart.push(cartItem);
  } else {
    cart = [cartItem];
  }
  localStorage.setItem('cart', JSON.stringify(cart));

  // Show a confirmation message
  alert('Product added to cart!');
}



var MainImg = document.getElementById("MainImg")
var simg = document.getElementsByClassName("small-img")
simg[0].onclick = function(){
    MainImg.src = simg[0].src;
}
simg[1].onclick = function(){
    MainImg.src = simg[1].src;
}
//Remove added items fro cart
function removeFromCart(index) {
  var cart = localStorage.getItem('cart');
  if (cart) {
    cart = JSON.parse(cart);
    cart.splice(index, 1);
    localStorage.setItem('cart', JSON.stringify(cart));
  }
  // Reload the page to reflect the updated cart
  location.reload();
}
var cart = localStorage.getItem('cart');
if (cart) {
  cart = JSON.parse(cart);
  var cartItemsDiv = document.getElementById('cartItems');
  
  if (cart.length === 0) {
    cartItemsDiv.innerHTML = '<p>Your cart is empty.</p>';
  } else {
    for (var i = 0; i < cart.length; i++) {
      var item = cart[i];
      var itemDiv = document.createElement('div');
      itemDiv.innerHTML = `
        <img src="${item.image}" alt="${item.name}">
        <h2>${item.name}</h2>
        <p>R${item.price}</p>
        <button onclick="removeFromCart(${i})">Remove</button>
      `;
      cartItemsDiv.appendChild(itemDiv);
    }
  }
} else {
  document.getElementById('cartItems').innerHTML = '<p>Your cart is empty.</p>';
}
<!DOCTYPE html>
<html>

<body>
<link rel="stylesheet" href="slider.css">
  <?php
  include("header.html");
  ?>

<div style="padding-left:20px">



</div>

<div class="slideshow-container">
  <div class="mySlides">
      <img src="img-1.jpg" alt="" width="100%">
  </div>
  <div class="mySlides">
      <img src="img-3.jpg" alt="" width="100%">
  </div>

</div>


<script>
  var slideIndex = 1;
  showSlides(slideIndex);
  
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }
  
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
  
  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace("active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
  }
  </script>


</div>
<br>
</div>
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
</div>

</div>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style.css">


<div class="section">
 <div class ="box">
  <a href=blackhoodie.php><img src="vintageblue.jpg" alt="" width="300" height="400">
     <div class="text">
         <p>Vintage Hoodie</p>
         <p>89.99$ </p>
     </div>
 </div>
 <div class ="box">
  <a href=bluehoodie.php> <img src="img06.jpg" alt="" width="300" height="400">
     <div class="text">
         <p>Deckra Men Hoodie</p>
         <p>99.99$</p>
     </div>
 </div>
 <div class ="box">
  <a href=casualblack.php> <img src="underarmour.jpg" alt="" width="300" height="400">
  <div class="text">
      <p>Under Armour  Hoodie</p>
      <p>49.99$</p>
     </div>
 </div>
 <div class ="box">
  <a href=starwars.php> <img src="img04.jpg" alt="" width="300" height="400">
    <div class="text">
      <p>StarWars x Christmas</p>
      <p>39.99$</p>
     </div>
 </div>
 <div class ="box">
  <a href=whitehoodie.html><img src="underarmourblue.jpg" alt="" width="300" height="400">
  <div class="text">
      <p>Blue UA Hoodie</p>
      <p>50.00$</p>
     </div>
 </div>
 <div class ="box" >
  <a href=santa.html><img src="superdryjacket.jpg" alt="" width="300" height="400">
  <div class="text">
      <p>Superdry jacket </p>
      <p>99.99$</p>
     </div>

    </div>
    
 <div class ="box">

  <a href=polo.html><img src="img10.jpg" alt="" width="300" height="400">
  <div class="text">
      <p>White  shirt </p>
      <p>15.00$</p>
     </div>
 </div>
 <div class ="box">
  <a href=chshirt.html> <img src="img11.jpg" alt="" width="300" height="400">
  <div class="text">
      <p>Christmas Shirt for men</p>
      <p>15.00$</p>
     </div>
 </div>
 <div class ="box">
  <a href=sweatshirt.html><img src="img12.jpg" alt="" width="300" height="400">
  <div class="text">
      <p>White sweatshirt for women</p>
      <p>15.00$</p>
     </div>
 </div>
 <div class ="box">
  <a href=bluejacket.html><img src="img13.jpg" alt="" width="300" height="400">
  <div class="text">
      <p>Blue jacket for women</p>
      <p>64.99$</p>
     </div>
 </div>
 <div class ="box">
  <a href=jacket.html><img src="img14.jpg" alt="" width="300" height="400">
  <div class="text">
      <p>Jacket for women</p>
      <p>70.00$</p>
     </div>
 </div>
 <div class ="box">
  <a href=fashion.html><img src="img15.jpg" alt="" width="300" height="400">
  <div class="text">
      <p>Fashion jacket for women</p>
      <p>89.99$</p>
     </div>
 </div>
 <div class ="box">
  <a href=nikelow.html><img src="img16.jpg" alt="" width="300" height="400">
  <div class="text">
      <p>Nike Air Force 1 Low</p>
      <p>140.00$</p>
     </div>
 </div>
 <div class ="box">
  <a href=nikeaf1.html><img src="img17.jpg" alt="" width="300" height="400">
  <div class="text">
      <p>Nike AF1 x Valentine Day</p>
      <p>140$</p>
     </div>
 </div>
 <div class ="box">
  <a href=airjordan.html><img src="img17.png" alt="" width="300" height="400">
  <div class="text">
      <p>Air Jordan 4 retro</p>
      <p>300$</p>
     </div>
 </div>
 <div class ="box">
  <a href=adidas.html><img src="img19.jpg" alt="" width="300" height="400">
  <div class="text">
      <p>adidas Originals Coast Star W</p>
      <p>70$</p>
     </div>
     
 </div>
 <div class ="box">
  <a href=vans.html> <img src="img20.jpg" alt="" width="300" height="400">
  <div class="text">
      <p>Vans Old Skool 'customized' </p>
      <p>99.99$</p>
     </div>
     
 </div>

 <div class ="box">
  <a href=timbs.html> <img src="img21.jpg" alt="" width="300" height="400">
  </a>
  <div class="text">
      <p>Men's Timberland </p>
      <p>129.95$</p>
     </div>
     
 </div>

</div>





<div class="footer2">
  <div class = "contact">
    <h1>Follow us on : Facebook  & Twitter & Instagram</h1>
  </div>
   <br>

   <div class="images">
      <a href="https://www.facebook.com/drin.mehmeti.79" target ="_blank">
        <img src="facebook1.png" alt="" width="100px"; height="100px">
      </a>
      <a href="https://www.twitter.com/GranitDemirii" target ="_blank">
        <img src="twitter1.png" alt="" width="90px"; height="90px">
      </a>
      <a href="https://www.instagram.com/granitdemiri" target ="_blank">
        <img src="instagram1.png" alt="" width="100px"; height="100px"> 
      </a>
     </div>
 </div>

 
</div>



</div>
</body>

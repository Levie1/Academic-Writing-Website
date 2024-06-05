<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>




<div class="slideshow-container">
<div class="mySlides fade">
  <img src="img/back1.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <img src="img/back2.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <img src="img/back3.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <img src="img/back4.jpg" style="width:100%">
</div>
</div>
<br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
  let slideIndex = 0;
  showSlides();
  
  function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 5000); 
  }
  </script>


</body>
</html> 
    
</body>
</html>
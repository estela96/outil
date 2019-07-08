<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides">
    <div class="numbertext">1 / 3</div>
    <img src="<?php echo base_url('assets/img/img1.jpg'); ?>" style="width:20%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 3</div>
    <img src="<?php echo base_url('assets/img/img2.jpg'); ?>" style="width:20%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 3</div>
    <img src="<?php echo base_url('assets/img/img3.jpg'); ?>" style="width:20%">
    <div class="text">Caption Three</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<div style="text-align: center">
  <ul>
    <li onclick="currentSlide(1)">Imagen 1</li>
    <li onclick="currentSlide(2)">Imagen 2</li>
    <li onclick="currentSlide(3)">Imagen 3</li>
  </ul>
</div>

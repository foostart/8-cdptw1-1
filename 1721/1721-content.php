<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1721">
	<div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <a href="#">
         <img src="image/1.jpg">
         <div  class="khung">
          <h1 ><strong class="khung1" >iphone 6s</strong></h1>
          <p class="khung1">The only thing that's changed is everything</p>
          <span class="btn btn-primary b1"><strong>Shop now</strong></span>
        </div>
      </a>
    </div>
    <div class="swiper-slide">
      <a href="#">
        <img src="image/3.jpg">
        <div  class="khung" style="    position: absolute;
    top: 18%;
    width: 70%;
    background-size: cover;
    font-size: 28px;">
          <h1 ><strong class="khung2">HW-400</strong></h1>
          <p class="khung2">Wireless Over Ear Headphones</p>
          <span class="btn btn-primary b1"><strong>Shop now</strong></span>
        </div>
      </a>
    </div>
    <div class="swiper-slide">
      <a href="#">
        <img src="image/2.jpg">
        <div  class="khung">
          <h1 ><strong  class="khung3">Reliable gadgets from leading manufacturers</strong></h1>
          <p  class="khung3">Available in just a few taps</p>
          <span class="btn btn-primary b1"><strong>Read more</strong></span>
        </div>
      </a>
    </div>
  </div>
  <!-- Add Pagination -->
  <div class="swiper-pagination"></div>
  <!-- Add Arrows -->
  <div class="swiper-button-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
  <div class="swiper-button-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
</div>
</div>
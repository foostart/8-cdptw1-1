<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1823">
    <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
             <a href="#">
                 <img class="img-responsive" src="http://<?php echo $url_path ?>/images/slide1_image.jpg" alt="Chania">
                <div class="caption slide">
                    <div class="title">
                        <h2><strong>iphone 6s</strong></h2>
                        <p>The only thing that's changed is everything</p>
                        <span class="btn btn-primary b1"><strong>Shop now</strong></span>
                    </div> 
                </div>
            </a>
        </div>
        <div class="swiper-slide"> 
            <a href="#">
                <img class="img-responsive" src="http://<?php echo $url_path ?>/images/slide2_image.jpg" alt="Chania">
                <div class="caption slide2">
                    <div class="title">
                        <h2><strong>HW-400</strong></h2>
                        <p>Wireless Over Ear Headphones</p>
                        <span class="btn btn-primary b1"><strong>Shop now</strong></span>
                    </div> 
                </div>
            </a></div>
            <div class="swiper-slide">
                <a href="#">
                    <img class="img-responsive" src="http://<?php echo $url_path ?>/images/slide3_image.jpg" alt="Flower">
                    <div class="caption slide3">
                        <div class="title">
                            <h2><strong>Reliable gadgets from leading manufacturers</strong></h2>
                            <p>Available in just a few taps</p>
                            <span class="btn btn-primary b1"><strong>Read more</strong></span>
                        </div> 
                    </div>
                </a>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
            <div class="swiper-button-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
            <div class="swiper-button-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
    </div>
</div>


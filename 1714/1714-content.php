<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1787">
    <div class="container">
        <div class="row item grid"> 
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <div class="sidebar_widget ">
                <h3 class="widget_header">Best sellers</h3>
                <ul class="list_products">
                    <li class="product">
                        <div class="product_img">  
                            <a href="#">
                                <img class="img-responsive" src="http://<?php echo $url_path ?>/image/twelve_south_bookarc_stand_for_macbook_2_medium.png" alt="Smart Cover for iPad mini 4">
                            </a>
                        </div>
                        <div class="product_info">
                            <div class="product_name">
                                <a href="#">Smart Cover for iPad mini 4</a>
                            </div>
                            <div class="product_price">
                                <span class="money" data-currency-usd="$12.00">$12.00</span>
                                <span class="money compare-at-price" data-currency-usd="$20.00">$20.00</span>
                            </div>
                        </div>
                    </li>
                    <li class="product">
                        <div class="product_img">  
                            <a href="#">
                                <img class="img-responsive" src="http://<?php echo $url_path ?>/image/iphone_6s_1_compact.png" alt="iPhone 6s">
                            </a>
                        </div>
                        <div class="product_info">
                            <div class="product_name">
                                <a href="#">iPhone 6s</a>
                            </div>
                            <div class="product_price">
                                <span class="money" data-currency-usd="$526.00">$526.00</span>
                                <span class="money compare-at-price" data-currency-usd="$528.00">$528.00</span>
                            </div>
                        </div>
                    </li>
                    <li class="product">
                        <div class="product_img">  
                            <a href="#">
                                <img class="img-responsive" src="http://<?php echo $url_path ?>/image/iphone_lightning_dock___gold_1_compact.png" alt="iPhone Gold">
                            </a>
                        </div>
                        <div class="product_info">
                            <div class="product_name">
                                <a href="#">iPhone Lightning Dock - Gold</a>
                            </div>
                            <div class="product_price">
                                <span class="money" data-currency-usd="$69.00">$69.00</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div> 
</div>
</div>



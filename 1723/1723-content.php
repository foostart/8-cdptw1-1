<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1825">
  <div class="content"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Billing</h3>
          </div>
          <div class="panel-body">
            <label>Invoice ID: 2016MM-ID</label>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <div class="panel-title">
              <p>Payment Details </p>
              <img  class="img-responsive" src="http://<?php echo $url_path ?>/images/accepted_c22e0.png" alt="">
            </div>
          </div>
          <div class="panel-body">
            <form action="#" method="POST">
              <div class="form-group">
                <label>CARD NUMBER</label>
                <div class="input-group">
                  <input type="text" class="form-control"  placeholder="Valid Card Number" required autofocus data-stripe="number" />
                  <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                </div>
              </div> 
              <div class="form-group">
                <label>EXPIRATION DATE</label>
                <div class="input-group">
                 <div class="col-xs-6 col-lg-6 pl-ziro">
                   <input type="text" class="col-md-6 form-control"  placeholder="MM" required data-stripe="exp_month" />
                 </div>
                 <div class="col-xs-6 col-lg-6 pl-ziro">
                  <input type="text" class="col-md-6 form-control"  placeholder="YYYY" required data-stripe="exp_year" />
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>CV CODE</label>
              <input type="password" class="form-control"  placeholder="CV" required data-stripe="cvc" />
            </div>
            <div class="form-group">
              <label>COUPON CODE</label>
              <input type="text" class="form-control" required data-stripe="couponCode"/>
            </div> 
            <div class="form-group">
             <button class="btn btn-success btn-lg btn-block" type="submit">
             Submit Payment</button>                          
           </div>      
         </form>
       </div>  
     </div>
   </div>
 </div>
</div>
</div>
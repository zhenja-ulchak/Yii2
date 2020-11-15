<?php
use yii\helpers\Url;
?>


<div class="probootstrap-loader"></div>
<?php foreach ($golovnas as $golovna): ?>
<header role="banner" class="probootstrap-header">
  <div class="container">
      <a href="index.html" class="probootstrap-logo"><?= $golovna->logo?><span>.</span></a>
      
      <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
      <div class="mobile-menu-overlay"></div>

      <nav role="navigation" class="probootstrap-nav hidden-xs">
        <ul class="probootstrap-main-nav">
          <li class="active"><a href="<?= Url::toRoute(['site/index'])?>">Головна</a></li>
          <li><a href="<?= Url::toRoute(['site/about'])?>">Про нас</a></li>
          <li><a href="<?= Url::toRoute(['site/contact'])?>">Cервис</a></li>
          
          
        </ul>
        <ul class="probootstrap-right-nav hidden-xs">
          <li><a href="#"><i class="icon-twitter"></i></a></li>
          <li><a href="#"><i class="icon-facebook2"></i></a></li>
          <li><a href="#"><i class="icon-instagram2"></i></a></li>
        </ul>
        <div class="extra-text visible-xs"> 
          <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
          <h5>Address</h5>
          <p>198 West 21th Street, Suite 721 New York NY 10016</p>
          <h5>Connect</h5>
          <ul class="social-buttons">
            <li><a href="#"><i class="icon-twitter"></i></a></li>
            <li><a href="#"><i class="icon-facebook2"></i></a></li>
            <li><a href="#"><i class="icon-instagram2"></i></a></li>
          </ul>
        </div>
      </nav>
  </div>
</header><section class="probootstrap-slider flexslider">
    <ul class="slides">
    
      <li style="background-image: url(img/slider_1.jpg);">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="slides-text probootstrap-animate">
                <h1> <?= $golovna->head?> </h1>
                <p><?= $golovna->head_text?></p>
              </div>
            </div>
          </div>
        </div>
      </li>
      <?php endforeach; ?> 
      
    </ul>
  </section>
 <section class="probootstrap-section">
      <?php foreach ($rests as $rest): ?>
          <div class="container">
             <div class="row">
               <div class="col-md-4">
                  <div class="service left-icon probootstrap-animate">
                       <div class="icon">
                          <i class="icon-laptop3"></i>
                        </div>
                        <div class="text">
                          <h3 class="heading"><?= $rest->name ?></h3>
                            <p><?= $rest->text ?> </p>
                            <p><a href="single-page.html"><?= $rest->category->title ?></a></p>
                        </div>
            
                    </div>
                      <?php endforeach; ?> 
                </div>
            </div>
      
    </div>
  </section>

 
  <!-- END section -->

  <div class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 probootstrap-animate" data-animate-effect="fadeInLeft">

          <div class="panel-group probootstrap-panel" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingOne">
                <h3 class="panel-title">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                    Business Strategy
                  </a>
                </h3>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>

                  
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingTwo">
                <h3 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Business Marketing
                  </a>
                </h3>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                  
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingThree">
                <h3 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Business Profit
                  </a>
                </h3>
              </div>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                  <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                </div>
              </div>
            </div>
          </div>
          <!-- END panel-group -->
        </div>
        <div class="col-md-6 probootstrap-animate" data-animate-effect="fadeInRight">

          <figure>
            <div class="probootstrap-video">
              <a href="https://vimeo.com/45830194" class="popup-vimeo probootstrap-video-play"><i class="icon-play3"></i></a>
              <img src="img/slider_2.jpg" alt="Free HTML5 Bootstrap Template by ProBootstrap.com" class="img-responsive img-border">
            </div>
            <figcaption>This is a caption. Far far away, behind the word mountains.</figcaption>
          </figure>

        </div>
      </div>
    </div>
  </div>
  <!-- END section -->
  
  <?php foreach ($golovnas as $golovna): ?>
  <div class="container">
    <div class="probootstrap-cta probootstrap-animate">
      <h2 class="mb20"><?= $golovna->content?></h2>
      <p><?= $golovna->content_text?></p>
      
    </div>
  </div>
  <?php endforeach; ?> 
  <!-- END section cta -->

  <section class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 section-heading probootstrap-animate">
          <h2>The Projects</h2>
        </div>
      </div>
      <?php foreach ($trusts as $trust): ?>
      <div class="row">
        <div class="col-md-4 probootstrap-animate">
          <div class="probootstrap-card">
            <div class="probootstrap-card-media">
              <a href="single-page.html"><img src="img/slider_1.jpg" class="img-responsive img-border" alt="Free HTML5 Template by ProBootstrap.com"></a>
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading mb0"><?= $trust->pserwiscart->text ?></h2>
              
              <p><?= $trust->title ?></p>
              
            </div>
          </div>
        </div>
        <?php endforeach; ?> 
      </div>
    </div>
  </section>
  <!-- END section -->
  <footer class="probootstrap-footer probootstrap-bg">
  <?php foreach ($golovnas as $golovna): ?>
  <div class="container">
    <div class="row mb60">
      <div class="col-md-3">
        <div class="probootstrap-footer-widget">
          <h4 class="heading"><?= $golovna->footer?></h4>
          <p><?= $golovna->footer_text?> </p>
          <p><a href="#">Read more...</a></p>
        </div> 
      </div>
      <div class="col-md-3">
        <div class="probootstrap-footer-widget probootstrap-link-wrap">
          <h4 class="heading">Quick Links</h4>
          <ul class="stack-link">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Testimonial</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3">
        <div class="probootstrap-footer-widget">
          <h4 class="heading">More Links</h4>
          <ul class="stack-link">
            <li><a href="#">Projects</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Terms</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Support Help</a></li>
          </ul>
        </div> 
      </div>
      <div class="col-md-3">
        <div class="probootstrap-footer-widget probootstrap-link-wrap">
          <h4 class="heading">Subscribe</h4>
          <p>Far far away behind the word mountains far from.</p>
          <form action="#">
            <div class="form-field">
              <input type="text" class="form-control" placeholder="Enter your email">
              <button class="btn btn-subscribe">Send</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="row copyright">
      <div class="col-md-6">
        
      </div>
      <div class="col-md-6">
        <div class="probootstrap-footer-widget right">
          <ul class="probootstrap-social">
            <li><a href="#"><i class="icon-twitter"></i></a></li>
            <li><a href="#"><i class="icon-facebook"></i></a></li>
            <li><a href="#"><i class="icon-instagram2"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <?php endforeach; ?> 
</footer>
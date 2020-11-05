<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="probootstrap-loader"></div>

<header role="banner" class="probootstrap-header">
  <div class="container">
      <a href="index.html" class="probootstrap-logo">Black<span>.</span></a>
      
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
</header>
<!-- END: header -->
<section class="probootstrap-slider flexslider">
  <ul class="slides">
    <li style="background-image: url(img/slider_1.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="slides-text probootstrap-animate">
              <h2>Less is more.</h2>
              <p><a href="https://probootstrap.com/" target="_blank" class="btn btn-primary">Get Started</a></p>
            </div>
          </div>
        </div>
      </div>
    </li>
    <li style="background-image: url(img/slider_2.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="slides-text probootstrap-animate">
              <h2>Black is elegant.</h2>
              <p><a href="https://probootstrap.com/" target="_blank" class="btn btn-primary">Get Started</a></p>
            </div>
          </div>
        </div>
      </div>
    </li>
    <li style="background-image: url(img/slider_3.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="slides-text probootstrap-animate">
              <h2>Whitespace is clever.</h2>
              <p><a href="https://probootstrap.com/" target="_blank" class="btn btn-primary">Get Started</a></p>
            </div>
          </div>
        </div>
      </div>
    </li>
  </ul>
</section>
<!-- END: slider  -->

<?= $content?>


<footer class="probootstrap-footer probootstrap-bg">
  <div class="container">
    <div class="row mb60">
      <div class="col-md-3">
        <div class="probootstrap-footer-widget">
          <h4 class="heading">About Black.</h4>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
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
        <div class="probootstrap-footer-widget">
          <p>&copy; 2017 <a href="https://probootstrap.com/">ProBootstrap:Black</a>. Designed by <a href="https://probootstrap.com/">ProBootstrap.com</a> <br> Demo Photos from <a href="https://unsplash.com/">Unsplash</a></p>
        </div>
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
</footer>

<div class="gototop js-top">
  <a href="#" class="js-gotop"><i class="icon-chevron-thin-up"></i></a>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
$seo_title = (isset($meta_title) && !empty($meta_title)) ? $meta_title : 'VOXINNOV | Custom Software & Web Development Company Cochin, Kerala';
$seo_desc  = (isset($meta_description) && !empty($meta_description)) ? $meta_description : 'VOXINNOV is a premier software development and digital solutions company founded in 2007. We craft bespoke web applications, mobile apps, enterprise software, and branding solutions.';
$seo_keys  = (isset($meta_keywords) && !empty($meta_keywords)) ? $meta_keywords : 'VOXINNOV, software development company Cochin, web development Kerala, custom software solutions, mobile app development Cochin, IT company Kakkanad, responsive web design';
$seo_url   = (isset($canonical_url) && !empty($canonical_url)) ? $canonical_url : (function_exists('current_url') ? current_url() : base_url());
?>
  <title><?= esc($seo_title) ?></title>
  <meta name="title" content="<?= esc($seo_title) ?>">
  <meta name="description" content="<?= esc($seo_desc) ?>">
  <meta name="keywords" content="<?= esc($seo_keys) ?>">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="<?= esc($seo_url) ?>">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= esc($seo_url) ?>">
  <meta property="og:title" content="<?= esc($seo_title) ?>">
  <meta property="og:description" content="<?= esc($seo_desc) ?>">
  <meta property="og:image" content="<?= base_url('assets/imgs/logo/favicon.png') ?>">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="<?= esc($seo_url) ?>">
  <meta property="twitter:title" content="<?= esc($seo_title) ?>">
  <meta property="twitter:description" content="<?= esc($seo_desc) ?>">
  <meta property="twitter:image" content="<?= base_url('assets/imgs/logo/favicon.png') ?>">

  <!-- Fav Icon -->
  <link rel="icon" type="image/x-icon" href="<?= base_url('assets/imgs/logo/favicon.png') ?>">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

  <!-- All CSS files -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/progressbar.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/meanmenu.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/master.css">
  <link rel="stylesheet" href="style.css">
</head>


<body class="dark">

  <!-- Cursor Animation -->
  <div class="cursor1"></div>
  <div class="cursor2"></div>


  <!-- Preloader -->
  <div class="preloader">
    <div class="loading">
      <div class="bar bar1"></div>
      <div class="bar bar2"></div>
      <div class="bar bar3"></div>
      <div class="bar bar4"></div>
      <div class="bar bar5"></div>
      <div class="bar bar6"></div>
      <div class="bar bar7"></div>
      <div class="bar bar8"></div>
    </div>
  </div>


   <!-- Scroll Smoother -->
  <div class="has-smooth" id="has_smooth"></div>


  <!-- Go Top Button -->
  <button id="scroll_top" class="scroll-top"><i class="fa-solid fa-arrow-up"></i></button>


  <!-- Header area start -->
  <header class="header__area-2">
    <div class="header__inner-2">
      <div class="header__logo-2">
        <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/imgs/logo/logo.png" alt="Site Logo" style="width: 100%;"></a>
      </div>
      <div class="header__nav-2">
        <ul class="main-menu menu-anim">
          <li class="has-megamenu"><a href="<?php echo base_url(); ?>service">WE OFFER</a>
          </li>
          <li><a href="<?php echo base_url(); ?>#our_works">PORTFOLIO</a>
          </li>
          <li><a href="<?php echo base_url(); ?>about">ABOUT </a>
            
          </li>
          <li><a href="<?php echo base_url(); ?>about/#our_team">team</a></li>
          <li><a href="<?php echo base_url(); ?>contact">CONTACT</a>
           
          </li>
        </ul>
      </div>
      <div class="header__nav-icon-2">
        <button class="menu-icon-2" id="open_offcanvas"><img src="<?php echo base_url();?>assets/imgs/icon/menu-white.png"
            alt="Menubar Icon"></button>
      </div>
    </div>
  </header>
  <!-- Header area end -->


  <!-- Offcanvas area start -->
  <div class="offcanvas__area">
    <div class="offcanvas__body">
      <div class="offcanvas__left">
        <div class="offcanvas__logo">
          <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url();?>assets/imgs/logo/logo.png" style="width: 100%;" alt="Offcanvas Logo"></a>
        </div>
        <div class="offcanvas__social">
          <h3 class="social-title">Follow Us</h3>
          <ul>
            <li><a href="https://www.instagram.com/voxinnov/">Instagram</a></li>
            <li><a href="https://www.facebook.com/voxinnov/">Facebook</a></li>
            <!--<li><a href="#">LinkedIn</a></li>
            <li><a href="#">YouTube</a></li>-->
          </ul>
        </div>
        <div class="offcanvas__links">
          <ul>
            <li><a href="<?php echo base_url(); ?>about">About</a></li>
            <li><a href="<?php echo base_url(); ?>contact">contact</a></li>
            <li><a href="<?php echo base_url(); ?>contact">Career</a></li>
           <!-- <li><a href="blog.html">blog</a></li>-->
          </ul>
        </div>
      </div>
      <div class="offcanvas__mid">
        <div class="offcanvas__menu-wrapper">
          <nav class="offcanvas__menu">
            <ul class="menu-anim">
              <li><a href="<?php echo base_url(); ?>service">WE OFFER</a>
                
              </li>
              <li>
                <a href="<?php echo base_url(); ?>#our_works">PORTFOLIO</a>
              
              </li>
              <li><a href="<?php echo base_url(); ?>about">ABOUT</a>
                
              </li>
             
              <li><a href="<?php echo base_url(); ?>contact">contact</a></li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="offcanvas__right">
        <div class="offcanvas__search">
          <form action="#">
            <input type="text" name="search" placeholder="Search keyword">
            <button><i class="fa-solid fa-magnifying-glass"></i></button>
          </form>
        </div>
        <div class="offcanvas__contact">
          <h3>Get in touch</h3>
          <ul>
            <li><a href="tel:08330001050">+(91) 833 - 000 - 1050</a></li>
            <li><a href="mailto:info@voxinnov.com">info@voxinnov.com</a></li>
            <li>#6G, BCG Tower, Seaport Airport Road,<br>
Kakkanad, Cochin 682037 . Opp CSEZ</li>
          </ul>
        </div>
        <img src="<?php echo base_url();?>assets/imgs/shape/11.png" alt="shape" class="shape-1">
        <img src="<?php echo base_url();?>assets/imgs/shape/12.png" alt="shape" class="shape-2">
      </div>
      <div class="offcanvas__close">
        <button type="button" id="close_offcanvas"><i class="fa-solid fa-xmark"></i></button>
      </div>
    </div>
  </div>
  <!-- Offcanvas area end -->
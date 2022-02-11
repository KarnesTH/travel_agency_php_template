<!DOCTYPE html>
<html lang="de">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
      
      <title><?= $sp_title ?></title>
      <!-- Loading third party fonts -->
      <link href="fonts/font-opensans.css" rel="stylesheet" type="text/css">
      <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
      <!-- Loading main css file -->
      <link rel="stylesheet" href="css/animate.min.css">
      <link rel="stylesheet" href="css/template_style.css">

      <!-- Seitenspezifisch Bootstrap core CSS -->
      <?php if (isset($sp_extra_css_1)) : ?>
        <link href="<?= $sp_extra_css_1 ?>" rel="stylesheet">
      <?php endif; ?>
      <?php if (isset($sp_extra_css_2)) : ?>
        <link href="<?= $sp_extra_css_2 ?>" rel="stylesheet">
      <?php endif; ?>
      
      <!--[if lt IE 9]>
      <script src="js/ie-support/html5.js"></script>
      <script src="js/ie-support/respond.js"></script>
      <![endif]-->

   </head>

   <body <?php if ($sp_action === 'main') echo 'class="slider-collapse"' ?>>
      
      <div id="site-content">
         
         <header class="site-header wow fadeInDown">
            <div class="container">
               <div class="header-content">
                  <div class="branding">
                     <img src="images/logo.png" alt="Company Name" class="logo">
                     <h1 class="site-title"><a href="index.php">Company Name</a></h1>
                     <small class="site-description">Tagline goes here</small>
                  </div>
                  
                  <nav class="main-navigation">
                     <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
                     <ul class="menu">
                        <li class="menu-item<?php if($sp_action === 'aboutus') echo ' current-menu-item'?>"><a href="index.php?action=aboutus">About us</a></li>
                        <li class="menu-item<?php if($sp_action === 'ouroffer') echo ' current-menu-item'?>"><a href="index.php?action=ouroffer">Our Offer</a></li>
                        <li class="menu-item<?php if($sp_action === 'customerprotection') echo ' current-menu-item'?>"><a href="index.php?action=customerprotection">Customer Protection</a></li>
                        <li class="menu-item<?php if($sp_action === 'contact') echo ' current-menu-item'?>"><a href="index.php?action=contact">Contact</a></li>
                     </ul>
                  </nav>
                  
                  <div class="social-links">
                     <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                     <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                     <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                     <a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
                  </div>
               </div>
            </div>
            <?php if ($sp_action !== 'main') : ?>
                <nav class="breadcrumbs">
                  <a href="index.php">Home</a> &rarr;
                  <span><?= $sp_name ?></span>
               </nav>
            <?php endif; ?>
         </header> <!-- .site-header -->
<?php
require_once('ClassLibraries/MainClass.php');
$mainPlug = new mainClass();

if(isset($_POST['submit']) && $_POST['submit'] == 'Send Your Message')
{
   if(!empty($_POST['name']) && !empty($_POST['mothers_name']) && !empty($_POST['message']))
   {
    $_SESSION['code'] = 'HDP'.mt_rand(10000000, 99999999);
    $result = $mainPlug->saveInput($_POST, $_SESSION['code']);
    print_r($result);
    die();
   }
    // if($result == "good")
    // {
    //   print_r($result);
    // }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form/style.css">
    <script type="text/javascript" src="form/main.js"></script>
    <title>Document</title>
</head>
<body>
<div class="nav">
    <input type="checkbox" id="nav-check">
    <div class="nav-header">
      <div class="nav-title">
        <a href=""><img src="images/hdplus-logo.jpg" alt=""></a>
      </div>
    </div>
    <div class="nav-btn">
      <label for="nav-check">
        <span></span>
        <span></span>
        <span></span>
      </label>
    </div>
    <div class="nav-links">
      <div class="hfe-search-icon-toggle">
				<!-- <input placeholder="" class="hfe-search-form__input" type="search" name="s" title="Search" value="" style="padding-right: 44px;"> -->
				<i class="fas fa-search" aria-hidden="true"></i>
			</div>
      <div class="elementor-widget-container">
        <div class="elementor-button-wrapper">
    <a href="#" class="elementor-button-link elementor-button elementor-size-sm" role="button">
          <span class="elementor-button-content-wrapper">
          <span class="elementor-button-icon elementor-align-icon-left">
      <i aria-hidden="true" class="fas fa-bars"></i>			</span>
          <span class="elementor-button-text"></span>
  </span>
        </a>
  </div>
      </div>
    </div>
</div>
  <form method="POST">
<section>
  <input type="text" placeholder="Your name" value="" name="name" required />
  <input type="text" placeholder="Mother's name" value="" name="mothers_name" reequired />
  <textarea name="message" value="" cols="40" rows="10" placeholder="Message to your mum" ></textarea>
  <input class="button" type="submit" name="submit" value="Send Your Message">
</section>    
</form>
<div class="footer">
 <div class="omg-wrapper">
  <a class="logo-a" href=""><img src="images/hdplus-logo.jpg" alt="" width="74px"></a>
 </div>
 <div class="icon-wrapper">
  <a class="icon-a" href=""><i class="fab fa-youtube"></i></a>
  <a class="icon-a" href=""><i class="fab fa-instagram"></i></a>
  <a class="icon-a" href=""><i class="fab fa-facebook-f"></i></a>
  <a class="icon-a" href=""><i class="fab fa-twitter"></i></a>
 </div>
 <div class="text-wrapper">
   <a class="text-a" href="">Subscribe</a>
   <a class="text-a" href="">Packages</a>
   <a class="text-a" href="">Product Info</a>
   <a class="text-a" href="">Help & Services</a>
   <a class="text-a" href="">Terms Of Delivery</a>
 </div>
 <div class="text-wrapper_b">
  <a class="text-b" href="">COMPANY</a>
  <a class="text-b" href="">CAREER</a>
  <a class="text-b" href="">PRESS</a>
  <a class="text-b" href="">IMPRINT</a>
  <a class="text-b" href="">PRIVACY</a>
  <a class="text-b" href="">TERMS & CONDITIONS</a>
</div>
  <div class="ses-wrapper"><a href="https://www.ses.com/">SES GROUP</a></div>
  <div class="c-rigth"><p class="p-footer">COPYRIGHT © 2020 ALL RIGHTS RESERVED</p></div>
</div>
</body>
</html>
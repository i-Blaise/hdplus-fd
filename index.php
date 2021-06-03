<?php
require_once('ClassLibraries/MainClass.php');
$mainPlug = new mainClass();

if(isset($_POST['submit']) && $_POST['submit'] == 'Wish Dad')
{
   if(!empty($_POST['fathers_name']) && !empty($_POST['your_name']))
   {
    $_SESSION['code'] = 'HDP'.mt_rand(10000000, 99999999);
    $result = $mainPlug->saveInput($_POST, $_SESSION['code']);
    // header('Location: http://hdplus-fd.sonzie.online/Certificate/');
    header('Location: http://localhost/hdplus-fd/certificate/');
    // print_r($result);
    // die();
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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Document</title>
</head>
<body>
    <div class="nav">
        <input type="checkbox" id="nav-check">
        <div class="nav-header">
          <div class="nav-title">
            <a href=""><img src="form/images/hdplus-logo.jpg" alt=""></a>
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
              <a href="#" class="elementor-button-link elementor-button elementor-size-sm disabled" role="button">
              <span class="elementor-button-content-wrapper">
              <span class="elementor-button-icon elementor-align-icon-left"><i aria-hidden="true" class="fas fa-bars"></i></span>
              <span class="elementor-button-text"></span>
              </span>
              </a>
            </div>
        </div>
        <div class="lg-hidden">
            <a href="https://www.hd-plus.com.gh/" class="">Home</a>
            <a href="https://www.hd-plus.com.gh/packages/" class="">Packages</a>
            <a href="https://www.hd-plus.com.gh/promotions/" class="">Promotions</a>
            <a href="https://www.hd-plus.com.gh/get-hd/" class="">Find A Dealer</a>
            <a href="https://www.hd-plus.com.gh/activate-hd/" class="">Activate HD+</a>
            <a href="https://www.hd-plus.com.gh/about-us/" class="">About Us</a>
            <a href="https://www.hd-plus.com.gh/faqs/" class="">FAQs</a> 
        </div>
        </div>
    </div>
    <div class="main-wrapper">
        <div class="left-col" style="background-image: url(form/images/daudad.jpg); background-size: cover;"></div>
        <div class="right-col">
            <img class="dad-img" src="form/images/Dad.png" alt="">
            <h4 style="text-align: center; line-height: 1.3;">Is your dad the best Dad<br>in the #FeeliFeeli universe? Prove it! </h4>
            <form id="dad-day" action="" method="post">
                <input type="text" id="your_name" name="your_name" placeholder="Enter your name">
                <input type="text" id="fathers_name" name="fathers_name" placeholder="Enter your father's name">
                <input type="submit" name="submit" value="Wish Dad">
            </form>
        </div>
    </div>
    <div class="footer">
        <div class="omg-wrapper">
         <a class="logo-a" href=""><img src="form/images/hdplus-logo.jpg" alt="" width="74px"></a>
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
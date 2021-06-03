<?php
require_once('../ClassLibraries/MainClass.php');
$mainPlug = new mainClass();


if(isset($_SESSION['code']) && !empty($_SESSION['code']))
{
  $result = $mainPlug->fetchInput($_SESSION['code']);
  session_destroy();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Document</title>
</head>
<style>
    /* @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Raleway:wght@300;400;500;600;700;900&display=swap'); */

    body{
    margin: 0;
    font-family: 'Lato', sans-serif;
}
section{
    height: 100%;
    width: auto;
    display: flex;
    flex-flow: column;
    justify-content: center;
    align-items: center;
    padding-top: 100px;
    padding-bottom: 100px;
}
.card_wrapper {
    display: flex;
    justify-content: flex-end;
    box-shadow: 0 0px 260px rgb(0 0 0 / 10%);
    background: url(images/E-CARD-final.png);
    background-size: cover;
    background-repeat: no-repeat;
    height: 550px;
    width: 60%;
    border-bottom: 16px solid #fff;
}  
.inner-wrapper {
    position: relative;
    right: 13rem;
    bottom: 4rem;
}
h4.mum-name {
  color: #000!important;
  margin: 15px auto 0!important;
  width: 300px;
  font-weight: 500!important;
  border-bottom: 1px solid #000;
  padding: 10px 5px 10px;
  text-transform: uppercase;
}
.right-col_wrapper {
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.to_wrapper , .from_wrapper , .message_wrapper {
  margin: 40px auto;
}
.to_wrapper h4, .from_wrapper h4, .message_wrapper h4 {
    color: #e50e36;
    margin: 30px auto 0;
    font-weight: 800;
}
.to_wrapper p {
    margin: 15px auto 0;
}
.code-h3 {
    margin-top: 30px;
    position: relative;
    color: lightgray;
}
.code-span {
    background: #e5e5e5;
    margin-left: 10px;
    padding: 8px 12px;
    width: 200px;
    height: 20px;
}
.hd-img {
    margin: 40px 20px;
    position: absolute;
    left: -33rem;
}
.pos-rel {
    display: flex;
    align-items: center;
    position: relative;
    right: 35px;
}
.code-wrapper {
    display: flex;
    align-items: baseline;
    height: 50px;
}
/* NAV CSS */
.nav {
    display: flex;
    align-items: center;
    height: 100px;
    width: 100%;
    background-color: #212529;
    position: relative;
  }
  
  .nav > .nav-header {
    display: flex;
    margin-right: auto;
    margin-left: 0.2rem;
  }
  
  .nav > .nav-header > .nav-title {
    display: inline-block;
    font-size: 14px;
    font-weight: 700;
    color: #332A86;
    padding: 10px 10px 10px 10px;
  }
  
  .nav > .nav-btn {
    display: none;
  }
  
  .nav > .nav-links {
    display: flex;
    align-items: center;
    float: right;
    font-size: 14px;
    margin-right: 6.5rem;
  }
  
  .nav > .nav-links > a {
    display: inline-block;
    padding: 13px 10px 13px 10px;
    text-decoration: none;
    color: #61CE7000;
  }
  
  .nav > .nav-links > a:hover {
    background-color: #ECEAFF;
    border-radius: 10px;
  }
  
  .nav > #nav-check {
    display: none;
  }
  
  @media (max-width:600px) {
    .nav > .nav-btn {
      display: inline-block;
      position: absolute;
      right: 0px;
      top: 0px;
    }
    .nav > .nav-btn > label {
      display: inline-block;
      width: 50px;
      height: 50px;
      padding: 13px;
    }
    .nav > .nav-btn > label:hover,.nav  #nav-check:checked ~ .nav-btn > label {
      background-color: rgba(0, 0, 0, 0.3);
    }
    .nav > .nav-btn > label > span {
      display: block;
      width: 25px;
      height: 10px;
      border-top: 2px solid #eee;
    }
    .nav > .nav-links {
      position: absolute;
      display: block;
      width: 100%;
      background-color: #333;
      height: 0px;
      transition: all 0.3s ease-in;
      overflow-y: hidden;
      top: 50px;
      left: 0px;
    }
    .nav > .nav-links > a {
      display: block;
      width: 100%;
    }
    .nav > #nav-check:not(:checked) ~ .nav-links {
      height: 0px;
    }
    .nav > #nav-check:checked ~ .nav-links {
      height: calc(100vh - 50px);
      overflow-y: auto;
    }
  }
  
  /* Search icon */
  .hfe-search-icon-toggle {
    display: flex;
    height: 70px;
    justify-content: center;
    align-items: center;
    padding-right: 20px;
    border-right: 2px solid #fff;
  }
  i.fas.fa-search {
    margin-left: 20px;
  }
  .fa-search:before {
    content: "\f002";
    font-size: 24px;
    color: #fff;
  }
  .fa-bars:before {
    content: "\f0c9";
    color: darkgray;
    font-size: 24px;
    padding-left: 25px;
  }
  
  /* Footer Css */
  .footer {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    height: auto;
    position: relative;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #202020;
    color: white;
    text-align: center;
    padding: 80px 0;
  }
  .logo-a img {
    padding: 20px 0;
  }
  .icon-a i:before {
    color: #000;
    background: #fff;
    padding: 10px;
    margin-right: 5px;
  }
  .text-wrapper {
    margin: 40px auto;
    padding: 35px 0;
    border-bottom: 1px solid rgb(255 255 255 / 37%);
  }
  .text-a {
    text-decoration: none;
    color: #fff;
    padding: 1rem 3rem;
    font-weight: 300;
    font-size: 13px;
    letter-spacing: 1.2px;
    border-right: 1px solid #fff;
  }
  .text-a:last-child{
    border-right: none;
  }
  .text-b {
    text-decoration: none;
    color: rgb(255 255 255 / 17%);
    font-size: 13px;
    font-weight: 100;
    padding: 1rem 3rem;
    letter-spacing: 1.5px;
  }
  .ses-wrapper {
    margin: 2rem auto;
  }
  .ses-wrapper a{
    text-decoration: none;
    color: rgb(255 255 255 / 17%);
    font-size: 13px;
    font-weight: 300;
    padding: 1rem 3rem;
    
  }
  .p-footer{
    color: rgb(255 255 255 / 17%);
    font-size: 13px;
    font-weight: 300;
    padding: 1rem 3rem;
  }
  </style>
<body>
<section>
        <div class="card_wrapper">
            <div class="right-col_wrapper">
                <div class="inner-wrapper">
                <div class="from_wrapper">
                    <h4>Your name:</h4>
                    <p></p>
                </div>
                <div class="to_wrapper">
                    <h4>Mother's name:</h4>
                    <p></p>
                </div>
                <div class="message_wrapper">
                    <p><strong>This document is to certify</strong></p>
                    <h4 class="mum-name"></h4>
                    <p><strong>as the best Mum in the #Feelifeeli universe</strong></p>
                </div>
                </div>
                <div class="pos-rel">  
                    <div class="code-wrapper"><h3 class="code-h3">Code:</h3><span class="code-span"></span></div>
                </div>
            </div> 
        </div>
    </section>
</body>
</html>
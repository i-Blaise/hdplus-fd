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
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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
    
    <section id='container'>
        <div class="card_wrapper">
            <div class="right-col_wrapper">
                <div class="inner-wrapper">
                <div class="from_wrapper">
                    <h4>Your name: <?php echo $result['your_name']; ?></h4>
                    <p></p>
                </div>
                <div class="to_wrapper">
                    <h4>Father's name: <?php echo $result['fathers_name']; ?></h4>
                    <p></p>
                </div>
                <div class="message_wrapper">
                    <p><strong>This document is to certify</strong></p>
                    <h4 class="mum-name"></h4>
                    <p><strong>as the best Mum in the #Feelifeeli universe</strong></p>
                </div>
                </div>
                <div class="pos-rel">  
                    <div class="code-wrapper"><h3 class="code-h3">Code: <?php echo $result['code']; ?></h3><span class="code-span"></span></div>
                </div>
            </div> 
        </div>
    </section>
  <button id="save_image_locally">download img</button>
  
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

<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
<script>



  function capture() {
  const capture = document.querySelector('#container')
	html2canvas(capture)
		.then(canvas => {
			document.body.appendChild(canvas)
			canvas.style.display = 'inline'
			return canvas
		})
		.then(canvas => {
			const image = canvas.toDataURL('image/png').replace('image/png', 'image/octet-stream')
			const a = document.createElement('a')
			a.setAttribute('download', 'my-image.png')
			a.setAttribute('href', image)
			a.click()
			canvas.remove()
		})
}

const btn = document.querySelector('#save_image_locally')
btn.addEventListener('click', capture)

</script>
</html>
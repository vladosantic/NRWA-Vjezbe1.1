<DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ŠetoČulo</title>
	<link rel="stylesheet" href="views/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  
  <body>
  
    <header>
	<div class="nav">
        <input type="checkbox" id="nav-check">
        <div class="nav-header">
          <div class="nav-title">
            ŠestoČulo
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
        <a href='./'>Početna</a>
      <a href='?controller=djelatnici&action=index'>Djelatnici</a>
	  <a href='?controller=zupanija&action=index'>Zupanije</a>
	    <a href='?controller=posts&action=index'>Posts</a>
      <a href='?controller=city&action=index'>City</a>
      <a href='?controller=countrylanguage&action=index'>Country Language</a>
      <a href='?controller=country&action=index'>Country</a>
      
      
        </div>
      </div>
    </header>

    <?php require_once('routes.php'); ?>

    <footer class="footer-distributed">

      <div class="footer-left">

        <h3>Šesto<span>Čulo</span></h3>

        <p class="footer-links">
          <a href="#" class="link-1">Home</a>
          
          <a href="#">Blog</a>
        
          <a href="#">Pricing</a>
        
          <a href="#">About</a>
          
          <a href="#">Faq</a>
          
          <a href="#">Contact</a>
        </p>

        <p class="footer-company-name">Company Name © 2015</p>
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>EEs Ave</span> Mostar</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>+1.55123233215.555.5555</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:support@company.com">support@company.com</a></p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>About the company</span>
          Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
        </p>

        <div class="footer-icons">

          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-github"></i></a>

        </div>

      </div>

    </footer>
  <body>
<html>
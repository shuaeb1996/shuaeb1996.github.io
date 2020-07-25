
<!DOCTYPE html>
<html>
<head>
	<!-- META TAG -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- google font words  -->
<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:300i|Open+Sans&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lobster+Two&display=swap" rel="stylesheet"><!-- fontawesome -->
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">   
    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
        <!-- logo slide -->
        <!-- pagebootup -->
 <link rel="stylesheet" type="text/css" href="contact.css">
 <title>ARCHORIZON</title>
</head>

<body onload="myFunction()">
<div id="loading">
  <img src="https://savsign.org/wp-content/themes/apparatus/images/newsletter_loader.gif" alt="image">
 <!--   style="margin-right: auto;margin-left: auto; float: none"> -->
</div>

<!--end loader -->
<!-- main menu code here -->
  <nav id="mainNavbar" class="navbar navbar-default navbar-expand-md bg-default text-black justify-content-center fixed-top">
    <a href="indx.html" class="navbar-brand mr-0">ARCHORIZON DESIGN</a> 
    <button class="navbar-toggler ml-1" type="button" data-toggle="collapse" data-target="#collapsingNavbar1">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="collapsingNavbar1">
        <ul class="navbar-nav mx-auto text-center">
             <li class="nav-item">
                <a class="nav-link" href="indx.html">HOME</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="aboutus.html">ABOUT US</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.html">CONTACT </a>
            </li>
             <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PROJECT</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="arch.html">Architecture</a>
          <a class="dropdown-item" href="integrity.html">Interior</a>
        </ul>
      </div>
</nav>
<!-- main menu code ends here -->
</div>  

  <div id="fixed-social">
  <div>
    <a href="#" class="fixed-facebook" target="_blank"><i class="fa fa-facebook"></i> <span>Facebook</span></a>
  </div>
  <div>
    <a href="#" class="fixed-twitter" target="_blank"><i class="fa fa-twitter"></i> <span>Twitter</span></a>
  </div>
  
  <div>
    <a href="#" class="fixed-linkedin" target="_blank"><i class="fa fa-linkedin"></i> <span>LinkedIn</span></a>
  </div>
  <div>
    <a href="#" class="fixed-instagrem" target="_blank"><i class="fa fa-instagram"></i> <span>Instagram</span></a>
  </div>
</div>

<!-- header -->
<div class="wrapper">
  <header class="hero">
    <div class="headline-wrapper">  
      <h1 class="headline">CONTACT US</h1>
      <h2 class="subheadline">Feel Free to Call us.</h2>
    </div>
  </header>
</div>
<!-- contact -->
<div id="page-wrapper">
    <h1>GET IN TOUCH</h1>
<div id="form-messages"></div>
<form id="ajax-contact" method="post" action="mailer.php">
    <div class="field">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
    </div>

    <div class="field">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>

    <div class="field">
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
    </div>

    <div class="field">
        <button type="submit">SUBMIT</button>
    </div>
</form>






<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
        <!-- script link -->
        <script src="jquery-2.1.0.min.js"></script>
         <script src="apps.js"></script>
         <!-- end script link -->
          
        <!-- contact form -->
        
         <!-- preloader -->
        <script>
 // var preloader = document.getElementById('loading');
 // function myFunction(){
 //  preloader.style.display = 'none';
 //  };
 $(document).ready(function(){
        $('div#loading').removeAttr('id');
    });
    var preloader = document.getElementById("loading");
    window.addEventListener('load', function(){
      preloader.style.display = 'none';
      })
</script>
<!-- header -->

<!-- upload -->


      </body>
      </html>
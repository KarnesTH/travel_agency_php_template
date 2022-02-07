<!DOCTYPE html>
<html lang="de">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
      
      <title>Contact</title>
      <!-- Loading third party fonts -->
      <link href="fonts/font-opensans.css" rel="stylesheet" type="text/css">
      <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
      <!-- Loading main css file -->
      <link rel="stylesheet" href="css/animate.min.css">
      <link rel="stylesheet" href="css/template_style.css">

      
      <!-- Seitenspezifisch Bootstrap core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/feedback.css" rel="stylesheet">
      
      <!--[if lt IE 9]>
      <script src="js/ie-support/html5.js"></script>
      <script src="js/ie-support/respond.js"></script>
      <![endif]-->

   </head>

   <body>
      
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
                        <li class="menu-item"><a href="about-us.php">About us</a></li>
                        <li class="menu-item"><a href="our-offer.php">Our Offer</a></li>
                        <li class="menu-item"><a href="customer-protection.php">Customer Protection</a></li>
                        <li class="menu-item"><a href="contact.php">Contact</a></li>
                     </ul>
                  </nav>
                  
                  <div class="social-links">
                     <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                     <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                     <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                     <a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
                  </div>
               </div>
               <nav class="breadcrumbs">
                  <a href="index.php">Home</a> &rarr;
                  <span>Feedback</span>
               </nav>
            </div>
         </header> <!-- .site-header -->

    <main class="content">
      <div class="fullwidth-block">
        <div class="container">
          <form class="row p-3 x-gap">
            <fieldset class="col-12 col-lg-4 mb-2">
              <legend class="d-inline-block w-auto px-2 rounded bg-success text-white">Persönliche Daten</legend>
              <div class="form-group row">
                <div class="form-check col-lg-3 offset-lg-2 pl-5 pl-lg-0">
                  <input class="form-check-input" type="radio" name="geschlecht" id="frau" value="frau" required>
                  <label class="form-check-label" for="frau">
                    Frau
                  </label>
                </div>
                <div class="form-check col-lg-3 pl-5 pl-lg-0">
                  <input class="form-check-input" type="radio" name="geschlecht" id="herr" value="herr" required>
                  <label class="form-check-label" for="herr">
                    Herr
                  </label>
                </div>
                <div class="form-check col-lg-3 pl-5 pl-lg-0">
                  <input class="form-check-input" type="radio" name="geschlecht" id="divers" value="divers" required>
                  <label class="form-check-label" for="divers">
                    Divers
                  </label>
                </div>
              </div>
              <div class="form-group">
                <label for="vorname">Vorname</label>
                <input type="text" class="form-control" id="vorname" name="vorname" placeholder="Bitte Vorname eingeben"
                  required>
              </div>
              <div class="form-group">
                <label for="name">Nachname</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Bitte Nachname eingeben"
                  required>
              </div>
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">Wir behandeln Ihre Daten vertraulich,
                  versprochen!</small>
              </div>
            </fieldset>


            <fieldset class="col-12 col-lg-8 mb-2">
              <legend class="d-inline-block w-auto px-2 rounded bg-success text-white">Nachricht</legend>
              <div class="form-group">
                <label for="betreff">Ihr Anliegen:</label>
                <select name="betreff" id="betreff" size="1" class="form-control">
                  <option value="btr1">Frage zur Reise</option>
                  <option value="btr2">Frage zu Angebot</option>
                  <option value="btr3">Frage zum Newsletter Reise</option>
                  <option value="btr4">Frage zum Newsletter Reisebüro</option>
                  <option value="btr5">Frage zum Gewinnspiel</option>
                  <option value="btr6">Sonstiges/Feedback</option>
                </select>
              </div>
              <div class="form-group">
                <label for="nachricht">Ihre Nachricht:</label>
                <textarea name="nachricht" id="nachricht" rows="8" class="form-control"></textarea>
              </div>

            </fieldset>
            <fieldset class="col-12 col-lg-6 mb-2">
              <legend class="d-inline-block w-auto px-2 rounded bg-success text-white">Newsletter</legend>
              <div class="form-group row">
                <div class="form-check col-lg-3 offset-lg-2 pl-5 pl-lg-0">
                  <input class="form-check-input" type="checkbox" name="nl_reise" id="nl_reise" value="nl_reise">
                  <label class="form-check-label" for="nl_reise">
                    Reise
                  </label>
                </div>
                <div class="form-check col-lg-3 pl-5 pl-lg-0">
                  <input class="form-check-input" type="checkbox" name="nl_buero" id="nl_buero" value="nl_buero">
                  <label class="form-check-label" for="nl_buero">
                    Reisebüro
                  </label>
                </div>
                <div class="form-check col-lg-3 pl-5 pl-lg-0">
                  <input class="form-check-input" type="checkbox" name="nl_gewinn" id="nl_gewinn" value="nl_gewinn">
                  <label class="form-check-label" for="nl_gewinn">
                    Gewinnspiel
                  </label>
                </div>
              </div>
            </fieldset>

            <fieldset class="col-12 col-lg-6 mb-2">
              <legend class="d-inline-block w-auto px-2 rounded bg-success text-white">Aktion</legend>
              <button type="submit" class="btn btn-tplcolor">Submit</button>
              <button type="reset" class="btn btn-light">Reset</button>
            </fieldset>

          </form>
        </div>
      </div>
    </main>

    <footer class="site-footer wow fadeInUp">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="widget">
                <h3 class="widget-title">About us</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus animi asperiores magnam
                  ducimus laboriosam soluta, odio doloribus, voluptas numquam facilis consectetur nam in repudiandae
                  commodi odit iste sed doloremque repellat.</p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="widget">
                <h3 class="widget-title">Helpful Links</h3>
                <ul class="list-arrow">
                  <li><a href="#">Labore et dolore magnam</a></li>
                  <li><a href="#">Dolore magnam</a></li>
                  <li><a href="#">Magnam Labore et</a></li>
                  <li><a href="#">Dolore mabore magnam</a></li>
                  <li><a href="feedback.php">Feedback Formular</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="widget">
                <h3 class="widget-title">Helpful Links</h3>
                <ul class="list-arrow">
                  <li><a href="#">Labore et dolore magnam</a></li>
                  <li><a href="#">Dolore magnam</a></li>
                  <li><a href="#">Magnam Labore et</a></li>
                  <li><a href="#">Dolore mabore magnam</a></li>
                  <li><a href="feedback.php">Feedback Formular</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="widget widget-customer-info">
                <h3 class="widget-title">Customer Service</h3>
                <img src="images/dummy/footer-customer-service.jpg" alt="" class="pull-left">
                <div class="cs-info">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim voluptates pariatur vero.</p>
                  <p>+1 421 458 321 <br> <a href="mailto:cs@companyname.com">cs@companyname.com</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="branding pull-left">
            <img src="images/logo-footer.png" alt="Company Name" class="logo">
            <h1 class="site-title"><a href="index.php">Company Name</a></h1>
            <small class="site-description">Tagline goes here</small>
          </div>

          <div class="contact-links pull-right">
            <a href="https://goo.gl/maps/oQKxg"><i class="fa fa-map-marker"></i> 983 Avenue Street, New York</a>
            <a href="tel:+134453455345"><i class="fa fa-phone"></i> +1 344 5345 5345</a>
            <a href="mailto:contact@companyname.com"><i class="fa fa-envelope"></i> contact@companyname.com</a>
          </div>
        </div>
      </div>
      <div class="colophon">
        <div class="container">
          <p class="copy">Copyright 2014 Company Name, Designed by Themezy, All right reserved.</p>
        </div>
      </div>
    </footer> <!-- .site-footer -->

  </div> <!-- #site-content -->
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/min/plugins-min.js"></script>
  <script src="js/min/app-min.js"></script>

</body>

</html>
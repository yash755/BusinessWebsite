<?php

if(isset($_POST["name"]) && isset($_POST["emailid"]) && isset($_POST["message"]))
{
$name = $_POST["name"];
$subject= $_POST["emailid"];
$msg  = $_POST["message"];

$message = $name.$msg;

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

mail("deepakenterprises@deepakenterprises.96.lt",$subject,$message);

unset($_POST["name"]);
unset($_POST["emailid"]);
unset($_POST["message"]);


}

?>



<!DOCTYPE html>
<html lang="en">



<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="chemicals ghaziabad ,deepak enterprises,industrial chemicals ghaziabad,chemiclas,
                                                 E.T.P Plant material,Ferrous Sulphate Traders,Chemcial Dealers,Deepak Enterprises Ghaziabad,
                                                  Waster water material,Ferrous,Alum,caustic,deepak enterprises chemcials,chemical distributor ghaziabd,
                                                  cheimicals"
    <meta name="description" content="Deepak Enterprises is the best Ghaziabad chemical distributor 
                                     dedicated to service manufacturing companies.We started in 1987 
                                     serving various industries from over two decades.We deliver almost 
                                     all type of chemicals.Our key products our E.T.P. Plant Material
                                    (Ferrous Sulphate),Soda Ash,Alum etc.">
    <meta name="author" content="Deepak Enterprises">

    <title>Deepak Enterprises</title>

    <!-- Favicon -->
	<link rel="shortcut icon" type="image/ico" href="img/favicon.png"/>


    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top" onclick=$ ( "#menu-close").click();>Deepak Enterprises</a>
            </li>
            <li>
                <a href="#top" onclick=$ ( "#menu-close").click();>Home</a>
            </li>
            <li>
                <a href="#about" onclick=$ ( "#menu-close").click();>About</a>
            </li>
            <li>
                <a href="#services" onclick=$ ( "#menu-close").click();>Services</a>
            </li>
            <li>
                <a href="#portfolio" onclick=$ ( "#menu-close").click();>Key Products</a>
            </li>
            <li>
                <a href="#contact" onclick=$ ( "#menu-close").click();>Contact</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>Deepak Enterprises</h1>
            <h3>Deals in Industrial Acid &amp; Chemicals</h3>
            <br>
            <a href="#about" class="btn btn-dark btn-lg">Find Out More</a>
        </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="lead">Deepak Enterprises is the best Ghaziabad chemical distributor
                                    dedicated to service manufacturing companies.We started in 1987 serving various industries
                                    from over two decades.We deliver almost all type of chemicals.Our key products our E.T.P. Plant
                                    Material</br>(Ferrous Sulphate),Soda Ash,Alum etc.</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="services" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>At Your Service</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-cubes fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Quality Products</strong>
                                </h4>
                                <p>No compromise with the quality at all, finest products are delivered.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-clock-o fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Timely Delivery</strong>
                                </h4>
                                <p>Delivery of product is on time, no delays.</p>
                                </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-rupee fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Resonable Prices</strong>
                                </h4>
                                <p>Prices are negotiable and as per market.</p>
                                </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>Key Products</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                    <img src="img/causticsoda.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">
                                    <h4 class="text-primary">Caustic Soda</h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="img/bleachingpowder.jpeg" class="img-rounded" alt="Cinque Terre" width="304" height="236">
                                <h4 class="text-success">Bleaching Powder</h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="portfolio-item">
                              <img src="img/sodiumhypochlorite.JPG" class="img-rounded" alt="Cinque Terre" width="304" height="236">
                              <h4 class="text-danger">Sodium Hypochlorite</h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="portfolio-item">
                              <img src="img/sodaash.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">
                              <h4 class="text-warning">Soda Ash</h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="portfolio-item">
                              <img src="img/alum.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">
                              <h4 class="text-info">Alum</h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="portfolio-item">
                              <img src="img/ferroussulphate.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">
                              <h4 class="text-primary">E.T.P. Plant Material</br>(Ferrous Sulphate)</h4>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>



    <!-- Map -->
    <section id="contact1" class="map">
        <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.0365425476793!2d77.4324280002062!3d28.658624482321198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cf1cf73f5ade9%3A0x6753df060739ea35!2sKirana+Mandi%2C+Ram+Nagar%2C+Bagh+Bhathyari%2C+Naya+Ganj%2C+Ghaziabad%2C+Uttar+Pradesh+201001%2C+India!5e0!3m2!1sen!2s!4v1471156674114"></iframe>
        <br />
        <small>
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.0365425476793!2d77.4324280002062!3d28.658624482321198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cf1cf73f5ade9%3A0x6753df060739ea35!2sKirana+Mandi%2C+Ram+Nagar%2C+Bagh+Bhathyari%2C+Naya+Ganj%2C+Ghaziabad%2C+Uttar+Pradesh+201001%2C+India!5e0!3m2!1sen!2s!4v1471156674114"></a>
        </small>
        </iframe>
    </section>

    <!-- Footer -->
    <section id="contact">
      <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Deepak Enterprises</strong>
                    </h4>
                    <p>378 A, Kirana Mandi
                        <br>Ghaziabad, U.P.</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> (+91) 931-014-9227</li>
                        <li><i class="fa fa-phone fa-fw"></i> (+91) 931-370-9227</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i> <a href="" data-toggle="modal" data-target="#myModal">deepakenterprises378@gmail.com</a></li>


                    </ul>
                    <br>

                    <hr class="small">
                    <p class="text-muted">Copyright &copy; Deepak Enterprises 2016</p>
                </div>
            </div>
        </div>
        <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
    </footer>

    <div style="color:rgb(256,256,256)">chemicals ghaziabad ,deepak enterprises,industrial chemicals ghaziabad,chemiclas,
                                                 E.T.P Plant material ghaziabad,Ferrous Sulphate Traders,Chemcial Dealers</div>
  </section>


    <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Message Us</h4>
      </div>
      <div class="modal-body">
          <form method="post" action="index.php" role="form">
            <div class="form-group">
              <input type="text" class="form-control" id="name" name="name" placeholder="Name"></br>
              <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Email"></br>
              <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="button" >Send Mail</a></button>
      </div>
        </form>

    </div>
  </div>
</div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    //#to-top button appears after scrolling
    var fixed = false;
    $(document).scroll(function() {
        if ($(this).scrollTop() > 250) {
            if (!fixed) {
                fixed = true;
                // $('#to-top').css({position:'fixed', display:'block'});
                $('#to-top').show("slow", function() {
                    $('#to-top').css({
                        position: 'fixed',
                        display: 'block'
                    });
                });
            }
        } else {
            if (fixed) {
                fixed = false;
                $('#to-top').hide("slow", function() {
                    $('#to-top').css({
                        display: 'none'
                    });
                });
            }
        }
    });
    // Disable Google Maps scrolling
    // See http://stackoverflow.com/a/25904582/1607849
    // Disable scroll zooming and bind back the click event
    var onMapMouseleaveHandler = function(event) {
        var that = $(this);
        that.on('click', onMapClickHandler);
        that.off('mouseleave', onMapMouseleaveHandler);
        that.find('iframe').css("pointer-events", "none");
    }
    var onMapClickHandler = function(event) {
            var that = $(this);
            // Disable the click handler until the user leaves the map area
            that.off('click', onMapClickHandler);
            // Enable scrolling zoom
            that.find('iframe').css("pointer-events", "auto");
            // Handle the mouse leave event
            that.on('mouseleave', onMapMouseleaveHandler);
        }
        // Enable map zooming with mouse scroll when the user clicks the map
    $('.map').on('click', onMapClickHandler);
    </script>

</body>

</html>
			
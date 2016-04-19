<!DOCTYPE html>
<html>
<head>
    <title>Brandy Maddison Events</title>

    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="css/unslider.css" type="text/css" rel="stylesheet">
    <link href="css/unslider-dots.css" type="text/css" rel="stylesheet">
    <link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="container main-nav-wrapper">
            <ul class="social-nav social-dark">
                <li class="social-btn"><a href="#"><i class="icon icon-facebook"></i></a></li>
                <li class="social-btn"><a href="#"><i class="icon icon-twitter"></i></a></li>
                <li class="social-btn"><a href="#"><i class="icon icon-pinterest"></i></a></li>
                <li class="social-btn"><a href="#"><i class="icon icon-instagram"></i></a></li>
            </ul>
            <a class="btn btn-gold btn-xs" id="client-login" href="#"><span>Client Login</span></a>
            <ul class="main-nav">
                <li class="nav-cell nav-left">
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Services</a></li>
                    </ul>
                </li>
                <li class="nav-cell nav-logo">
                    <img src="img/logo-bme.svg" alt="Brandy Maddison Events"/>
                </li>
                <li class="nav-cell nav-right">
                    <ul>
                        <li><a href="#">Kind Words</a></li>
                        <li><a href="#">Say Hello</a></li>
                        <li><a href="#">Journal</a></li>
                    </ul>
                </li>
                <li class="btn-mobile-menu"><a href="javascript:;">Menu</a></li>
            </ul>
        </nav>
    </header>
    <section class="container aligncenter">
        <!-- TODO: Add carousel -->
        <div class="banner banner-slider">
            <ul>
                <li><img src="img/banner-home-1.jpg" alt=""/></li>
                <li><img src="img/banner-home-2.jpg" alt=""/></li>
                <li><img src="img/banner-home-3.jpg" alt=""/></li>
                <li><img src="img/banner-home-4.jpg" alt=""/></li>
            </ul>
        </div>
        <div class="row">
            <div class="content narrow">
                <h2>Welcome Beautiful You!</h2>
                <p>With a lot of heart &amp; a dream to create something beautiful, Brandy Maddison Event Planning &amp; Design launched in 2013. We are a boutique event planning and design studio; specializing in weddings and floral artistry. You will find us right here in Kamloops, BC serving all surrounding areas and available for travel anywhere in this incredible world of ours.</p>
                <a class="btn btn-gold aligncenter" href="#" style="margin-top:30px;"><span>Learn More</span></a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-4">
                <a class="btn btn-gold btn-block btn-xl" href="#">
                    <span>View Our <em>Portfolio</em></span>
                </a>
            </div>
            <div class="col-md-4">
                <a class="btn btn-gold btn-block btn-xl" href="#">
                    <span>Learn About Our <em>Services</em></span>
                </a>
            </div>
            <div class="col-md-4">
                <a class="btn btn-gold btn-block btn-xl" href="#">
                    <span>Latest From The <em>Journal</em></span>
                </a>
            </div>
        </div>
        <hr>
        <div class="row">
            <h3>The Latest on Instagram</h3>
            <div class="insta-feed lg">
                <?php require_once 'inc/instafeed.php'; ?>
            </div>
        </div>
    </section>
    <footer>
        <ul class="social-nav social-light">
            <li class="social-btn"><a href="#"><i class="icon icon-facebook"></i></a></li>
            <li class="social-btn"><a href="#"><i class="icon icon-twitter"></i></a></li>
            <li class="social-btn"><a href="#"><i class="icon icon-pinterest"></i></a></li>
            <li class="social-btn"><a href="#"><i class="icon icon-instagram"></i></a></li>
        </ul>
        <span class="colophon">©2016 Brandy Maddison Event Planning + Design</span>
        <a class="btn btn-link btn-email" href="mailto:info@brandymaddisonevents.com">info@brandymaddisonevents.com</a>
    </footer>

    <!-- SCRIPTS -->
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="js/unslider-min.js"></script>
    <script src="//stephband.info/jquery.event.move/js/jquery.event.move.js"></script>
    <script src="//stephband.info/jquery.event.swipe/js/jquery.event.swipe.js"></script>
    <script src="js/main.js" type="text/javascript"></script>
</body>
</html>

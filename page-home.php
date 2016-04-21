<?php require_once('header.php'); ?>

    <section class="container aligncenter">
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
            <div class="insta-feed col-5">
                <?php $pull_cnt = 5; ?>
                <?php require_once 'inc/instafeed.php'; ?>
            </div>
        </div>
    </section>

<?php require_once('footer.php'); ?>

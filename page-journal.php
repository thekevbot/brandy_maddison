<?php require_once('header.php'); ?>

    <section class="container">
        <div class="row">
            <div class="col-md-9">
                <article>
                    <div class="article-head aligncenter">
                        <h3>2015 Homes for the Holidays</h3>
                        <span class="article-date">January 3, 2016</span>
                        <ul class="categories">
                            <li>Community</li>
                        </ul>
                    </div>
                    <!--TODO: Add featured image -->
                    <p>This experience with Homes For The Holiday was seriously so incredible!! I got to decorate the most amazing home this holiday season all because of Homes for the Holidays Kamloops a wonderful fundraiser for United Way. These home tours have been such a popular event for me. I have gone for the least 6 years and it truly has been so inspiring...</p>
                    <div class="aligncenter">
                        <a class="btn btn-gold btn-lg aligncenter"><span>Continue Reading</span></a>
                    </div>
                </article>
            </div>
            <div class="col-md-3 sidebar">
                <img class="fw" src="img/brandy-maddison.jpg" alt="Brandy Maddison"/>
                <h3 class="script">Meet Brandy</h3>
                <p>Brandy Maddison Events specializes in creating beautiful and romantic spaces with a purpose adding unique touches that make your wedding day all about you!</p>
                <a class="btn btn-gold btn-block" href="#"><span>Learn More</span></a>
                <ul class="social-nav social-dark">
                    <li class="social-btn"><a href="#"><i class="icon icon-facebook"></i></a></li>
                    <li class="social-btn"><a href="#"><i class="icon icon-twitter"></i></a></li>
                    <li class="social-btn"><a href="#"><i class="icon icon-pinterest"></i></a></li>
                    <li class="social-btn"><a href="#"><i class="icon icon-instagram"></i></a></li>
                </ul>
                <h6 class="aligncenter">The Latest on Instagram</h6>
                <div class="insta-feed col-2">
                    <?php $pull_cnt = 4; ?>
                    <?php require_once 'inc/instafeed.php'; ?>
                </div>
                <!-- TODO: Add Categories List and 'Say Hello' Button -->
            </div>
        </div>
    </section>

<?php require_once('footer.php'); ?>

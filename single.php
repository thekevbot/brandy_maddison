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
                    <div class="featured-img">
                        <img src="img/featured-placeholder.jpg" alt=""/>
                    </div>
                    <p>This experience with Homes For The Holiday was seriously so incredible!! I got to decorate the most amazing home this holiday season all because of Homes for the Holidays Kamloops a wonderful fundraiser for United Way. These home tours have been such a popular event for me. I have gone for the least 6 years and it truly has been so inspiring seeing all the creativeness that goes into such great homes. Every year this incredible production happens where 5 homes volunteer to be decorated for Christmas, and 5 hardworking designers get assigned to each home. Then many vendors around Kamloops, allow their product to be used temporarily so we can create amazingness in each home. Kamloops supporters purchase tickets and walk through each home it is such a fun event to go get inspired and experience the most wonderful season of all. Go take a peek at this incredible home full of so much amazingness. I truly had the most amazing time!!</p>
                    <div class="wrapper community">
                        <div class="wrapper-inner">
                            <h6 class="dark">Add a Comment</h6>
                        </div>
                        <div class="wrapper-inner alignright">
                            <ul class="social-nav social-rose">
                                <li class="social-title">Share On:</li>
                                <li class="social-btn"><a href="#"><i class="icon icon-facebook"></i></a></li>
                                <li class="social-btn"><a href="#"><i class="icon icon-twitter"></i></a></li>
                                <li class="social-btn"><a href="#"><i class="icon icon-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--TODO: Insert Disqus -->
                    <div class="comments">
                        <p>Comments will go here</p>
                    </div>
                    <div class="aligncenter">
                        <a class="btn btn-gold btn-lg" href="#"><span>Return to All Posts</span></a>
                    </div>
                </article>
            </div>
            <div class="col-md-3 sidebar">
                <img class="fw" src="img/brandy-maddison.jpg" alt="Brandy Maddison"/>
                <h3 class="script" style="margin-top:30px;">Meet Brandy</h3>
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
                <h6 class="aligncenter">Categories</h6>
                <ul class="categories">
                    <li><a href="#">Category</a></li>
                    <li><a href="#">Category</a></li>
                    <li><a href="#">Category</a></li>
                </ul>
                <a class="btn btn-gold btn-block" href="#"><span>Say Hello</span></a>
            </div>
        </div>
    </section>

<?php require_once('footer.php'); ?>

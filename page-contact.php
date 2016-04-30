<?php require_once('header.php'); ?>

    <section class="container">
        <div class="banner">
            <h1 class="page-head"><span>Say Hello</span></h1>
            <img src="img/banner-contact.jpg" alt=""/>
        </div>
        <div class="row">
            <h3 class="aligncenter" style="margin-bottom:60px;">We can't wait to hear from you!</h3>
        </div>
        <div class="row">
            <div class="col-md-4">
                <p>Now booking 2017 Weddings!  2016 is almost booked only a few spots left.  As a boutique event planning and design studio we choose to take on a limited number of events a year to ensure the very best for our lovely couples.</p>
                <p>To inquire about our availability, pricing, or if you have any questions at all, please send us a message.</p>
                <ul class="icon-list">
                    <li><i class="icon icon-phone lg"></i>250.319.4651</li>
                    <li><i class="icon icon-mail lg"></i><a href="mailto:info@brandymaddisonevents.com">info@brandymaddisonevents.com</a></li>
                </ul>
                <img class="aligncenter" src="img/logo-lbb.png" alt="Little Black Book Member 2016" style="width:100%; max-width:275px; margin-top:60px;" />
            </div>
            <div class="col-md-7">
                <form class="form-base" id="c-form" action="" validate>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="c-name">First + Last Name *</label>
                                <input type="text" class="form-control input-lg" id="c-name" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="c-fiance">Fiance(e)'s Name *</label>
                                <input type="text" class="form-control input-lg" id="c-fiance" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="c-email">Email *</label>
                                <input type="email" class="form-control input-lg" id="c-email" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="c-phone">Phone *</label>
                                <input type="text" class="form-control input-lg" id="c-phone" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="c-dateLoc">Wedding Date + Location *</label>
                                <input type="text" class="form-control input-lg" id="c-dateLoc" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="c-guestBudget">Expected Guest + Budget</label>
                                <input type="text" class="form-control input-lg" id="c-guestBudget">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="c-found">How did you hear about us?</label>
                                <input type="text" class="form-control input-lg" id="c-found">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="c-commPref">Email or Phone Communication</label>
                                <input type="text" class="form-control input-lg" id="c-commPref">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="c-services">Services you are interested in</label>
                        <input type="text" class="form-control input-lg" id="c-services">
                    </div>
                    <div class="form-group">
                        <label for="c-details">Tell us a little about the design and details of your wedding!</label>
                        <textarea class="form-control" rows="5" id="c-details"></textarea>
                    </div>
                    <button class="btn btn-gold btn-block lg aligncenter" type="submit"><span>Submit</span></button>
                </form>
            </div>
        </div>
    </section>

<?php require_once('footer.php'); ?>

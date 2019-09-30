<?php include'header.php'; ?>
<style>
    .error {
        color: #ff4444 !important;
        margin-bottom: 0 !important;
    }
</style>

        <!-- Contact section -->
        <section class="contact-area ptb-100"> 
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-5">
                        <div class="contact-info">
                            <h3 class="title">Get in Touch</h3>
                            <ul>
                                <li><i class="icofont-google-map"></i>  210 Quadra Street Victoria, Canada</li>
                                <li><i class="icofont-envelope"></i>  <a href="#">example@mail.com</a></li>
                                <li><i class="icofont-smart-phone"></i>  +44 458 7895</li>
                            </ul>
                        </div>

                        <div class="opening-hours">
                            <h3 class="title">Opening Hours</h3>
                            <ul>
                                <li>Mon - Thu <span>7.00 AM - 20.00 PM</span></li>
                                <li>Friday <span>7.00 AM - 20.00 PM</span></li>
                                <li>Saturday - Thu <span>7.00 AM - 20.00 PM</span></li>
                                <li>Sunday <span>7.00 AM - 20.00 PM</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-7">
                        <h3 class="title">Questions? Let our experts help!</h3>
                        <p>Team of Professionals</p>

                        <form id="contactForm" action="includes/process.php" method="POST">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="phone" id="phone"
                                         placeholder="Number">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="4"
                                         placeholder="Message"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <div class="g-recaptcha" data-sitekey="6LdSS7kUAAAAANzzuoTVsq-nP5teBODrYAZex5LA" 
                                        data-callback="recaptchaCallback" data-expired-callback="recaptchaExpired"></div>
                                        <input id="grecaptcha" name="grecaptcha" type="text" 
                                        style="opacity: 0; position: absolute; top: 0; left: 0; height: 1px; width: 1px;" />
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" name="submit" class="default-btn">Send Message</button>
                                    <input type="hidden" name="submit">
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact section -->

        <!-- Map -->
        <div id="map"></div>
        <!-- End Map -->

<?php include'footer.php'; ?>

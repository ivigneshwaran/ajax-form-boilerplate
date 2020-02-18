<!doctype html>
<html lang="en">

<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

        <title>Ajax</title>
    </head>
    
	<style>
		.error {
			color: #f94848 !important;
		}
	</style>
	<style>
		.success-box {
			background: #fbfbfb;
			padding: 35px;
			box-shadow: 0 5px 6px 0 rgba(0, 0, 0, 0.1);
		}
		.mx-auto {
			margin-right: auto!important;
			margin-left: auto!important;
		}
		.success-box img {
			margin: 0 auto;
			width: 190px;
			display: block;
		}
		.img-fluid {
			max-width: 100%;
			height: auto;
		}
		.success-box p {
			font-size: 18px;
			color: #333;
			font-weight: 600;
			text-align: center;
			margin-top: 20px;
		}
		.success-box p i {
			color: #28a745;
		}
		.icofont {
			font-family: 'IcoFont' !important;
			speak: none;
			font-style: normal;
			font-weight: normal;
			font-variant: normal;
			text-transform: none;
			line-height: 1;
			-webkit-font-smoothing: antialiased;
		}
	</style>
	
    <body>

        <!-- Contact section -->
        <section class="contact-area ptb-100"> 
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title">Contact Us</h3>

                        <form id="contactForm" action="process.php" method="POST">
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
                                        <div class="g-recaptcha" data-sitekey="6Lfu-bIUAAAAAPrvWLe338aFAbQiRyelGOURQ54K" 
                                        data-callback="recaptchaCallback" data-expired-callback="recaptchaExpired"></div>
                                        <input id="grecaptcha" name="grecaptcha" type="text" 
                                        style="opacity: 0; position: absolute; top: 0; left: 0; height: 1px; width: 1px;" />
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" name="submit" id="submitButton" class="default-btn">Send Message</button>
                                    <input type="hidden" name="submit">
									<img src="ajax-loader.gif" id="loader" 
									style="display:none" alt="loading" width="16" height="16">
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

		
		<!-- Jquery Min JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		<!-- bootstrap -->
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		<!-- Form Validator JS -->
        <script src="jquery.validate.min.js"></script>
        <!-- Form Validator ajax Script -->
        <script src="form-validator.min.js"></script>
        <!-- Contact Validator config -->
        <script src="validation-script.js"></script>
        <!-- Contact Ajax Form JS -->
        <script src="ajax-script.js"></script>
		<!-- recaptcha -->
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </body>

</html>

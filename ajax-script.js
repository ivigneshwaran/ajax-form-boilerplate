
(function($) {
  "use strict"; // Start of use strict
  $("#contactForm")
    .validator()
    .on("submit", function(event) {
      if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "Did you fill in the form properly?");
      } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
      }
    });

  function submitForm() {
    // Initiate Variables With Form Content
    var name = $("#name").val();
    var email = $("#email").val();
    var subject = $("#subject").val();
    var phone = $("#phone").val();
    var message = $("#message").val();

    $.ajax({
      type: "POST",
      url: "includes/process.php",
      data: {
        name: name,
        email: email,
        subject: subject,
        phone: phone,
        message: message,
        captcha: grecaptcha.getResponse()
      },
      success: function(text) {
        if (text == "success") {
          formSuccess();
        } else {
          formError();
          submitMSG(false, text);
        }
      }
    });
  }

  function formSuccess() {
	$("form#contact-form input#submitButton").fadeOut("normal", function() {
      $(this)
        .parent()
        .append("");
    });
	$("form#contactForm").slideUp("fast", function() {
      $(this).before(
        '<div class="col-lg-7 mx-auto success-box success"><img class="img-fluid" src="sent.gif" alt="sent"><p>Thank you. Your Email was sent successfully. <br> <i class="icofont icofont-checked"></i></p>  </div>'
      );
      $("#loader").hide();
    });
    $("#contactForm")[0].reset();
    submitMSG(true, "Message Submitted!");
  }

  function formError() {
    $("#contactForm")
      .removeClass()
      .addClass("shake animated")
      .one(
        "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",
        function() {
          $(this).removeClass();
        }
      );
  }

  function submitMSG(valid, msg) {
    if (valid) {
      var msgClasses = "h4 text-left tada animated text-success";
    } else {
      var msgClasses = "h4 text-left text-danger";
    }
    $("#msgSubmit")
      .removeClass()
      .addClass(msgClasses)
      .text(msg);
  }
})(jQuery); // End of use strict

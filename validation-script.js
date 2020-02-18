function recaptchaCallback() {
  var response = grecaptcha.getResponse();
  jQuery("#grecaptcha").val(response);
  console.log(jQuery("#contactForm").valid());
}
function recaptchaExpired() {
  jQuery("#grecaptcha").val("");
}

$("#contactForm").validate({
  // Rules for form validation
  rules: {
    name: {
      required: true
    },
    email: {
      required: true,
      email: true
    },
    time: {
      required: true
    },
    date: {
      required: true
    },
    phone: {
      required: true,
      number: true,
      maxlength: 10,
      minlength: 8
    },
    message: {
      required: true,
      minlength: 10
    },
    subject: {
      required: true
    },
    hospital: {
      required: true
    },
    grecaptcha: {
      required: true,
      minlength: 255
    }
  },

  // Messages for form validation
  messages: {
    name: {
      required: "Please enter your name"
    },
    email: {
      required: "Please enter your email address"
    },
    subject: {
      required: "Please enter subject"
    },
    phone: {
      required: "Please enter your Phone number"
    },
    message: {
      required: "Please say something"
    },
    grecaptcha: {
      required: "Please check the recaptcha"
    }
  }
});


// $("#contactForm").validate({
//   // Rules for form validation
//   rules: {
//     name: {
//       required: true
//     },
//     email: {
//       required: true,
//       email: true
//     },
//     time: {
//       required: true
//     },
//     date: {
//       required: true
//     },
//     phone: {
//       required: true,
//       number: true,
//       maxlength: 10,
//       minlength: 8
//     },
//     message: {
//       required: true,
//       minlength: 10
//     },
//     subject: {
//       required: true
//     },
//     hospital: {
//       required: true
//     },
//     grecaptcha: {
//       required: true,
//       minlength: 255
//     }
//   },

//   // Messages for form validation
//   messages: {
//     name: {
//       required: "Please enter your name"
//     },
//     email: {
//       required: "Please enter your email address"
//     },
//     subject: {
//       required: "Please enter subject"
//     },
//     phone: {
//       required: "Please enter your Phone number"
//     },
//     message: {
//       required: "Please say something"
//     },
//     grecaptcha: {
//       required: "Please check the recaptcha"
//     }
//   },

//   invalidHandler: function(event, validator) {
//     // 'this' refers to the form
//     var errors = validator.numberOfInvalids();
//     if (errors) {
//       // handle the invalid form...
//       formError();
//       submitMSG(false, "Did you fill in the form properly?");
//     } else {
//       // everything looks good!
//       event.preventDefault();
//       submitForm();
//     }
//   }
// });
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Apply Loan || Grand Capital Financial ||</title>
    <link rel="icon" href="./assets/myimages/fevi-icon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&amp;display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="assets/vendors/bootstrap/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="assets/vendors/bootstrap-select/bootstrap-select.min.css"
    />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link
      rel="stylesheet"
      href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css"
    />
    <link
      rel="stylesheet"
      href="assets/vendors/nouislider/nouislider.min.css"
    />
    <link
      rel="stylesheet"
      href="assets/vendors/nouislider/nouislider.pips.css"
    />
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.css" />
    <link rel="stylesheet" href="assets/vendors/easilon-icons/style.css" />
    <link
      rel="stylesheet"
      href="assets/vendors/owl-carousel/css/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="assets/vendors/owl-carousel/css/owl.theme.default.min.css"
    />
    <link rel="stylesheet" href="assets/vendors/slick/slick.css" />

    <link rel="stylesheet" href="assets/css/easilon.css" />
  </head>

  <body class="custom-cursor">
    <div class="whatslink">
      <a href="https://api.whatsapp.com/send?phone=9284841551"
        ><img
          style="border-radius: 50%"
          src="https://img.freepik.com/premium-vector/whatsapp-icon-sticker_986045-42.jpg"
          height="50px"
          alt=""
      /></a>
    </div>
    <div class="preloader">
      <div style="display: grid; place-items: center" class="preloader__image">
        <img
          src="./assets/myimages/white logo.png"
          height="70px"
          style="filter: brightness(0) invert(1)"
          alt=""
        />
      </div>
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
      <?php include 'includes/navbar.php' ?>
      <!-- /.main-header -->
      <section class="page-header">
        <div
          class="page-header__bg"
          style="
            background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);
          "
        ></div>
        <!-- /.page-header__bg -->
        <div class="container">
          <div class="page-header__content">
            <h2 class="page-header__title">apply loan</h2>
            <ul class="easilon-breadcrumb list-unstyled">
              <li><a href="index.php">Home</a></li>
              <li><span>apply loan</span></li>
            </ul>
            <!-- /.thm-breadcrumb list-unstyled -->
          </div>
          <!-- /.page-header__content -->
        </div>
        <!-- /.container -->
        <div class="page-header__border-box">
          <div class="page-header__border page-header__border--1"></div>
          <!-- /.page-header__border -->
          <div class="page-header__border page-header__border--2"></div>
          <!-- /.page-header__border -->
          <div class="page-header__border page-header__border--3"></div>
          <!-- /.page-header__border -->
          <div class="page-header__border page-header__border--4"></div>
          <!-- /.page-header__border -->
          <div class="page-header__border page-header__border--5"></div>
          <!-- /.page-header__border -->
        </div>
        <!-- /.page-header__border-box -->
      </section>
      <!-- /.page-header -->

      <section class="apply-loan section-space">
        <div class="container">
           <form action="#" class="apply-loan__form" id="loanfrom">
            <!-- Loan Type -->
            <div class="apply-loan__details">
                <h2 class="apply-loan__details__title">Loan Type</h2>
                <div class="apply-loan__form__row row">
                    <div class="col-md-6">
                        <div class="apply-loan__form__control">
                            <label for="loan-type">Select Loan Type*</label>
                            <select class="selectpicker" id="loan-type" required>
                                <option value="" selected disabled>Select Loan Type</option>
                                <option value="instant-loan">Instant Loan</option>
                                <option value="personal-loan">Personal Loan</option>
                                <option value="business-loan">Business Loan</option>
                                <option value="home-loan">Home Loan</option>
                                <option value="mudra-loan">Mudra Loan</option>
                                <option value="mortgage-loan">Mortgage Loan</option>
                                <option value="life-insurance">Life Insurance</option>
                                <option value="health-insurance">Health Insurance</option>
                                <option value="sip">SIP</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Personal Details -->
            <div class="apply-loan__details">
                <h2 class="apply-loan__details__title">Personal Details</h2>
                <div class="apply-loan__form__row row">
                    <div class="col-md-6">
                        <div class="apply-loan__form__control">
                            <label for="full-name">Full Name*</label>
                            <input
                                type="text"
                                id="full-name"
                                placeholder="Full Name"
                                required
                            />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="apply-loan__form__control">
                            <label for="enter-email">Email*</label>
                            <input
                                type="email"
                                id="enter-email"
                                placeholder="Enter Email"
                                required
                            />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="apply-loan__form__control">
                            <label for="mobile-number">Mobile Number*</label>
                            <input
                                type="tel"
                                id="mobile-number"
                                placeholder="Mobile Number"
                                required
                            />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="apply-loan__form__control">
                            <label for="MaritalStatus">Marital Status*</label>
                            <select
                                class="selectpicker"
                                id="MaritalStatus"
                                required
                            >
                                <option value="" selected disabled>Marital Status</option>
                                <option value="married">Married</option>
                                <option value="single">Single</option>
                                <option value="widowed">Widowed</option>
                                <option value="divorced">Divorced</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Address Details -->
            <div class="apply-loan__details">
                <h2 class="apply-loan__details__title">Address Details</h2>
                <div class="apply-loan__form__row row">
                    <div class="col-md-6">
                        <div class="apply-loan__form__control">
                            <label for="house-info">House No/Name*</label>
                            <input
                                type="text"
                                id="house-info"
                                placeholder="House No/Name"
                                required
                            />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="apply-loan__form__control">
                            <label for="street">Street*</label>
                            <input
                                type="text"
                                id="street"
                                placeholder="Street"
                                required
                            />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="apply-loan__form__control">
                            <label for="city">City*</label>
                            <input
                                type="text"
                                id="city"
                                placeholder="City Name"
                                required
                            />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="apply-loan__form__control">
                            <label for="pin-code">Pin Code*</label>
                            <input
                                type="text"
                                id="pin-code"
                                placeholder="Pin Code"
                                required
                            />
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="apply-loan__form__btn easilon-btn">
                <span>Submit Now</span>
                <span class="easilon-btn__icon">
                    <i class="fas fa-arrow-right"></i>
                </span>
            </button>
            
            
        </form>
          <!-- /.apply-loan__form -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /.apply-loan section-space -->

      <?php include 'includes/footer.php'; ?>
      <!-- /.main-footer -->
    </div>
    <!-- /.page-wrapper -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
      <span class="scroll-to-top__text">back top</span>
      <span class="scroll-to-top__wrapper"
        ><span class="scroll-to-top__inner"></span
      ></span>
    </a>

 <script>
        document.getElementById('loanfrom').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form values
            const loanType = document.getElementById('loan-type').value;
            const fullName = document.getElementById('full-name').value;
            const email = document.getElementById('enter-email').value;
            const mobile = document.getElementById('mobile-number').value;
            const maritalStatus = document.getElementById('MaritalStatus').value;
            const houseInfo = document.getElementById('house-info').value;
            const street = document.getElementById('street').value;
            const city = document.getElementById('city').value;
            const pinCode = document.getElementById('pin-code').value;
            
            // Format message for WhatsApp
            const message = `New Loan Application:
            
Loan Type: ${loanType}

Personal Details:
- Full Name: ${fullName}
- Email: ${email}
- Mobile: ${mobile}
- Marital Status: ${maritalStatus}

Address Details:
- House: ${houseInfo}
- Street: ${street}
- City: ${city}
- Pin Code: ${pinCode}`;

            // Encode message for URL
            const encodedMessage = encodeURIComponent(message);
            
            // Create WhatsApp URL
            const whatsappURL = `https://wa.me/9284841551?text=${encodedMessage}`;
            
            // Open WhatsApp in a new tab
            window.open(whatsappURL, '_blank');
            
            // Show success message
            alert('Form submitted successfully! You will be redirected to WhatsApp to send your application.');
        });
    </script>

    <script src="assets/vendors/jquery/jquery-3.7.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="assets/vendors/slick/slick.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/imagesloaded/imagesloaded.min.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/vendors/jquery-circleType/jquery.circleType.js"></script>
    <script src="assets/vendors/jquery-lettering/jquery.lettering.min.js"></script>
    <!-- template js -->
    <script src="assets/js/easilon.js"></script>
  </body>
</html>

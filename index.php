<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- icon-link(font-awesome) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
              <!-- font-family links(font-awesome) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,500;0,600;1,500;1,600&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Rouge+Script&display=swap" rel="stylesheet">
                  <!-- style-links and favicon-links -->
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="Styles/general.css">
  <link rel="stylesheet" href="Styles/header.css">
  <link rel="stylesheet" href="Styles/main.css">
  <link rel="stylesheet" href="Styles/footer.css">
  <title>S4Y_airlines</title>
</head>
<body>
  <div class="airline-home-container">
    <header class="header-container-section">
      <section class="header-navigation-section"> <!--you should use this section header for your all webpages guys don't forget!-->
        <div class="top-notification-content">
          <a href="https://www.gavi.org/covid19?utm_campaign=Campaign%204&utm_medium=Medium%201&utm_source=Source%205&gclid=CjwKCAiA2fmdBhBpEiwA4CcHza8fEP-xTbYiyuobYHE0uIyMyJpcGY2xOtT9YCa0ollecXjD4SX7kxoCaJcQAvD_BwE" class="top-notification-link">
            <i class="fa-solid fa-circle-info"></i>
            <span>Updates on COVID-19 (Corona Virus)</span> 
          </a>
        </div>
        <nav class="navigation-cloud">
          <section class="header-container company-header-logo">
            <a href="index.php">
              <img class="company-logo-picture" src="img/et-logo.png" alt="company-header-logo">
            </a>
          </section>
        
          <section class="navigation-cloud-section">
            <article class="top-navigation-cloud">
              <div class="site-section-selector">
                <div class="site-selector ">
                  <i class="site-selector site-selector-flag icon"></i>
                  <a href="#" class="country-site-lang links">EN</a>
                </div>
              </div>
              <div class="user-register-link">
                  <i class="fa-regular fa-user icon"></i>
                  <a href="register.php" target="_blank"
                  class="user-login-link user-signup-link links">&nbsp;&nbsp;&nbsp;Login&nbsp;|&nbsp;Signup</a>
              </div>
              <div class="notification-nav"> 
                <span class="notification-link">
                  <i class="fa-regular fa-bell icon"></i>&nbsp;&nbsp;
                  <a href="#" class="notifiacation-text-link links">Notifications</a>
                </span>
                <span class="notification-count">2</span>
              </div>
              <div class="search-navigation accordion">
                <input type="checkbox" class="search-input-link" name="accordion" id="search-accordion">
                <label for="search-accordion">
                  <span class="search-input-link search-btn-nav" id="srch-btn-nav">
                  <i class="fa-solid fa-magnifying-glass icon"></i>&nbsp;&nbsp;
                  Search
                </span>
                </label> 
                <div class="search-tooltip tooltip-container">
                  <input autocomplete="off" class="form-control et-search-input" id="search-nav-input" name="Search"
                  placeholder="What are you looking for ..." required="required" type="search" value="home" list="class">
                  <datalist id="class">
                    <option value="our offers"></option>
                    <option value="Business"></option>
                    <option value="information"></option>
                    <option value="hotels"></option>
                    <option value="S4Y-airlines"></option>
                    <option value="About us"></option>
                    <option value="paris"></option>
                    <option value="check-in"></option>
                    <option value="bookings"></option>
                    <option value="flights"></option>
                    <option value="washington"></option>
                    <option value="customer support"></option>
                    <option value="ethiopian group"></option>
                    <option value="subscribe"></option>
                    <option value="social media"></option>
                    <option value="airline-awards"></option>
                  </datalist>
                  <button id="et-search-btn" class="btn search-btn">Search</button>
                </div>
            </article>
            <article class="bottom-navigation-cloud">
              <div class="booking-section">
                <a href="book.php" target="_blank" class="booking-link alink">
                  Book a flight
                </a>
              </div>
              <div class="checking-section">
                <a href="flight.php" target="_blank" class="checking-link alink">
                  Flights
                </a>
              </div>
              <div class="loyalty-section link1" >
                <a href="about.html" target="_blank" class="loyalty-link alink">
                  About-Us
                </a>
              </div>
              <div class="help-section"
              style="cursor: help;
              ">
                  <a href="help.html" class="help-link link1" style="cursor: help;">
                    Help
                  </a>
              </div>
              <div class="menu-section">
                <i class="fa-solid fa-bars"></i>
                <a href="#" class="menu-link alink ">
                  Menu
                </a>
              </div>
            </article>
          </section>
        </nav>

        <!--  Feedback Button -->
        
        <aside id="feedbackTab">
          <button class="btn btn-outline-radius-et" style="width: max-content;">
            Feedback &nbsp; <i class="fa-regular fa-comments"></i>
          </button>
        </aside>
        <!--  end of feedback button-->
      </section>
      <section class="header-layout-container">
        <article class="flight-widget-container">
          <form action=" " id="booking-widget-form" novalidate="novalidate">
            <div class="header-container widget-container section-fluid">
              <input class="desc-btn" type="radio" id="desc-1" name="desc-btn" checked />
              <label for="desc-1" role="tab" aria-controls="flight" aria-selected="true">
                <span><i class="fas fa-plane-departure"></i></span>
                <span class="widget-btn-text"> Flights</span>
              </label>
              <input class="desc-btn" type="radio" id="desc-2" name="desc-btn" role="tab" aria-controls="flight"
                aria-selected="true" />
              <label for="desc-2">
                <span><i class="fas fa-bed"></i></span>
                <span class="widget-btn-text">Hotels</span>
              </label>
              <div class="section-fluid desc-sec accor-1">
                <article class="tab-content widget-body-container">
                  <div class="tab-pane active" id="searchflight" role="tabpanel" aria-labelledby="search-flight-tab">
                    <div class="card card-body">
                      <h5 class="widget-header-text">Your next adventure is just a search away</h5>
                      <div>
                        <div class="widget-input">
                          <span class="widget-inner-header-text">From</span>
                          <div class="d-flex">
                            <h4 class="w-100">
                              <span class="widget-origin-placeholder-text" style="display: none;">Select your origin</span>
                              <span class="airport-name origin-airport-name">New York</span> <span
                                class="airport-code origin-airport-code">
                                | LGA</span>
                            </h4>
                            <span class="dropdown-icon"><i class="fas fa-chevron-down fa-lg"></i></span>
                          </div>
                        </div>
                        <div class="airport-list origin-input-container dropdown" style="display: none;">
                          <input class="airport-input origin-input" placeholder="Choose your origin" autocomplete="off">
                          <div class="dropdown-menu"></div>
                          <button type="button" class="btn close-airport-list-modal">
                          </button>
                        </div>
                      </div>
            
                      <div>
                        <div class="widget-input">
                          <span class="widget-inner-header-text">To</span>
                          <div class="d-flex">
                            <h4 class="w-100">
                              <span class="widget-destination-placeholder-text"> Where are you going?</span>
                              <span class="airport-name destination-airport-name"> </span> <span
                                class="airport-code destination-airport-code"></span>
                            </h4>
                            <span class="dropdown-icon"><i class="fas fa-chevron-down fa-lg"></i></span>
                          </div>
                        </div>
                        <div class="airport-list destination-input-container dropdown" style="display: none;">
                          <input class="airport-input destination-input" placeholder="Choose your destination" autocomplete="off">
                          <div class="dropdown-menu"></div>
                          <button type="button" class="btn close-airport-list-modal">
                          </button>
                        </div>
                      </div>
            
                      <div class="col-12">
                        <div class="d-flex justify-content-center">
                          <button type="button" id="btn-book-et" class="btn btn-primary-et et-continue-btn">
                            <a href="book.php"
                            style="font-size: 1.25rem; font-weight: 700; line-height: 1.5rem; color: #FFFFFF">Continue</a>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <div class="section-fluid desc-sec accor-2">
                <article class="tab-content widget-body-container">
                  <div class="card card-body">
                    <p class="widget-header-text">Find great holiday package deals. Book
                      your flight and hotel together.</p>
                    <div class="d-flex justify-content-center justify-content-md-end mt-3">
                      <a class="btn btn-primary-et et-continue-btn pt-3" id="btn-hotel-et" href="https://www.ethiopianskylighthotel.com/" target="_blank">
                        Book Now
                        <i class="fa fa-external-link-alt external-link-icon"></i>
                      </a>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </form>
        </article>
        <article class="banner-text-container container flight-banner-text">
          <h1 style="color: #fff; font-family: 'Parisienne', cursive;font-family: 'Rouge Script', cursive; font-size:70px"
            class="hero-text">
            Celebrating the holiday season and stay with S4Y Airlines
          </h1>
        </article>
      </section>
    </header>
    <main>
      <section class="section-btn-container organized">
        <div class="widgets-container nonediplayed">
          <div class="rows">
            <div class="col-6 widget-button flexbutton">
              <div class="widget-button-insider rows mx-0" data-bs-toggle="modal" data-bs-target="#check-inModal">
                <i class="far fa-check-square"></i>
                <span> <a href="book.php">Booking-page</a></span>
                <i class="plus-icon">+</i>
                <hr>
              </div>
            </div>
            <div class="col-6 widget-button flexbutton">
              <div class="widget-button-insider rows">
                <i class="far fa-clock"></i>
                <span> <a href="flight.php">Flight Information</a></span>
                <i class="plus-icon">+</i>
                <hr>
              </div>
            </div>
            <div class="col-6 widget-button flexbutton">
              <div class="widget-button-insider rows">
                <i class="fas fa-plane-departure"></i>
                <span> <a href="register.php">My Bookings</a> </span> <i class="plus-icon">+</i>
                <hr>
              </div>
            </div>
            <div class="col-6 widget-button flexbutton">
              <div class="widget-button-insider rows mx-0">
                <i class="fas fa-id-card"></i>
                <span> <a href="about.html">About-Us</a> </span>
                <i class="plus-icon">+</i>
                <hr>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="offer-container">
        <h1>Find Our Offers</h1>
        <div class="card-container">
          <div class="card-wrapper">
            <div class="offer-card light">
              <div class="text-overlay">
                <h2>
                  New Delhi
                </h2>
                <img class="city-image" src="img/newdalihi.jpg" alt="let's flights with us to newdalihi">
                <h2 class="details-text">Unlimited</h2>
                <div class="price"><sup>$</sup>24,636 <small>/ flights</small></div>
                <div class="details-text">
                  <span>For 6 months</span>
                  <span>24/7 support</span>
                </div>
              </div>
              <div class="purchase-button-container">
                <h2 class="back-h2">Economic</h2>
                <i class="fa-solid fa-person "></i>
                <div class="discount-container">
                  <p class="discount-text"> 40% <br><small>off</small> </p>
                </div>
                <div class="purchase-button light"><a href="register.php">Buy now</a></div>
              </div>
            </div>
          </div>
          <div class="card-wrapper">
            <div class="offer-card dark">
              <div class="text-overlay">
                <h2>Washington</h2>
                <img src="img/washington.jpg" class="city-image" alt="flight with us to washington">
                <h2 class="details-text">Unlimited</h2>
                <div class="price"><sup>$</sup>25,456 <small>/ flights</small></div>
                <div class="details-text">
                  <span>for 1 month</span>
                  <span>24/7 support</span>
                </div>
              </div>
              <div class="purchase-button-container">
                <h2 class="back-h2">Business</h2>
                <i class="fa-solid fa-people-group"></i>
                <div class="discount-container">
                  <p class="discount-text"> 30% <br><small>off</small> </p>
                </div>
                <div class="purchase-button dark">Buy now</div>
              </div>
            </div>
          </div>
          <div class="card-wrapper">
            <div class="offer-card light">
              <div class="text-overlay">
                <h2>Paris</h2>
                <img src="img/paris_frace.jpg" class="city-image" alt="flight with us to paris">
                <h2 class="details-text">Unlimited</h2>
                <div class="price"><sup>$</sup>12,359 <small>/ flights</small></div>
                <div class="details-text">
                  <span>for 3 month</span>
                  <span>24/7 support</span>
                </div>
              </div>
              <div class="purchase-button-container">
                <h2 class="back-h2">Economic</h2>
                <i class="fa-solid fa-person"></i>
                <div class="discount-container">
                  <p class="discount-text"> 35% <br><small>off</small> </p>
                </div>
                <div class="purchase-button light">
                  <a href="register.php">Buy now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="card-wrapper">
            <div class="offer-card dark">
              <div class="text-overlay">
                <h2>Cairo</h2>
                <img src="img/cairo.jpg" class="city-image" alt="flight with us to cairo">
                <h2 class="details-text">Unlimited</h2>
                <div class="price"><sup>$</sup>17,657 <small>/ flights</small></div>
                <div class="details-text">
                  <span>for 12 month</span>
                  <span>24/7 support</span>
                </div>
              </div>
              <div class="purchase-button-container">
                <h2 class="back-h2">Business</h2>
                <i class="fa-solid fa-people-group"></i>
                <div class="discount-container">
                  <p class="discount-text"> 40% <br><small>off</small> </p>
                </div>
                <div class="purchase-button dark">
                  <a href="register.php">Buy now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="card-wrapper">
            <div class="offer-card light">
              <div class="text-overlay">
                <h2> beijing</h2>
                <img src="img/beijing.jpg" class="city-image" alt="flight with us to beijing">
                <h2 class="details-text">Unlimited</h2>
                <div class="price"><sup>$</sup>43,183 <small>/ flights</small></div>
                <div class="details-text">
                  <span>for 9 month</span>
                  <span>24/7 support</span>
                </div>
              </div>
              <div class="purchase-button-container">
                <h2 class="back-h2">Economic</h2>
                <i class="fa-solid fa-person"></i>
                <div class="discount-container">
                  <p class="discount-text"> 40% <br><small>off</small> </p>
                </div>
                <div class="purchase-button light"><a href="register.php">Buy now</a></div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <div class="header-containerwidget-container section-fluid">
        <input class="desc-btn" type="radio" id="pills-tab0" name="desc-btn" checked />
        <label for="pills-tab0" role="tab" aria-controls="flight" aria-selected="true">
          <span class="promotion-ul nav-link nav-link1"> Safe Journey With US!</span>
        </label>
        <input class="desc-btn" type="radio" id="pills-tab" name="desc-btn" role="tab" aria-controls="flight"
          aria-selected="true" />
        <label for="pills-tab">
          <span class="promotion-ul nav-link nav-link2">Feel Free Skylight Hotel!</span>
        </label>
        <div class="section-fluid desc-sec accor-1 home-promotions">
          <img src="img/kids trip.jpg" alt="flight-promotion-image">
        </div>
        <div class="section-fluid desc-sec accor-2 home-promotions">
          <article class="tab-content widget-body-container">
            <img src="Styles/hotelofairlines.jpg" alt="" style="object-fit: none;
            max-width: 100%;
            height: 100vh;
            margin-bottom: 2rem;">
            <div class="promotion-text-container">
              <span class="promotion-title hero-text">Wait In Comfort</span>
              <p class="promotion-p hero-text">
                Ethiopian Skylight Hotel, Addis Ababa.
              </p>
              <a href="https://www.ethiopianskylighthotel.com/in-terminal-hotel"
                class="btn btn-secondary-et promotion-btn" target="_blank">
                Learn More
              </a>
            </div>
          </article>
        </div>
      </div>

    </main>

    <footer class="footer index-footer">
      <section class="container">
        <div class="row footer_separator"> 
          <div class="d-none flexbox footer-separator-block">
            <!--Column1-->
            <div class="footer-pad">
              <h4>About us</h4>
              <ul class="list-unstyled">
                <li>
                  <a href="https://corporate.ethiopianairlines.com/aboutethiopian/careers" target="_blank"
                    rel="noopener">Careers</a>
                </li>
                <li>
                  <a href="https://corporate.ethiopianairlines.com/AboutEthiopian" target="_blank" rel="noopener">About
                    us</a>
                </li>
                <li>
                  <a href="https://corporate.ethiopianairlines.com/media" target="_blank" rel="noopener">Media</a>
                </li>
                <li>
                  <a href="https://corporate.ethiopianairlines.com/media/Tender-Documents" target="_blank"
                    rel="noopener">Tender Documents</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="d-none flexbox footer-separator-block">
            <!--Column1-->
            <div class="footer-pad">
              <h4>Information</h4>
              <ul class="list-unstyled">
                <li>
                  <a href="/et/information/essential-information/conditions-of-carriage" target="_blank"
                    rel="noopener">Conditions of carriage</a>
                </li>
                <li>
                  <a href="/et/en/services/services-at-the-airport" target="_blank" rel="noopener">Services at the
                    airport</a>
                </li>
                <li>
                  <a href="/et/en/information/special-needs/disability-service-request-form" target="_blank"
                    rel="noopener">Special Need Service Request Form</a>
                </li>
                <li>
                  <a href="/et/en/information/essential-information/optional-service-charges" target="_blank"
                    rel="noopener">Optional Service Charges</a>
                </li>
                <li>
                  <a href="/et/en/information/baggage-information/excess-and-special-baggage" target="_blank"
                    rel="noopener">Excess and Special Baggage</a>
                </li>
                <li>
                  <a href="/et/en/information/baggage-information" target="_blank" rel="noopener">Baggage Information</a>
                </li>
                <li>
                  <a href="/et/information/essential-information/tarmac-delay-contingencyplan" target="_blank"
                    rel="noopener">Tarmac Delay and Contingency Plan</a>
                </li>
                <li>
                  <a href="/et/en/information/essential-information/ethiopian-customer-commitment" target="_blank"
                    rel="noopener">Customer Commitment</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="d-none flexbox footer-separator-block">
            <!--Column1-->
            <div class="footer-pad">
              <h4>Customer Support</h4>
              <ul class="list-unstyled">
                <li>
                  <a href="/et/en/privacy-policy" target="_blank" rel="noopener">Privacy Policy</a>
                </li>
                <li>
                  <a href="/et/en/information/special-needs/website-accessibility" target="_blank" rel="noopener">Website
                    Accessibility</a>
                </li>
                <li>
                  <a href="/et/en/services/help-and-contact/frequently-asked-questions" target="_blank"
                    rel="noopener">Frequently Asked Questions</a>
                </li>
                <li>
                  <a href="https://crm.ethiopianairlines.com/" target="_blank" rel="noopener">Customer Feedback</a>
                </li>
                <li>
                  <a href="/et/en/services/help-and-contact/call-center-numbers" target="_blank" rel="noopener">Call Center
                    Numbers</a>
                </li>
                <li>
                  <a href="/et/en/services/help-and-contact" target="_blank" rel="noopener">Help and Contacts</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="d-none flexbox footer-separator-block">
            <!--Column1-->
            <div class="footer-pad">
              <h4>Ethiopian Group</h4>
              <ul class="list-unstyled">
                <li>
                  <a href="http://www.ethiopian-airports.com" target="_blank" rel="noopener">Ethiopian Airports</a>
                </li>
                <li>
                  <a href="https://www.ethiopianskylighthotel.com" target="_blank" rel="noopener">Ethiopian Skylight
                    Hotel</a>
                </li>
                <li>
                  <a href="https://corporate.ethiopianairlines.com/catering" target="_blank" rel="noopener">In-flight
                    Catering</a>
                </li>
                <li>
                  <a href="https://corporate.ethiopianairlines.com/ground-service" target="_blank" rel="noopener">Ground
                    Services</a>
                </li>
                <li>
                  <a href="https://corporate.ethiopianairlines.com/mro" target="_blank" rel="noopener">Maintenance, Repair
                    and Overhaul</a>
                </li>
                <li>
                  <a href="https://corporate.ethiopianairlines.com/eaa" target="_blank" rel="noopener">Aviation Academy</a>
                </li>
                <li>
                  <a href="https://cargo.ethiopianairlines.com/" target="_blank" rel="noopener">Cargo</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section class="footer-media-container"> 
        <div class="flexbox-container">
          <div class=" flexbox1 col-lg-4">
            <div class="subscriber-container">
              <h3>Subscribe</h3>   
              <p class="text-muted" id="SubscribeFormInfo-1">
                Subscribe to our email newsletter to receive updates
              </p>
              <div class="footer-form-container">
                <div class="form-group form-email-input">
                  <input autocomplete="off" class="form-control et-form-input" id="subscriber-email-home" name="Email" placeholder="Email address" required="required" type="text" value="">
                </div>
                <div class="form-group form-btn">
                  <button id="et-subscribe-btn" class="btn btn-outline-et subscribe-btn w-100"><a href="register.php">Subscribe</a> </button>
                </div>
              </div>
            </div>
          </div>
          <div class=" flexbox2 col-lg-4">
            <div class="footer-pad">
              <h4>Social Media</h4>
              <p style="margin-bottom: 0px">Connect with us on social media
              </p>
              <ul class="list-unstyled social-media-list">
                <li style="margin-top: 0.425rem"><a title="Facebook" id="facebook " target="_blank " rel="noopener "
                    href="https://www.facebook.com/ethiopianairlines "><em class="fab fa-facebook-f"></em><span
                      class="sr-only">Facebook</span>
                  </a>
                </li>
                <li><a title="Twitter " id="twitter " target="_blank "
                    href="https://twitter.com/flyethiopian " class="navbar-text socialmedia-link"><em
                      class="fab fa-twitter"></em><span class="sr-only">Twitter</span>
                  </a>
                </li>
                <li><a title="YouTube " id="youtube " target="_blank "
                    href="https://www.youtube.com/user/flyethiopian " class="navbar-text socialmedia-link"><em
                      class="fab fa-youtube"></em><span class="sr-only">YouTube</span>
                  </a>
                </li>
                <li><a title="Instagram " id="instagram " target="_blank "
                    href="https://instagram.com/fly.ethiopian " class="navbar-text socialmedia-link"><em
                      class="fab fa-instagram"></em><span class="sr-only">Instagram</span>
                  </a>
                </li>
                <li><a title="Weibo " id="weibo " target="_blank "
                    href="http://weibo.com/ethiopianairlinesCN " class="navbar-text socialmedia-link"><em
                      class="fab fa-weibo"></em><span class="sr-only">Weibo</span>
                  </a>
                </li>
                <li><a title="LinkedIn " id="linkedin " target="_blank "
                    href="https://www.linkedin.com/company/ethiopian-airlines " class="navbar-text socialmedia-link"><em
                      class="fab fa-linkedin-in"></em><span class="sr-only">LinkedIn</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section class="award-container">
        <div class="flexbox-container " id="awardbox-container">
          <div class="image-container">
            <img src="img/best-airline-star.png" alt="award image">
          </div>
          <p>Best Business and Economy Class Airlines in Africa for 4 Years in a Row</p>
        </div>
      </section>
      <section class="copyright-container">
        <div class="flexbox-container award-container">
          <p>&copy; S4Y - AIRLINES. &nbsp;All Rights Are Reserved</p>
        </div>
      </section>
    </footer>
  </div>
</body>
</html>
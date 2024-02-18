<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
                  <!-- icon-link(font-awesome)  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
                  <!-- font-family links(font-awesome) -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,500;0,600;1,500;1,600&display=swap"
      rel="stylesheet">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap"
      rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
                  <!-- style-links and favicon-links -->
   <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
   <link rel="stylesheet" href="Styles/book.css">
   <link rel="stylesheet" href="Styles/header.css">
   <link rel="stylesheet" href="Styles/footer.css">
   <link rel="stylesheet" href="Styles/general.css">
   <title>Booking area</title>
</head>
<body>

   <header class="header-navigation-section">
      <!--you should use this section header for your all webpages sola don't forget!-->
      <div class="top-notification-content">
         <a href="https://www.gavi.org/covid19?utm_campaign=Campaign%204&utm_medium=Medium%201&utm_source=Source%205&gclid=CjwKCAiA2fmdBhBpEiwA4CcHza8fEP-xTbYiyuobYHE0uIyMyJpcGY2xOtT9YCa0ollecXjD4SX7kxoCaJcQAvD_BwE"
            class="top-notification-link">
            <i class="fa-solid fa-circle-info"></i>
            <span>Updates on COVID-19 (Corona Virus)</span>
         </a>
      </div>
      <nav class="navigation-cloud header-book-section">
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
                     <a href="#" class="notification-text-link links">Notifications</a>
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
                        placeholder="What are you looking for ..." required="required" type="search" value="" list="list-country">
                     <button id="et-search-btn" class="btn search-btn">Search</button>
                  </div>  
            </article>
            <article class="bottom-navigation-cloud">
               <div class="booking-section">
                  <a href="#" class="booking-link alink">
                     Book a flight
                  </a>
               </div>
               <div class="checking-section">
                  <a href="flight.php" class="checking-link alink">
                     Flights
                  </a>
               </div>
               <div class="loyalty-section link1">
                  <a href="about.html" target="_blank" class="loyalty-link alink">
                     About-Us
                  </a>
               </div>
               <div class="help-section">
                  <a href="help.html" class="help-link link1" style="cursor: help;
                              ">
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
   </header>
   <main>
      <section class="header-booking-text">
         <h2 class="hero-heading">
            Find the Best Fares
         </h2>
         <p class="hero-text">
            Discover the most affordable travel options
         </p>
      </section>
      <section class="booking-form-layout">
         <div class="header-containers widget-container section-fluid">
            <input class="desc-btn" type="radio" id="desc-1" name="desc-btn" checked />
            <label for="desc-1" role="tab" aria-controls="flight" aria-selected="true">
               <span class="widget-btn-text"> One-way</span>
            </label>
            <input class="desc-btn" type="radio" id="desc-2" name="desc-btn" role="tab" aria- controls="flight"
               aria-selected="true" />
            <label for="desc-2">
               <span class="widget-btn-text round-trip" id="desc-2">Round Trip</span>
            </label>
            <article class="section-fluid desc-sec  accor-1">
               <div class="booking-form-container">
                  <div class="booking-form">
                     <div class="input-area">
                        <fieldset class="booking-fieldset">
                           <legend class="widget-inner-header-text">From</legend>
                           <input class="widget-input" name="origin-input" type="text" placeholder="Enter your origin"
                              list="list-country">
                           <datalist id="list-country">
                              <option value="US">United States</option>
                              <option value="EU">Europe</option>
                              <option value="GB">United Kingdom</option>
                              <option value="AU">Australia</option>
                              <option value="AT">Austria</option>
                              <option value="AZ">Azerba</option>
                              <option value="BS">Bahamas</option>
                              <option value="BH">Bahrain</option>
                              <option value="BD">Bangladesh</option>
                              <option value="BB">Barbados</option>
                              <option value="BY">Belarus</option>
                              <option value="BE">Belgium</option>
                              <option value="BJ">Taiwan</option>
                              <option value="BM">Morocco</option>
                              <option value="BT">Bhutan</option>
                              <option value="BO">Bolivia</option>
                              <option value="BA">Bosnia</option>
                              <option value="BS">Bosnia and Herzegovina</option>
                              <option value="BV">Bosnia and Herzegovina</option>
                              <option value="BR">Botswana</option>
                              <option value="IO">British Indian Ocean Territory</option>
                              <option value="BN">Brunei Darussalam</option>
                              <option value="BG">Bulgaria</option>
                              <option value="BF">Burkina Faso</option>
                              <option value="BI">Burundi</option>
                              <option value="KH">Cambodia</option>
                              <option value="CM">Cameroon</option>
                              <option value="CA">Canada</option>
                              <option value="CV">Cape Verde</option>
                              <option value="KY">Cayman Islands</option>
                              <option value="CF">Central African Republic</option>
                              <option value="TD">Chad</option>
                              <option value="CL">Chile</option>
                              <option value="CO">Colombia</option>
                              <option value="KM">Comoros</option>
                              <option value="CG">Congo</option>
                              <option value="DK">Denmark</option>
                              <option value="Paris">France</option>
                              <option value="London">Britain</option>
                              <option value="Tokyo">Japan</option>
                              <option value="Beijing">China</option>
                              <option value="Addis-Ababa">Ethiopia</option>
                              <option value="Cairo">Egypt</option>
                              <option value="Madrid">Spain</option>
                              <option value="Santiago">Santiago</option>
                              <option value="Rome">Italy</option>
                              <option value="Washington">USA</option>
                              <option value="Western">South Africa</option>
                              <option value="Asmara">Eritrea</option>
                              <option value="New Delhi">India</option>
                              <option value="Nairobi">Kenya</option>
                              <option value="Istanbul">Turkey</option>
                              <option value="Israel">Israel</option>
                           </datalist>
                        </fieldset>
                     </div>
                     <div class="input-area">
                        <fieldset class="booking-fieldset">
                           <legend class="widget-inner-header-text">To</legend>
                           <input class="widget-input" name="origin-input" type="text" placeholder="Where are you going?"
                              list="list-country">
                        </fieldset>
                     </div>
                     <div class="input-area">
                        <fieldset class="booking-fieldset">
                           <legend class="widget-inner-header-text">class</legend>
                           <input class="widget-input class-option" name="origin-input" type="text" placeholder="" list="class">
                           <datalist id="class">
                              <option value="Economic"></option>
                              <option value="Business"></option>
                           </datalist>
                        </fieldset>
                     </div>
                  </div>
                  <div class="booking-form4" id="date-selection">
                     <div class="input-area">
                        <label for="departure-date">Departure date</label>
                        <input class="widget-input" id="departure-date" name="origin-input" type="date">
                     </div>
                  </div>
                  <div class="booking-form2">
                     <div class="traveler-area">
                        <label for="traveller" id="traveler-id">
                           <p>Travelers and travel class</p>
                        </label>
                        <div class="travelers">
                           <fieldset class="booking-fieldset">
                              <input class="widget-input" id="traveler" name="origin-input" type="text"
                                 placeholder="1 Passengers, All" list="travelers-type">
                              <datalist id="travelers-type">
                                 <option value=" 1 Passengers">All</option>
                                 <option value=" 2 Passengers">All</option>
                                 <option value=" 3 Passengers">All</option>
                                 <option value=" 4 Passengers">All</option>
                              </datalist>
                           </fieldset>
                        </div>
                     </div>
                     <div class="traveler-area file-choosing-container">
                        <label for="traveler-input" id="traveler-file">
                           <p>
                              Upload Your Personal Info(passport)
                           </p>
                        </label>
                        <div class="input-area">
                           <button type="button" class="file-content">
                              <i class="fa fa-upload"> &nbsp; Upload File</i>
                              <input class="widget-input" id="traveler-input" name="origin-input" type="file">
                           </button>
         
                        </div>
                     </div>
                  </div>
                  <div class="booking-form3">
                     <input id="checkbox" type="checkbox" />
                     <label for="checkbox" class="checkbox"> </label>
                     <label for="checkbox">Book with miles</label>
                  </div>
                  <div class="form-group form-btn flight-footer-btn">
                     <a href="loader.html" class="footer-btns btn-submit">
                        <input type="submit" id="booking-submit-btn" class="btn btn-outline-et w-100" />
                     </a>
                     <button id="flight-search-btn" class="btn footer-btns btn-search btn-outline-et  w-100"><a
                           href="flight.php">Search flights</a>
                     </button>
                  </div>
               </div>
            </article>
            <article class="section-fluid desc-sec accor-2">
               <div class="booking-form-container">
                  <div class="booking-form">
                     <div class="input-area">
                        <fieldset class="booking-fieldset">
                           <legend class="widget-inner-header-text">From</legend>
                           <input class="widget-input" name="origin-input" type="text" placeholder="Enter your origin"
                              list="list-country">
                           <datalist id="list-country">
                              <option value="US">United States</option>
                              <option value="EU">Europe</option>
                              <option value="GB">United Kingdom</option>
                              <option value="AU">Australia</option>
                              <option value="AT">Austria</option>
                              <option value="AZ">Azerba</option>
                              <option value="BS">Bahamas</option>
                              <option value="BH">Bahrain</option>
                              <option value="BD">Bangladesh</option>
                              <option value="BB">Barbados</option>
                              <option value="BY">Belarus</option>
                              <option value="BE">Belgium</option>
                              <option value="BJ">Taiwan</option>
                              <option value="BM">Morocco</option>
                              <option value="BT">Bhutan</option>
                              <option value="BO">Bolivia</option>
                              <option value="BA">Bosnia</option>
                              <option value="BS">Bosnia and Herzegovina</option>
                              <option value="BV">Bosnia and Herzegovina</option>
                              <option value="BR">Botswana</option>
                              <option value="IO">British Indian Ocean Territory</option>
                              <option value="BN">Brunei Darussalam</option>
                              <option value="BG">Bulgaria</option>
                              <option value="BF">Burkina Faso</option>
                              <option value="BI">Burundi</option>
                              <option value="KH">Cambodia</option>
                              <option value="CM">Cameroon</option>
                              <option value="CA">Canada</option>
                              <option value="CV">Cape Verde</option>
                              <option value="KY">Cayman Islands</option>
                              <option value="CF">Central African Republic</option>
                              <option value="TD">Chad</option>
                              <option value="CL">Chile</option>
                              <option value="CO">Colombia</option>
                              <option value="KM">Comoros</option>
                              <option value="CG">Congo</option>
                              <option value="DK">Denmark</option>
                              <option value="Paris">France</option>
                              <option value="London">Britain</option>
                              <option value="Tokyo">Japan</option>
                              <option value="Beijing">China</option>
                              <option value="Addis-Ababa">Ethiopia</option>
                              <option value="Cairo">Egypt</option>
                              <option value="Madrid">Spain</option>
                              <option value="Santiago">Santiago</option>
                              <option value="Rome">Italy</option>
                              <option value="Washington">USA</option>
                              <option value="Western">South Africa</option>
                              <option value="Asmara">Eritrea</option>
                              <option value="New Delhi">India</option>
                              <option value="Nairobi">Kenya</option>
                              <option value="Istanbul">Turkey</option>
                              <option value="Israel">Israel</option>
                           </datalist>
                        </fieldset>
                     </div>
                     <div class="input-area">
                        <fieldset class="booking-fieldset">
                           <legend class="widget-inner-header-text">To</legend>
                           <input class="widget-input" name="origin-input" type="text" placeholder="Where are you going?"
                              list="list-country">
                        </fieldset>
                     </div>
                     <div class="input-area">
                        <fieldset class="booking-fieldset">
                           <legend class="widget-inner-header-text">class</legend>
                           <input class="widget-input class-option" name="origin-input" type="text" placeholder="" list="class">
                           <datalist id="class">
                              <option value="Economic"></option>
                              <option value="Business"></option>
                           </datalist>
                        </fieldset>
                     </div>
                  </div>
                  <div class="booking-form4" id="roundtrip-date-selection">
                     <div class="input-area">
                        <label for="roundtrip-departure-date">Departure date</label>
                        <input class="widget-input" id="roundtrip-departure-date" name="origin-input" type="date">
                     </div>
                     <div class="input-area">
                        <label for="roundtrip-return-date">Return date</label>
                        <input class="widget-input" id="roundtrip-return-date" name="origin-input" type="date">
                     </div>
                  </div>
                  <div class="booking-form2">
                     <div class="traveler-area">
                        <label for="traveller" id="traveler-id">
                           <p>Travelers and travel class</p>
                        </label>
                        <div class="travelers">
                           <fieldset class="booking-fieldset">
                              <input class="widget-input" id="traveler" name="origin-input" type="text"
                                 placeholder="1 Passengers, All" list="travelers-type">
                              <datalist id="travelers-type">
                                 <option value=" 1 Passengers">All</option>
                                 <option value=" 2 Passengers">All</option>
                                 <option value=" 3 Passengers">All</option>
                                 <option value=" 4 Passengers">All</option>
                              </datalist>
                           </fieldset>
                        </div>
                     </div>
                     <div class="traveler-area file-choosing-container">
                        <label for="traveler-input" id="traveler-file">
                           <p>
                              Upload Your Personal Info(passport)
                           </p>
                        </label>
                        <div class="input-area">
                           <button type="button" class="file-content">
                              <i class="fa fa-upload"> &nbsp; Upload File</i>
                              <input class="widget-input" id="traveler-input" name="origin-input" type="file">
                           </button>
         
                        </div>
                     </div>
                  </div>
                  <div class="booking-form3">
                     <input id="checkbox" type="checkbox" />
                     <label for="checkbox" class="checkbox"> </label>
                     <label for="checkbox">Book with miles</label>
                  </div>
                  <div class="form-group form-btn">
                     <a href="loader.html" class="footer-btns btn-submit">
                        <input type="submit" id="booking-submit-btn" class="btn btn-outline-et w-100" />
                     </a>
                     <button id="flight-search-btn" class="btn footer-btns btn-search btn-outline-et  w-100"><a
                           href="flight.php">Search flights</a>
                     </button>
                  </div>
               </div>
            </article>
         </div>
      </section>
   </main>

   <footer class="footer">
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
                        <a href="https://corporate.ethiopianairlines.com/AboutEthiopian" target="_blank"
                           rel="noopener">About
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
                        <a href="/et/en/information/baggage-information" target="_blank" rel="noopener">Baggage
                           Information</a>
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
                        <a href="/et/en/information/special-needs/website-accessibility" target="_blank"
                           rel="noopener">Website
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
                        <a href="/et/en/services/help-and-contact/call-center-numbers" target="_blank" rel="noopener">Call
                           Center
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
                        <a href="https://corporate.ethiopianairlines.com/ground-service" target="_blank"
                           rel="noopener">Ground
                           Services</a>
                     </li>
                     <li>
                        <a href="https://corporate.ethiopianairlines.com/mro" target="_blank" rel="noopener">Maintenance,
                           Repair
                           and Overhaul</a>
                     </li>
                     <li>
                        <a href="https://corporate.ethiopianairlines.com/eaa" target="_blank" rel="noopener">Aviation
                           Academy</a>
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
                        <input autocomplete="off" class="form-control et-form-input" id="subscriber-email-home"
                           name="Email" placeholder="Email address" required="required" type="text" value="">
                     </div>
                     <div class="form-group form-btn">
                        <button id="et-subscribe-btn" class="btn btn-outline-et subscribe-btn w-100"><a
                              href="register.php">Subscribe</a> </button>
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
                     <li><a title="Twitter " id="twitter " target="_blank " href="https://twitter.com/flyethiopian "
                           class="navbar-text socialmedia-link"><em class="fab fa-twitter"></em><span
                              class="sr-only">Twitter</span>
                        </a>
                     </li>
                     <li><a title="YouTube " id="youtube " target="_blank "
                           href="https://www.youtube.com/user/flyethiopian " class="navbar-text socialmedia-link"><em
                              class="fab fa-youtube"></em><span class="sr-only">YouTube</span>
                        </a>
                     </li>
                     <li><a title="Instagram " id="instagram " target="_blank " href="https://instagram.com/fly.ethiopian "
                           class="navbar-text socialmedia-link"><em class="fab fa-instagram"></em><span
                              class="sr-only">Instagram</span>
                        </a>
                     </li>
                     <li><a title="Weibo " id="weibo " target="_blank " href="http://weibo.com/ethiopianairlinesCN "
                           class="navbar-text socialmedia-link"><em class="fab fa-weibo"></em><span
                              class="sr-only">Weibo</span>
                        </a>
                     </li>
                     <li><a title="LinkedIn " id="linkedin " target="_blank "
                           href="https://www.linkedin.com/company/ethiopian-airlines "
                           class="navbar-text socialmedia-link"><em class="fab fa-linkedin-in"></em><span
                              class="sr-only">LinkedIn</span>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </section>
      <section class="copyright-container">
         <div class="flexbox-container award-container">
            <p>&copy; S4Y - AIRLINES. &nbsp;All Rights Are Reserved</p>
         </div>
      </section>
   </footer>
</body>
</html>

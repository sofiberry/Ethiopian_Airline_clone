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
   <link rel="stylesheet" href="Styles/flight.css">
   <link rel="stylesheet" href="Styles/footer.css">
   <title>Booking Flights</title>
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
      <nav class="navigation-cloud">
         <section class="header-container company-header-logo">
            <a href="index.php" target="_blank">
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
                        placeholder="What are you looking for ..." required="required" type="search" value="flights" list="class">
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
                        <option value="US">america</option>
                        <option value="canda"></option>
                        <option value="cairo">Egypt</option>
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
                  <a href="book.php" class="booking-link alink">
                     Book a flight
                  </a>
               </div>
               <div class="checking-section">
                  <a href="#" class="checking-link alink">
                     Flights
                  </a>
               </div>
               <div class="loyalty-section link1">
                  <a href="about.html" class="loyalty-link alink">
                     About-Us
                  </a>
               </div>
               <div class="help-section">
                  <a href="help.html" class="help-link link1"
                  style="cursor: help;
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
      <div class="header-containers widget-container section-fluid">
         <h2 class="header-first-text">TRAVEL 4EVER</h2>
         <h2 class="flights-header-text">
            <i class="fa-solid fa-plane-departure"></i>&nbsp;
            Find our <span>latest</span> flights here ...
         </h2>
         <input class="desc-btn" type="radio" id="desc-1" name="desc-btn" checked />
         <label for="desc-1" role="tab" aria-controls="flight" aria-selected="true">
            <span class="widget-btn-text"> Economic</span>
         </label>
         <input class="desc-btn" type="radio" id="desc-2" name="desc-btn" role="tab" aria- 
         controls="flight" aria-selected="true" />
         <label for="desc-2">
            <span class="widget-btn-text " id="business">Business</span>
         </label>
         <section class="section-fluid desc-sec  accor-1">
            <h2 style="margin: 20px;">
               <i class="fa-solid fa-plane-circle-check"></i>
               See Our latest flights of Economic Class ...</h2><br>
            <article class="flights-body">
               
               <div class="flights-body-content flight-card">
                  <h4 class="flight-heading">Unlimited</h4>
                  <img src="img/cairo.jpg" alt="cairo flight card" class="flight-card-img">
                  <p title="Cairo ⇌ Addis Ababa">Cairo ⇌ Addis Ababa</p>

                  <div class="flight-type">
                     <div box-1>

                        <strong style="padding:3px 8px;font-size:12px;background-color: #2c74b3;
                                 font-family: 'Montserrat';color:#FFFFFF" title="Unlimited Flights">Unlimited</strong>
                        <small id="text-small">Flights</small>
                     </div>
                     <div box-2>
                        <h2>12</h2>
                        <small>Months</small>
                     </div>
                  </div>
                  <h3><small><sup>$</sup></small>5,719</h3>
                  <div class="flight-type detail-discount">
                     <span><small>up to</small>Save</span>
                     <span><small class="small-gray"><s><sup>$</sup>9,530</s></small>$3810</span>
                     <div class="discount-container">
                        <p class="discount-text"> 40% <br><small>off</small> </p>
                     </div>
                  </div>
                  <div class="button-container">
                     <button type="button" name="button" class="gradient-btn-1">
                        <a href="register.php">Buy now</a>
                     </button>
                  </div>
               </div>
               <div class="flights-body-content flight-card">
                  <h4 class="flight-heading">Unlimited</h4>
                  <img src="img/newdalihi.jpg" alt="new delhi flight card" class="flight-card-img">
                  <p title="New Delhi ⇌ Addis Ababa"> New Delhi ⇌ Addis Ababa</p>

                  <div class="flight-type">
                     <div box-1>
                        <strong style="padding:3px 8px;font-size:12px;background-color: #2c74b3;
                                 font-family: 'Montserrat';color:#FFFFFF" title="Unlimited Flights">
                           Unlimited
                        </strong>
                        <small id="text-small">Flights</small>
                     </div>
                     <div box-2>
                        <h2>9</h2>
                        <small>Months</small>
                     </div>
                  </div>
                  <h3><small><sup>$</sup></small>43,183</h3>
                  <div class="flight-type detail-discount">
                     <span><small>up to</small>Save</span>
                     <span><small class="small-gray"><s><sup>$</sup>72,000</s></small>$28,800</span>
                     <div class="discount-container">
                        <p class="discount-text"> 40% <br><small>off</small> </p>
                     </div>
                  </div>
                  <div class="button-container">
                     <button type="button" name="button" class="gradient-btn-1"><a href="register.php">Buy now</a>
                     </button>
                  </div>
               </div>
               <div class="flights-body-content flight-card">
                  <h4 class="flight-heading">Unlimited</h4>
                  <img src="img/washington.jpg" alt="washington flight card" class="flight-card-img">
                  <p title="Washington ⇌ Addis Ababa"> Washington ⇌ Addis Ababa</p>

                  <div class="flight-type">
                     <div box-1>
                        <strong style="padding:3px 8px;font-size:12px;background-color: #2c74b3;
                                 font-family: 'Montserrat';color:#FFFFFF" title="Unlimited Flights">
                           Unlimited
                        </strong>
                        <small id="text-small">Flights</small>
                     </div>
                     <div box-2>
                        <h2>1</h2>
                        <small>Months</small>
                     </div>
                  </div>
                  <h3><small><sup>$</sup></small>7,562</h3>
                  <div class="flight-type detail-discount">
                     <span><small>up to</small>Save</span>
                     <span><small class="small-gray"><s><sup>$</sup>12,600</s></small>$5,040</span>
                     <div class="discount-container">
                        <p class="discount-text"> 40% <br><small>off</small> </p>
                     </div>
                  </div>
                  <div class="button-container">
                     <button type="button" name="button" class="gradient-btn-1"><a href="register.php"> Buy now</a>
                     </button>
                  </div>
               </div>
               <div class="flights-body-content flight-card">
                  <h4 class="flight-heading">Unlimited</h4>
                  <img src="img/paris_frace.jpg" alt=" paris flight card" class="flight-card-img">
                  <p title="Paris ⇌ Addis Ababa"> Paris ⇌ Addis Ababa</p>

                  <div class="flight-type">
                     <div box-1>
                        <strong style="padding:3px 8px;font-size:12px;background-color: #2c74b3;
                                 font-family: 'Montserrat';color:#FFFFFF" title="Unlimited Flights">
                           Unlimited
                        </strong>
                        <small id="text-small">Flights</small>
                     </div>
                     <div box-2>
                        <h2>3</h2>
                        <small>Months</small>
                     </div>
                  </div>
                  <h3><small><sup>$</sup></small>12,359</h3>
                  <div class="flight-type detail-discount">
                     <span><small>up to</small>Save</span>
                     <span><small class="small-gray"><s><sup>$</sup>20,600</s></small>$8,800</span>
                     <div class="discount-container">
                        <p class="discount-text"> 40% <br><small>off</small> </p>
                     </div>
                  </div>
                  <div class="button-container">
                     <button type="button" name="button" class="gradient-btn-1"><a href="register.php"> Buy now</a></button>
                  </div>
               </div>
               <div class="flights-body-content flight-card">
                  <h4 class="flight-heading">Unlimited</h4>
                  <img src="img/beijing.jpg" alt=" beijing flight card" class="flight-card-img">
                  <p title="Beijing ⇌ Addis Ababa"> Beijing ⇌ Addis Ababa</p>

                  <div class="flight-type">
                     <div box-1>
                        <strong style="padding:3px 8px;font-size:12px;background-color: #2c74b3;
                                 font-family: 'Montserrat';color:#FFFFFF" title="Unlimited Flights">
                           Unlimited
                        </strong>
                        <small id="text-small">Flights</small>
                     </div>
                     <div box-2>
                        <h2>9</h2>
                        <small>Months</small>
                     </div>
                  </div>
                  <h3><small><sup>$</sup></small>43,183</h3>
                  <div class="flight-type detail-discount">
                     <span><small>up to</small>Save</span>
                     <span><small class="small-gray"><s><sup>$</sup>72,000</s></small>$28,800</span>
                     <div class="discount-container">
                        <p class="discount-text"> 40% <br><small>off</small> </p>
                     </div>
                  </div>
                  <div class="button-container">
                     <button type="button" name="button" class="gradient-btn-1"><a href="register.php">Buy now</a></button>
                  </div>
               </div>
               <div class="flights-body-content flight-card">
                  <img src="img/beijing.jpg" alt=" beijing flight card" class="flight-card-img">
                  <p title="Beijing ⇌ Addis Ababa"> Beijing ⇌ Addis Ababa</p>

                  <div class="flight-type limited-flight">
                     <div class="box-1">
                        <h2>30</h2>
                        <small>Flights</small>
                     </div>
                     <div class="box-2">
                        <h2>3</h2>
                        <small>Months</small>
                     </div>
                     <div class="box-3">
                        <h3 class="limited-price"><small><sup>$</sup></small>483</h3>
                        <small class="unlimited-small" id="flight-situation">per one-way</small>
                     </div>
                  </div>
                  <h3> <small class="unlimited-small">Total Price: </small> <span><sup id="dollar">$</sup>6390</span>
                  </h3>
                  <div class="flight-type detail-discount">
                     <span><small>up to</small>Save</span>
                     <span><small class="small-gray"><s><sup>$</sup>72,000</s></small>$28,800</span>
                     <div class="discount-container">
                        <p class="discount-text"> 40% <br><small>off</small> </p>
                     </div>
                  </div>
                  <div class="button-container">
                     <button type="button" name="button" class="gradient-btn-1"><a href="register.php">Buy now</a>
                     </button>
                  </div>
               </div>
               <div class="flights-body-content flight-card">
                  <img src="img/istanbul.jpg" alt=" beijing flight card" class="flight-card-img">
                  <p title="istanbul ⇌ Addis Ababa"> Istanbul ⇌ Addis Ababa</p>

                  <div class="flight-type limited-flight">
                     <div class="box-1">
                        <h2>20</h2>
                        <small>Flights</small>
                     </div>
                     <div class="box-2">
                        <h2>2</h2>
                        <small>Months</small>
                     </div>
                     <div class="box-3">
                        <h3 class="limited-price"><small><sup>$</sup></small>383</h3>
                        <small class="unlimited-small" id="flight-situation">per one-way</small>
                     </div>
                  </div>
                  <h3> <small class="unlimited-small">Total Price: </small> <span><sup id="dollar">$</sup>6990</span>
                  </h3>
                  <div class="flight-type detail-discount">
                     <span><small>up to</small>Save</span>
                     <span><small class="small-gray"><s><sup>$</sup>7,000</s></small>$8,800</span>
                     <div class="discount-container">
                        <p class="discount-text"> 30% <br><small>off</small> </p>
                     </div>
                  </div>
                  <div class="button-container">
                     <button type="button" name="button" class="gradient-btn-1"><a href="register.php">Buy now</a>
                     </button>
                  </div>
               </div>
               <div class="flights-body-content flight-card">
                  <img src="img/veina.jpg" alt=" beijing flight card" class="flight-card-img">
                  <p title="istanbul ⇌ Addis Ababa"> Istanbul ⇌ Addis Ababa</p>

                  <div class="flight-type limited-flight">
                     <div class="box-1">
                        <h2>30</h2>
                        <small>Flights</small>
                     </div>
                     <div class="box-2">
                        <h2>12</h2>
                        <small>Months</small>
                     </div>
                     <div class="box-3">
                        <h3 class="limited-price"><small><sup>$</sup></small>213</h3>
                        <small class="unlimited-small" id="flight-situation">per one-way</small>
                     </div>
                  </div>
                  <h3> <small class="unlimited-small">Total Price: </small> <span><sup id="dollar">$</sup>6390</span>
                  </h3>
                  <div class="flight-type detail-discount">
                     <span><small>up to</small>Save</span>
                     <span><small class="small-gray"><s><sup>$</sup>320</s></small>$115</span>
                     <div class="discount-container">
                        <p class="discount-text"> 30% <br><small>off</small> </p>
                     </div>
                  </div>
                  <div class="button-container">
                     <button type="button" name="button" class="gradient-btn-1"><a href="register.php">Buy now</a>
                     </button>
                  </div>
               </div>
               <div class="flights-body-content flight-card">
                  <img src="img/nairobi.jpg" alt=" beijing flight card" class="flight-card-img">
                  <p title="Nairobi ⇌ Addis Ababa"> Nairobi ⇌ Addis Ababa</p>

                  <div class="flight-type limited-flight">
                     <div class="box-1">
                        <h2>26</h2>
                        <small>Flights</small>
                     </div>
                     <div class="box-2">
                        <h2>12</h2>
                        <small>Months</small>
                     </div>
                     <div class="box-3">
                        <h3 class="limited-price"><small><sup>$</sup></small>203</h3>
                        <small class="unlimited-small" id="flight-situation">per one-way</small>
                     </div>
                  </div>
                  <h3> <small class="unlimited-small">Total Price: </small> <span><sup id="dollar">$</sup>5252</span>
                  </h3>
                  <div class="flight-type detail-discount">
                     <span><small>up to</small>Save</span>
                     <span><small class="small-gray"><s><sup>$</sup>253</s></small>$51</span>
                     <div class="discount-container">
                        <p class="discount-text"> 20% <br><small>off</small> </p>
                     </div>
                  </div>
                  <div class="button-container">
                     <button type="button" name="button" class="gradient-btn-1"><a href="register.php">Buy now</a>
                     </button>
                  </div>
               </div>
               <div class="flights-body-content flight-card">
                  <h4 class="flight-heading">Unlimited</h4>
                  <img src="img/washington.jpg" alt="washington flight card" class="flight-card-img">
                  <p title="Washington ⇌ Addis Ababa"> Washington ⇌ Addis Ababa</p>

                  <div class="flight-type">
                     <div box-1>
                        <strong style="padding:3px 8px;font-size:12px;background-color: #2c74b3;
                                 font-family: 'Montserrat';color:#FFFFFF" title="Unlimited Flights">
                           Unlimited
                        </strong>
                        <small id="text-small">Flights</small>
                     </div>
                     <div box-2>
                        <h2>1</h2>
                        <small>Months</small>
                     </div>
                  </div>
                  <h3><small><sup>$</sup></small>7,562</h3>
                  <div class="flight-type detail-discount">
                     <span><small>up to</small>Save</span>
                     <span><small class="small-gray"><s><sup>$</sup>12,600</s></small>$5,040</span>
                     <div class="discount-container">
                        <p class="discount-text"> 40% <br><small>off</small> </p>
                     </div>
                  </div>
                  <div class="button-container">
                     <button type="button" name="button" class="gradient-btn-1"><a href="register.php"> Buy now</a>
                     </button>
                  </div>
               </div>
               <div class="flights-body-content flight-card">
                  <h4 class="flight-heading">Local Flight</h4>
                  <img src="img/asmara.jpg" alt="asmara flight card" class="flight-card-img">
                  <p title="Asmara ⇌ Addis Ababa">Asmara ⇌ Addis Ababa</p>

                  <div class="flight-type">
                     <div box-1>

                        <strong style="padding:3px 8px;font-size:12px;background-color: #2c74b3;
                                          font-family: 'Montserrat';color:#FFFFFF"
                           title="Unlimited Flights">Unlimited</strong>
                        <small id="text-small">Flights</small>
                     </div>
                     <div box-2>
                        <h2>2</h2>
                        <small>Months</small>
                     </div>
                  </div>
                  <h3><small><sup>$</sup></small>1,719</h3>
                  <div class="flight-type detail-discount">
                     <span><small>up to</small>Save</span>
                     <span><small class="small-gray"><s><sup>$</sup>2,530</s></small>$810</span>
                     <div class="discount-container">
                        <p class="discount-text"> 30% <br><small>off</small> </p>
                     </div>
                  </div>
                  <div class="button-container">
                     <button type="button" name="button" class="gradient-btn-1">
                        <a href="register.php">Buy now</a>
                     </button>
                  </div>
               </div>
               <div class="flights-body-content flight-card">
                  <h4 class="flight-heading">Local Flight</h4>
                  <img src="img/gonder.jfif" alt="washington flight card" class="flight-card-img local-flight-img">
                  <p title="Gondar ⇌ Addis Ababa"> Gondar ⇌ Addis Ababa</p>

                  <div class="flight-type">
                     <div box-1>
                        <strong style="padding:3px 8px;font-size:12px;background-color: #2c74b3;
                                          font-family: 'Montserrat';color:#FFFFFF" title="Unlimited Flights">
                           Unlimited
                        </strong>
                        <small id="text-small">Flights</small>
                     </div>
                     <div box-2>
                        <h2>1</h2>
                        <small>Months</small>
                     </div>
                  </div>
                  <h3><small><sup>ETB</sup></small>17,562</h3>
                  <div class="flight-type detail-discount">
                     <span><small>up to</small>Save</span>
                     <span><small class="small-gray"><s><sup>$</sup>22,600</s></small>ETB5,040</span>
                     <div class="discount-container">
                        <p class="discount-text"> 20% <br><small>off</small> </p>
                     </div>
                  </div>
                  <div class="button-container">
                     <button type="button" name="button" class="gradient-btn-1"><a href="register.php"> Buy now</a>
                     </button>
                  </div>
               </div>
               <div class="flights-body-content flight-card">
                  <h4 class="flight-heading">Local Flight</h4>
                  <img src="img/bahir dar.jfif" alt=" bahirdar flight card" class="flight-card-img">
                  <p title="bahirdar ⇌ Addis Ababa"> Bahirdar ⇌ Addis Ababa</p>

                  <div class="flight-type">
                     <div box-1>
                        <strong style="padding:3px 8px;font-size:12px;background-color: #2c74b3;
                                          font-family: 'Montserrat';color:#FFFFFF" title="Unlimited Flights">
                           Unlimited
                        </strong>
                        <small id="text-small">Flights</small>
                     </div>
                     <div box-2>
                        <h2>2</h2>
                        <small>Weeks</small>
                     </div>
                  </div>
                  <h3><small><sup>ETB</sup></small>13,359</h3>
                  <div class="flight-type detail-discount">
                     <span><small>up to</small>Save</span>
                     <span><small class="small-gray"><s><sup>ETB</sup>20,600</s></small>ETB 7,800</span>
                     <div class="discount-container">
                        <p class="discount-text"> 25% <br><small>off</small> </p>
                     </div>
                  </div>
                  <div class="button-container">
                     <button type="button" name="button" class="gradient-btn-1"><a href="register.php">Buy now</a>
                     </button>
                  </div>
               </div>
               <div class="flights-body-content flight-card">
                  <h4 class="flight-heading">Local Flight</h4>
                  <img src="img/hawassa.jfif" alt=" hawassa flight card" class="flight-card-img local-flight-img">
                  <p title="hawassa ⇌ Addis Ababa"> hawassa ⇌ Addis Ababa</p>

                  <div class="flight-type">
                     <div box-1>
                        <strong style="padding:3px 8px;font-size:12px;background-color: #2c74b3;
                                          font-family: 'Montserrat';color:#FFFFFF" title="Unlimited Flights">
                           Unlimited
                        </strong>
                        <small id="text-small">Flights</small>
                     </div>
                     <div box-2>
                        <h2>4</h2>
                        <small>days</small>
                     </div>
                  </div>
                  <h3><small><sup>ETB</sup></small>5,183</h3>
                  <div class="flight-type detail-discount">
                     <span><small>up to</small>Save</span>
                     <span><small class="small-gray"><s><sup>ETB</sup>10,000</s></small>ETB 4,857</span>
                     <div class="discount-container">
                        <p class="discount-text"> 20% <br><small>off</small> </p>
                     </div>
                  </div>
                  <div class="button-container">
                     <button type="button" name="button" class="gradient-btn-1"><a href="register.php">Buy now</a>
                     </button>
                  </div>
               </div>
               <div class="flights-body-content flight-card">
                  <h4 class="flight-heading">Local Flight</h4>
                  <img src="img/gonder.jfif" alt="washington flight card" class="flight-card-img local-flight-img">
                  <p title="Gondar ⇌ Addis Ababa"> Gondar ⇌ Addis Ababa</p>
               
                  <div class="flight-type">
                     <div box-1>
                        <strong style="padding:3px 8px;font-size:12px;background-color: #2c74b3;
                                                         font-family: 'Montserrat';color:#FFFFFF" title="Unlimited Flights">
                           Unlimited
                        </strong>
                        <small id="text-small">Flights</small>
                     </div>
                     <div box-2>
                        <h2>1</h2>
                        <small>Months</small>
                     </div>
                  </div>
                  <h3><small><sup>ETB</sup></small>17,562</h3>
                  <div class="flight-type detail-discount">
                     <span><small>up to</small>Save</span>
                     <span><small class="small-gray"><s><sup>$</sup>22,600</s></small>ETB5,040</span>
                     <div class="discount-container">
                        <p class="discount-text"> 20% <br><small>off</small> </p>
                     </div>
                  </div>
                  <div class="button-container">
                     <button type="button" name="button" class="gradient-btn-1"><a href="register.php"> Buy now</a>
                     </button>
                  </div>
               </div>
               <div class="flights-body-content flight-card">
                  <img src="img/veina.jpg" alt=" beijing flight card" class="flight-card-img">
                  <p title="istanbul ⇌ Addis Ababa"> Istanbul ⇌ Addis Ababa</p>
               
                  <div class="flight-type limited-flight">
                     <div class="box-1">
                        <h2>30</h2>
                        <small>Flights</small>
                     </div>
                     <div class="box-2">
                        <h2>12</h2>
                        <small>Months</small>
                     </div>
                     <div class="box-3">
                        <h3 class="limited-price"><small><sup>$</sup></small>213</h3>
                        <small class="unlimited-small" id="flight-situation">per one-way</small>
                     </div>
                  </div>
                  <h3> <small class="unlimited-small">Total Price: </small> <span><sup id="dollar">$</sup>6390</span>
                  </h3>
                  <div class="flight-type detail-discount">
                     <span><small>up to</small>Save</span>
                     <span><small class="small-gray"><s><sup>$</sup>320</s></small>$115</span>
                     <div class="discount-container">
                        <p class="discount-text"> 30% <br><small>off</small> </p>
                     </div>
                  </div>
                  <div class="button-container">
                     <button type="button" name="button" class="gradient-btn-1"><a href="register.php">Buy now</a>
                     </button>
                  </div>
               </div>
               <div class="flights-body-content flight-card">
                  <img src="img/istanbul.jpg" alt=" beijing flight card" class="flight-card-img">
                  <p title="istanbul ⇌ Addis Ababa"> Istanbul ⇌ Addis Ababa</p>
               
                  <div class="flight-type limited-flight">
                     <div class="box-1">
                        <h2>20</h2>
                        <small>Flights</small>
                     </div>
                     <div class="box-2">
                        <h2>2</h2>
                        <small>Months</small>
                     </div>
                     <div class="box-3">
                        <h3 class="limited-price"><small><sup>$</sup></small>383</h3>
                        <small class="unlimited-small" id="flight-situation">per one-way</small>
                     </div>
                  </div>
                  <h3> <small class="unlimited-small">Total Price: </small> <span><sup id="dollar">$</sup>6990</span>
                  </h3>
                  <div class="flight-type detail-discount">
                     <span><small>up to</small>Save</span>
                     <span><small class="small-gray"><s><sup>$</sup>7,000</s></small>$8,800</span>
                     <div class="discount-container">
                        <p class="discount-text"> 30% <br><small>off</small> </p>
                     </div>
                  </div>
                  <div class="button-container">
                     <button type="button" name="button" class="gradient-btn-1"><a href="register.php">Buy now</a>
                     </button>
                  </div>
               </div>
               <div class="flights-body-content flight-card">
                  <img src="img/nairobi.jpg" alt=" beijing flight card" class="flight-card-img">
                  <p title="Nairobi ⇌ Addis Ababa"> Nairobi ⇌ Addis Ababa</p>
               
                  <div class="flight-type limited-flight">
                     <div class="box-1">
                        <h2>26</h2>
                        <small>Flights</small>
                     </div>
                     <div class="box-2">
                        <h2>12</h2>
                        <small>Months</small>
                     </div>
                     <div class="box-3">
                        <h3 class="limited-price"><small><sup>$</sup></small>203</h3>
                        <small class="unlimited-small" id="flight-situation">per one-way</small>
                     </div>
                  </div>
                  <h3> <small class="unlimited-small">Total Price: </small> <span><sup id="dollar">$</sup>5252</span>
                  </h3>
                  <div class="flight-type detail-discount">
                     <span><small>up to</small>Save</span>
                     <span><small class="small-gray"><s><sup>$</sup>253</s></small>$51</span>
                     <div class="discount-container">
                        <p class="discount-text"> 20% <br><small>off</small> </p>
                     </div>
                  </div>
                  <div class="button-container">
                     <button type="button" name="button" class="gradient-btn-1"><a href="register.php">Buy now</a>
                     </button>
                  </div>
               </div>
               <div class="flights-body-content flight-card">
                  <img src="img/veina.jpg" alt=" beijing flight card" class="flight-card-img">
                  <p title="istanbul ⇌ Addis Ababa"> Istanbul ⇌ Addis Ababa</p>
               
                  <div class="flight-type limited-flight">
                     <div class="box-1">
                        <h2>30</h2>
                        <small>Flights</small>
                     </div>
                     <div class="box-2">
                        <h2>12</h2>
                        <small>Months</small>
                     </div>
                     <div class="box-3">
                        <h3 class="limited-price"><small><sup>$</sup></small>213</h3>
                        <small class="unlimited-small" id="flight-situation">per one-way</small>
                     </div>
                  </div>
                  <h3> <small class="unlimited-small">Total Price: </small> <span><sup id="dollar">$</sup>6390</span>
                  </h3>
                  <div class="flight-type detail-discount">
                     <span><small>up to</small>Save</span>
                     <span><small class="small-gray"><s><sup>$</sup>320</s></small>$115</span>
                     <div class="discount-container">
                        <p class="discount-text"> 30% <br><small>off</small> </p>
                     </div>
                  </div>
                  <div class="button-container">
                     <button type="button" name="button" class="gradient-btn-1"><a href="register.php">Buy now</a>
                     </button>
                  </div>
               </div>
               <div class="show-more-container ">
                  <button class="show-more-btn gradient-btn-1"> Show More &raquo;</button>
               </div>
               
            </article>
         </section>
         <section class="section-fluid desc-sec accor-2">
            <h2 style="margin-left: 25px;">
               <i class="fa-solid fa-plane-arrival"></i>
               What makes our <span>business</span> class is special?</h2>
            <article class="business-class-review">
               <div class="review-class-container">
                  <img src="img/bussines-class2.avif" class="business-class-img" id="first-image" alt="business-class-review">
                  <h2> More Space</h2>
               </div>
               <div class="review-class-container">
                  <img src="img/new-busineess-class.jpg" class="business-class-img" id="middle-image" alt="business-class-review">
                  <h2> Working/Reading Space</h2>
               </div>
               <div class="review-class-container">
                  <img src="img/Sleep-S4Y-Airlines-Business-Class-Review.jpg" class="business-class-img" id="last-image"
                     alt="review-class-container">
                  <h2>Sleep Safely</h2>
               </div>
            </article>
            <h2 style="margin: 20px;">
               <i class="fa-solid fa-plane-circle-check"></i>
               See Our <span>latest</span> flights of Business Class ...</h2><br>
            <article class="flights-body business-class-margin">
               
               <div class="flights-body-content flight-card">
                  <img src="img/beijing.jpg" alt=" beijing flight card" class="flight-card-img">
                  <p title="Beijing ⇌ Addis Ababa"> Beijing ⇌ Addis Ababa</p>

                  <div class="flight-type limited-flight">
                     <div class="box-1">
                        <h2>30</h2>
                        <small>Flights</small>
                     </div>
                     <div class="box-2">
                        <h2>3</h2>
                        <small>Months</small>
                     </div>
                     <div class="box-3">
                        <h3 class="limited-price"><small><sup>$</sup></small>483</h3>
                        <small class="unlimited-small" id="flight-situation">per one-way</small>
                     </div>
                  </div>
                  <h3> <small class="unlimited-small">Total Price: </small> <span><sup id="dollar">$</sup>6390</span>
                  </h3>
                  <div class="flight-type detail-discount">
                     <span><small>up to</small>Save</span>
                     <span><small class="small-gray"><s><sup>$</sup>72,000</s></small>$28,800</span>
                     <div class="discount-container">
                        <p class="discount-text"> 40% <br><small>off</small> </p>
                     </div>
                  </div>
                  <div class="button-container">
                     <button type="button" name="button" class="gradient-btn-1"><a href="register.php">Buy now</a>
                     </button>
                  </div>
               </div>
               <div class="flights-body-content flight-card">
                  <img src="img/istanbul.jpg" alt=" beijing flight card" class="flight-card-img">
                  <p title="istanbul ⇌ Addis Ababa"> Istanbul ⇌ Addis Ababa</p>

                  <div class="flight-type limited-flight">
                     <div class="box-1">
                        <h2>20</h2>
                        <small>Flights</small>
                     </div>
                     <div class="box-2">
                        <h2>2</h2>
                        <small>Months</small>
                     </div>
                     <div class="box-3">
                        <h3 class="limited-price"><small><sup>$</sup></small>383</h3>
                        <small class="unlimited-small" id="flight-situation">per one-way</small>
                     </div>
                  </div>
                  <h3> <small class="unlimited-small">Total Price: </small> <span><sup id="dollar">$</sup>6990</span>
                  </h3>
                  <div class="flight-type detail-discount">
                     <span><small>up to</small>Save</span>
                     <span><small class="small-gray"><s><sup>$</sup>7,000</s></small>$8,800</span>
                     <div class="discount-container">
                        <p class="discount-text"> 30% <br><small>off</small> </p>
                     </div>
                  </div>
                  <div class="button-container">
                     <button type="button" name="button" class="gradient-btn-1"><a href="register.php">Buy now</a>
                     </button>
                  </div>
               </div>
               <div class="flights-body-content flight-card">
                  <img src="img/veina.jpg" alt=" beijing flight card" class="flight-card-img">
                  <p title="istanbul ⇌ Addis Ababa"> Istanbul ⇌ Addis Ababa</p>

                  <div class="flight-type limited-flight">
                     <div class="box-1">
                        <h2>30</h2>
                        <small>Flights</small>
                     </div>
                     <div class="box-2">
                        <h2>12</h2>
                        <small>Months</small>
                     </div>
                     <div class="box-3">
                        <h3 class="limited-price"><small><sup>$</sup></small>213</h3>
                        <small class="unlimited-small" id="flight-situation">per one-way</small>
                     </div>
                  </div>
                  <h3> <small class="unlimited-small">Total Price: </small> <span><sup id="dollar">$</sup>6390</span>
                  </h3>
                  <div class="flight-type detail-discount">
                     <span><small>up to</small>Save</span>
                     <span><small class="small-gray"><s><sup>$</sup>320</s></small>$115</span>
                     <div class="discount-container">
                        <p class="discount-text"> 30% <br><small>off</small> </p>
                     </div>
                  </div>
                  <div class="button-container">
                     <button type="button" name="button" class="gradient-btn-1"><a href="register.php">Buy now</a>
                     </button>
                  </div>
               </div>
               <div class="flights-body-content flight-card">
                  <img src="img/nairobi.jpg" alt=" beijing flight card" class="flight-card-img">
                  <p title="Nairobi ⇌ Addis Ababa"> Nairobi ⇌ Addis Ababa</p>

                  <div class="flight-type limited-flight">
                     <div class="box-1">
                        <h2>26</h2>
                        <small>Flights</small>
                     </div>
                     <div class="box-2">
                        <h2>12</h2>
                        <small>Months</small>
                     </div>
                     <div class="box-3">
                        <h3 class="limited-price"><small><sup>$</sup></small>203</h3>
                        <small class="unlimited-small" id="flight-situation">per one-way</small>
                     </div>
                  </div>
                  <h3> <small class="unlimited-small">Total Price: </small> <span><sup id="dollar">$</sup>5252</span>
                  </h3>
                  <div class="flight-type detail-discount">
                     <span><small>up to</small>Save</span>
                     <span><small class="small-gray"><s><sup>$</sup>253</s></small>$51</span>
                     <div class="discount-container">
                        <p class="discount-text"> 20% <br><small>off</small> </p>
                     </div>
                  </div>
                  <div class="button-container">
                     <button type="button" name="button" class="gradient-btn-1"><a href="register.php">Buy now</a>
                     </button>
                  </div>
               </div>
               <div class="flights-body-content flight-card">
                  <h4 class="flight-heading">Unlimited</h4>
                  <img src="img/washington.jpg" alt="washington flight card" class="flight-card-img">
                  <p title="Washington ⇌ Addis Ababa"> Washington ⇌ Addis Ababa</p>

                  <div class="flight-type">
                     <div box-1>
                        <strong style="padding:3px 8px;font-size:12px;background-color: #2c74b3;
                                          font-family: 'Montserrat';color:#FFFFFF" title="Unlimited Flights">
                           Unlimited
                        </strong>
                        <small id="text-small">Flights</small>
                     </div>
                     <div box-2>
                        <h2>1</h2>
                        <small>Months</small>
                     </div>
                  </div>
                  <h3><small><sup>$</sup></small>7,562</h3>
                  <div class="flight-type detail-discount">
                     <span><small>up to</small>Save</span>
                     <span><small class="small-gray"><s><sup>$</sup>12,600</s></small>$5,040</span>
                     <div class="discount-container">
                        <p class="discount-text"> 40% <br><small>off</small> </p>
                     </div>
                  </div>
                  <div class="button-container">
                     <button type="button" name="button" class="gradient-btn-1"><a href="register.php"> Buy now</a>
                     </button>
                  </div>
               </div>
               <div class="flights-body-content flight-card">
                  <h4 class="flight-heading">Unlimited</h4>
                  <img src="img/cairo.jpg" alt="cairo flight card" class="flight-card-img">
                  <p title="Cairo ⇌ Addis Ababa">Cairo ⇌ Addis Ababa</p>

                  <div class="flight-type">
                     <div box-1>

                        <strong style="padding:3px 8px;font-size:12px;background-color: #2c74b3;
                                          font-family: 'Montserrat';color:#FFFFFF"
                           title="Unlimited Flights">Unlimited</strong>
                        <small id="text-small">Flights</small>
                     </div>
                     <div box-2>
                        <h2>12</h2>
                        <small>Months</small>
                     </div>
                  </div>
                  <h3><small><sup>$</sup></small>5,719</h3>
                  <div class="flight-type detail-discount">
                     <span><small>up to</small>Save</span>
                     <span><small class="small-gray"><s><sup>$</sup>9,530</s></small>$3810</span>
                     <div class="discount-container">
                        <p class="discount-text"> 40% <br><small>off</small> </p>
                     </div>
                  </div>
                  <div class="button-container">
                     <button type="button" name="button" class="gradient-btn-1">
                        <a href="register.php">Buy now</a>
                     </button>
                  </div>
               </div>
               <div class="flights-body-content flight-card">
                  <h4 class="flight-heading">Unlimited</h4>
                  <img src="img/newdalihi.jpg" alt="new delhi flight card" class="flight-card-img">
                  <p title="New Delhi ⇌ Addis Ababa"> New Delhi ⇌ Addis Ababa</p>

                  <div class="flight-type">
                     <div box-1>
                        <strong style="padding:3px 8px;font-size:12px;background-color: #2c74b3;
                                          font-family: 'Montserrat';color:#FFFFFF" title="Unlimited Flights">
                           Unlimited
                        </strong>
                        <small id="text-small">Flights</small>
                     </div>
                     <div box-2>
                        <h2>9</h2>
                        <small>Months</small>
                     </div>
                  </div>
                  <h3><small><sup>$</sup></small>43,183</h3>
                  <div class="flight-type detail-discount">
                     <span><small>up to</small>Save</span>
                     <span><small class="small-gray"><s><sup>$</sup>72,000</s></small>$28,800</span>
                     <div class="discount-container">
                        <p class="discount-text"> 40% <br><small>off</small> </p>
                     </div>
                  </div>
                  <div class="button-container">
                     <button type="button" name="button" class="gradient-btn-1"><a href="register.php">Buy now</a>
                     </button>
                  </div>
               </div>
               <div class="flights-body-content flight-card">
                  <h4 class="flight-heading">Unlimited</h4>
                  <img src="img/washington.jpg" alt="washington flight card" class="flight-card-img">
                  <p title="Washington ⇌ Addis Ababa"> Washington ⇌ Addis Ababa</p>

                  <div class="flight-type">
                     <div box-1>
                        <strong style="padding:3px 8px;font-size:12px;background-color: #2c74b3;
                                          font-family: 'Montserrat';color:#FFFFFF" title="Unlimited Flights">
                           Unlimited
                        </strong>
                        <small id="text-small">Flights</small>
                     </div>
                     <div box-2>
                        <h2>1</h2>
                        <small>Months</small>
                     </div>
                  </div>
                  <h3><small><sup>$</sup></small>7,562</h3>
                  <div class="flight-type detail-discount">
                     <span><small>up to</small>Save</span>
                     <span><small class="small-gray"><s><sup>$</sup>12,600</s></small>$5,040</span>
                     <div class="discount-container">
                        <p class="discount-text"> 40% <br><small>off</small> </p>
                     </div>
                  </div>
                  <div class="button-container">
                     <button type="button" name="button" class="gradient-btn-1"><a href="register.php"> Buy now</a>
                     </button>
                  </div>
               </div>
               <div class="flights-body-content flight-card">
                  <h4 class="flight-heading">Unlimited</h4>
                  <img src="img/paris_frace.jpg" alt=" paris flight card" class="flight-card-img">
                  <p title="Paris ⇌ Addis Ababa"> Paris ⇌ Addis Ababa</p>

                  <div class="flight-type">
                     <div box-1>
                        <strong style="padding:3px 8px;font-size:12px;background-color: #2c74b3;
                                          font-family: 'Montserrat';color:#FFFFFF" title="Unlimited Flights">
                           Unlimited
                        </strong>
                        <small id="text-small">Flights</small>
                     </div>
                     <div box-2>
                        <h2>3</h2>
                        <small>Months</small>
                     </div>
                  </div>
                  <h3><small><sup>$</sup></small>12,359</h3>
                  <div class="flight-type detail-discount">
                     <span><small>up to</small>Save</span>
                     <span><small class="small-gray"><s><sup>$</sup>20,600</s></small>$8,800</span>
                     <div class="discount-container">
                        <p class="discount-text"> 40% <br><small>off</small> </p>
                     </div>
                  </div>
                  <div class="button-container">
                     <button type="button" name="button" class="gradient-btn-1"><a href="register.php">Buy now</a>
                     </button>
                  </div>
               </div>
               <div class="flights-body-content flight-card">
                  <h4 class="flight-heading">Unlimited</h4>
                  <img src="img/beijing.jpg" alt=" beijing flight card" class="flight-card-img">
                  <p title="Beijing ⇌ Addis Ababa"> Beijing ⇌ Addis Ababa</p>

                  <div class="flight-type">
                     <div box-1>
                        <strong style="padding:3px 8px;font-size:12px;background-color: #2c74b3;
                                          font-family: 'Montserrat';color:#FFFFFF" title="Unlimited Flights">
                           Unlimited
                        </strong>
                        <small id="text-small">Flights</small>
                     </div>
                     <div box-2>
                        <h2>9</h2>
                        <small>Months</small>
                     </div>
                  </div>
                  <h3><small><sup>$</sup></small>33,183</h3>
                  <div class="flight-type detail-discount">
                     <span><small>up to</small>Save</span>
                     <span><small class="small-gray"><s><sup>$</sup>45,350</s></small>$14,984</span>
                     <div class="discount-container">
                        <p class="discount-text"> 40% <br><small>off</small> </p>
                     </div>
                  </div>
                  <div class="button-container">
                     <button type="button" name="button" class="gradient-btn-1"><a href="register.php"> Buy now</a>
                       </button>
                  </div>
               </div>
               <div class="flights-body-content flight-card">
                  <h4 class="flight-heading">Local Flight</h4>
                  <img src="img/asmara.jpg" alt="asmara flight card" class="flight-card-img">
                  <p title="Asmara ⇌ Addis Ababa">Asmara ⇌ Addis Ababa</p>

                  <div class="flight-type">
                     <div box-1>

                        <strong style="padding:3px 8px;font-size:12px;background-color: #2c74b3;
                                          font-family: 'Montserrat';color:#FFFFFF"
                           title="Unlimited Flights">Unlimited</strong>
                        <small id="text-small">Flights</small>
                     </div>
                     <div box-2>
                        <h2>2</h2>
                        <small>Months</small>
                     </div>
                  </div>
                  <h3><small><sup>$</sup></small>1,719</h3>
                  <div class="flight-type detail-discount">
                     <span><small>up to</small>Save</span>
                     <span><small class="small-gray"><s><sup>$</sup>2,530</s></small>$810</span>
                     <div class="discount-container">
                        <p class="discount-text"> 30% <br><small>off</small> </p>
                     </div>
                  </div>
                  <div class="button-container">
                     <button type="button" name="button" class="gradient-btn-1">
                        <a href="register.php">Buy now</a>
                     </button>
                  </div>
               </div>
               <div class="flights-body-content flight-card">
                  <h4 class="flight-heading">Local Flight</h4>
                  <img src="img/gonder.jfif" alt="washington flight card" class="flight-card-img local-flight-img">
                  <p title="Gondar ⇌ Addis Ababa"> Gondar ⇌ Addis Ababa</p>

                  <div class="flight-type">
                     <div box-1>
                        <strong style="padding:3px 8px;font-size:12px;background-color: #2c74b3;
                                          font-family: 'Montserrat';color:#FFFFFF" title="Unlimited Flights">
                           Unlimited
                        </strong>
                        <small id="text-small">Flights</small>
                     </div>
                     <div box-2>
                        <h2>1</h2>
                        <small>Months</small>
                     </div>
                  </div>
                  <h3><small><sup>ETB</sup></small>17,562</h3>
                  <div class="flight-type detail-discount">
                     <span><small>up to</small>Save</span>
                     <span><small class="small-gray"><s><sup>$</sup>22,600</s></small>ETB5,040</span>
                     <div class="discount-container">
                        <p class="discount-text"> 20% <br><small>off</small> </p>
                     </div>
                  </div>
                  <div class="button-container">
                     <button type="button" name="button" class="gradient-btn-1"><a href="register.php"> Buy now</a>
                     </button>
                  </div>
               </div>
               <div class="flights-body-content flight-card">
                  <h4 class="flight-heading">Local Flight</h4>
                  <img src="img/bahir dar.jfif" alt=" bahirdar flight card" class="flight-card-img">
                  <p title="bahirdar ⇌ Addis Ababa"> Bahirdar ⇌ Addis Ababa</p>

                  <div class="flight-type">
                     <div box-1>
                        <strong style="padding:3px 8px;font-size:12px;background-color: #2c74b3;
                                          font-family: 'Montserrat';color:#FFFFFF" title="Unlimited Flights">
                           Unlimited
                        </strong>
                        <small id="text-small">Flights</small>
                     </div>
                     <div box-2>
                        <h2>2</h2>
                        <small>Weeks</small>
                     </div>
                  </div>
                  <h3><small><sup>ETB</sup></small>13,359</h3>
                  <div class="flight-type detail-discount">
                     <span><small>up to</small>Save</span>
                     <span><small class="small-gray"><s><sup>ETB</sup>20,600</s></small>ETB 7,800</span>
                     <div class="discount-container">
                        <p class="discount-text"> 25% <br><small>off</small> </p>
                     </div>
                  </div>
                  <div class="button-container">
                     <button type="button" name="button" class="gradient-btn-1"><a href="register.php">Buy now</a>
                     </button>
                  </div>
               </div>
               <div class="flights-body-content flight-card">
                  <h4 class="flight-heading">Local Flight</h4>
                  <img src="img/hawassa.jfif" alt=" hawassa flight card" class="flight-card-img local-flight-img">
                  <p title="hawassa ⇌ Addis Ababa"> hawassa ⇌ Addis Ababa</p>

                  <div class="flight-type">
                     <div box-1>
                        <strong style="padding:3px 8px;font-size:12px;background-color: #2c74b3;
                                          font-family: 'Montserrat';color:#FFFFFF" title="Unlimited Flights">
                           Unlimited
                        </strong>
                        <small id="text-small">Flights</small>
                     </div>
                     <div box-2>
                        <h2>4</h2>
                        <small>days</small>
                     </div>
                  </div>
                  <h3><small><sup>ETB</sup></small>5,183</h3>
                  <div class="flight-type detail-discount">
                     <span><small>up to</small>Save</span>
                     <span><small class="small-gray"><s><sup>ETB</sup>10,000</s></small>ETB 4,857</span>
                     <div class="discount-container">
                        <p class="discount-text"> 20% <br><small>off</small> </p>
                     </div>
                  </div>
                  <div class="button-container">
                     <button type="button" name="button" class="gradient-btn-1"><a href="register.php">Buy now</a>
                     </button>
                  </div>
               </div>
               <div class="show-more-container ">
                  <button class="show-more-btn gradient-btn-1"> Show More &raquo;</button>
               </div>

            </article>
         </section>
      </div>
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
                        <input autocomplete="off" class="form-control et-form-input" id="subscriber-email-home" name="Email"
                           placeholder="Email address" required="required" type="text" value="">
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
                     <li><a title="YouTube " id="youtube " target="_blank " href="https://www.youtube.com/user/flyethiopian "
                           class="navbar-text socialmedia-link"><em class="fab fa-youtube"></em><span
                              class="sr-only">YouTube</span>
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


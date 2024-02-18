<?php
   include './includes/db_connect.php';

   $fname = $lname = $email = $password = '';

   $fnameErr = $lnameErr = $emailErr = $passErr = '';

   function val($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
   }



?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- icon-link(font-awesome) -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
   <link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
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
   <link rel="stylesheet" href="Styles/register.css">
   <link rel="stylesheet" href="Styles/header.css">
   <link rel="stylesheet" href="Styles/header1.css">
   <link rel="stylesheet" href="Styles/footer.css">
   <title>Register Here</title>
</head>

<body>
   <header class="header-container">
            <!-- Brand Box -->
      <div class="brand">
         <div class="company-header-logo">
            <a href="index.php">
               <img class="company-logo-picture" src="img/et-logo.png" alt="company-header-logo">
            </a>
         </div>
         <div class="heading">
            <h2 class="brand-hero-text">Brand</h2>
            <p>Your Right Choice</p>
         </div>
      </div>
   </header>

   <!-- partial:index.partial.html -->
   <main class="section">
      <div class="container">
         <div class="text-center align-self-center">
            <div class="section text-center">
               <h6 class="mb-0"><span>Log In </span><span>Sign Up</span></h6>
               <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
               <label for="reg-log"></label>
               <div class="card-3d-wrap mx-auto">
                  <div class="card-3d-wrapper">
                     <article class="card-front">
                        <div class="center-wrap">
                           <div class="section text-center">
                              <h4 class="mb-4 ">Log In</h4>
                              <div class="form-group mt-2">
                                 <form action="<?php $_SERVER['PHP_SELF'] ?>" name="myform" method="post">
                                    <div class="form-group">
                                       <input type="email" name="email" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off">
                                       <span class="color">* <?php echo $emailErr?></span>
                                       <i class="input-icon uil uil-at"></i>
                                    </div>
                                    <input type="password" name="logpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off">
                                    <span class="color">* <?php echo $email?></span>
                                    <i class="input-icon uil uil-lock-alt"></i>
                                    </div class="button">
                                    <input type="submit" class="btn mt-4" value="submit" >
                                    
                                 </form>
                                 
                              <p class="mb-0 mt-4 text-center"><a href="#card-back" class="link">Forgot your password?</a>
                              </p>
                           </div>
                        </div>
                     </article>
                     <article class="card-back">
                        <div class="center-wrap">
                           <div class="section text-center">
                              <h4 class="mb-4 ">Sign Up</h4>
                              <div class="form-group">
                                 <input type="text" name="logname" class="form-style" placeholder="Your Full Name"
                                    id="logname" autocomplete="off">
                                 <i class="input-icon uil uil-user"></i>
                              </div>
                              <div class="form-group mt-2">
                                 <input type="email" name="logemail" class="form-style" placeholder="Your Email"
                                    id="logemail" autocomplete="off">
                                 <i class="input-icon uil uil-at"></i>
                              </div>
                              <div class="form-group mt-2">
                                 <input type="password" name="logpass" class="form-style" placeholder="Your Password"
                                    id="logpass" autocomplete="off">
                                 <i class="input-icon uil uil-lock-alt"></i>
                              </div class="button">
                              <a href="loader.html" class="btn mt-4">submit</a>
                           </div>
                        </div>
                     </article>
                  </div>
               </div>
            </div>
         </div>
         <div class="captcha-config">
            <p><span>!&nbsp;</span><sub>re</sub>CAPTCHA &nbsp; Configuration</p>
            <label for="styling-color">
               <pre>
Choose RGB Color
  R    B     A 
  20   200   100
               </pre>
            </label>
            <div class="container">
               <input type="color" value="#FFE28A" id="styling-color">
               <label for="styling-color"></label>
            </div>
         </div>
      </div>
   </main>
   <!-- partial -->

   <footer class="footer registration-footer">
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
                              href="personal-portfolio-website/personal-website.html">Subscribe</a> </button>
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
   <!-- <script>
       function validateemail() {
         var x = document.myform.email.value;
         var password = document.myform.logpass.value
         var atposition = x.indexOf("@");
         var dotposition = x.lastIndexOf(".");
         if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= x.length) {
            alert("Please enter a valid e-mail address \n atpostion:" + atposition + "\n dotposition:" + dotposition);
            return false;
         }
          if (logpass.length < 6) {
             alert("Password must be at least 6 characters long.");
             return false;
          }
   }  
   </script>   -->
</body>

</html>
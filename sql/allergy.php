<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Shop</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/stylecopy.css">
      <link rel="stylesheet" href="stylo.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
   </head>
   <body>
      <!-- header section start -->
      <div class="container-fluid">
         <div class="header_section">
            <div class="container">
               <nav class="navbar navbar-light bg-light justify-content-between">
                  <div id="mySidenav" class="sidenav">
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <a href="index1.php">Home</a>
                     <a href="about.php">About US</a>
                     <a href="foodrecipes.php">Food Recipes</a>
                     <a href="allergy.php">Allergy Information</a>
                     
                     
                     <!-- <a href="contacts.html">Contacts</a> -->
                  </div>
                  <form class="form-inline ">
                     <div class="login_text"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left10">Call : +44776745049</span></a></div>
                  </form>
                  <a class="logo" href="index.html"><img src="images/logod.png" class="kola"></a></a>
                  <span class="toggle" onclick="openNav()"><i class="fa fa-bars"></i></span>
                  <div class="login_text"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left10">Email : adewaletairu2020@gmail.com</span></a></div>
               </nav>
            </div>
         </div>
      </div>
      
      <!-- header section end -->
      <!-- layout main section start -->
      <div class="container-fluid">
         <div class="layout_main">
            <!-- banner section start -->
            <div class="banner_section">
               <div class="container">
                  <div class="menu_main">
                     <div class="custome_menu">
                        <ul>
                           <li><a href="index1.php">Home</a></li>
                           <li><a href="about.php">About Us</a></li>
                           <li><a href="foodrecipes.php">Food Recipes</a></li>
                           <li><a href="allergy.php">Allergy Information</a></li>
                           <!-- <li class="active"><a href="">Shop</a></li><br><br> -->
                           <!-- <li class="active"><a href="">Welcome Adewale Tairu </a></li> -->
                           
                           <!-- <li><a href="contact.html">Contacts</a></li> -->
                        </ul>
                       
                     </div>
                     <div class="login_menu">
                        <ul>
                           <li><a href="#">Login</a></li>
                           <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <!-- banner section end -->
            <div>
         <?php
            require "index2.php";
         ?>
      </div>

      <div>
         <?php
         require "indexcart.php";
         ?>
      </div>
     
            <!-- shop section start -->
           
            <!-- shop section end -->
            <!-- footer section start -->
            
            <div class="footer_section">
               <div class="container">
                  <div class="footer_sectio_2">
                     <div class="row">
                        
                        <div class="col-lg-3 col-md-6">
                           <h2 class="footer_logo">RECIPE WEBSITE </h2>
                           <p class="footer_text">Finding Dishes that fit your preference </p>
                        </div>
                        <div class="col-lg-3 col-md-6">
                           <h2 class="useful_text">Links </h2>
                           <div class="footer_menu">
                              <ul>
                                 <li class="active"><a href="index1.php">Home</a></li>
                                 <li><a href="about.php">About</a></li>
                                 <li><a href="blog.html">Popular Recipes </a></li>
                                 <li><a href="shop.php"> Shop</a></li>
                                 <!-- <li><a href="features.html"></a></li> -->
                              </ul>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                           <h2 class="useful_text">Contact Info</h2>
                           <p class="address_text">Office Address</p>
                           <div class="map_icon"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left15">Robert Gordon University </span></a></div>
                           <p class="address_text">Connect Wiith Us:</p>
                           <div class="map_icon"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left15">( +44776745049)</span></a></div>
                           <div class="map_icon"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left15">adewaletairu2020@gmail.com</span></a></div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                           <!-- <h2 class="useful_text">Discover</h2>
                           <div class="subscribe_menu">
                              <ul>
                                 <li><a href="#">Help</a></li>
                                 <li><a href="#">How It Works</a></li>
                                 <li><a href="#">subscribe</a></li>
                                 <li><a href="contact.html">Contact Us</a></li>
                              </ul> -->
                           </div>
                           <div class="social_icon">
                              <ul>
                                 
                                 <!-- <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                 <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                 <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                 <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li> -->
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <!-- footer section end -->
         </div>
         
      </div>
      
      <!-- layout main section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
         <?php
// Replace 'YOUR_RECIPE_URL' with the actual URL of the recipe to be shared
$recipeUrl = 'http://localhost/htmlcopy/shop.php';
?>

<!-- Facebook Share Button -->
<a href="javascript:void(0);" onclick="shareOnFacebook()" class="copyright_text">Share on Facebook</a>

<!-- Twitter Share Button -->
<a href="javascript:void(0);" onclick="shareOnTwitter()" class="copyright_text">Share on Twitter</a>

<!-- JavaScript Functions for Sharing -->
<script>
function shareOnFacebook() {
    var shareUrl = 'https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent('<?php echo $recipeUrl; ?>');
    window.open(shareUrl, '_blank', 'width=600,height=400');
}

function shareOnTwitter() {
    var shareUrl = 'https://twitter.com/intent/tweet?url=' + encodeURIComponent('<?php echo $recipeUrl; ?>');
    window.open(shareUrl, '_blank', 'width=600,height=400');
}
</script>
            <p class="copyright_text">2023 All Rights Reserved. Design by Tairu Adewale Bamidele <a href="https://html.design">MSC PROJECT </a></p>\
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>  
      <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "100%";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script> 
   </body>
</html>
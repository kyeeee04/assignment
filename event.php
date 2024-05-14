<!DOCTYPE html>
<html lang="en">
<head>
      
      <title>Bearloon Online Shopping</title>
      
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      
      
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- font awesome -->
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      </head>
   <body>
      <!-- banner bg main start -->
      <div class="banner_bg_main">
         <!-- header top section start -->
         <div class="container">
            <div class="header_section_top">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="custom_menu">
                        <ul>
                           <li>
                              <!-- header section start -->
         <div class="header_section">
            <div class="container">
               <div class="containt_main">
                  <div id="mySidenav" class="sidenav">
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <a href="index.php">Home</a>
                     <a href="bouquet.php">Bouquet</a>
                     <a href="balloons.php">Balloons</a>
                     <a href="souvenir.php">Souvenir</a>
                  </div>
          
                  <span class="toggle_icon" onclick="openNav()"><img src="images/toggle-icon.png"></span>
               </div>
            </div>
         </div>
         <!-- header section end -->
                           </li>
                           <li><a href="bestsell.php">Best Sellers</a></li>
                           <li><a href="event.php">Coming Up Event</a></li>
                           <li><a href="customerservice.php" class="Customer_Service">Customer Service</a></li>
                           <li><a href="aboutus.php">About Us</a></li>
                      </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="cart_setting">  
               <div class="login_menu">
                  <ul>
                     <li><a href="cart.php">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        <span class="padding_10">Cart</span></a>
                     </li>
               
                  </ul>
               </div>
            </div>
         </div>
         <!-- header top section start -->
         <!-- banner section start -->
         <div class="banner_section layout_padding">
            <div class="container">
               <div id="my_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">Up Coming Events</h1>
                              <div class="buynow_bt"><a href="index.php">Lets Back</a></div>
                              
                           </div>
                        </div>
                     </div>
            
                  </div>
            
               </div>
            </div>
         </div>
         <!-- banner section end -->

      </div>
      <!-- banner bg main end -->
      <!-- bouquet section start -->
      <div class="fashion_section">
        <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <h1 class="fashion_taital">Coming up Preorder Offer</h1>
                        <div class="fashion_section_2">
                            <div class="row">
                                <div class="box_event">
                                    <h4 class="shirt_text">Wesak Day Preorder Offer</h4>
                                    <p class="price_text">Price <span style="color: #262626;">RM XX</span></p>
                                    <div class="tshirt_img"><img src="images/wesak bear.png"></div>
                                    <h4 class="shirt_text">Coming soon....</h4>
                                </div>
                                <div class="box_event">
                                    <h4 class="shirt_text">Boss Birthday Preorder Offer</h4>
                                    <p class="price_text">Price <span style="color: #262626;">RM90</span></p>
                                    <div class="tshirt_img"><img src="images/birthday bear.png"></div>
                                    <h4 class="shirt_text">Coming up not really soon....</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
      
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_logo"><a href="index.php"><img src="images/logo.png"></a></div>
            <div class="footer_menu">
            <p>202, Jalan Pasir Puteh, Taman Hoover, 31650 Ipoh, Perak</p>
            </div>
            <div class="location_main">Help Line  Number : <a href="#">+6 0123456789</a></div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">© 2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
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
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script>
   </body>
</html>
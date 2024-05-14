<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
			$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
         echo "<script>alert('Item added successfully!');</script>";
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>

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
         
         <div class="banner_section layout_padding">
            <div class="container">
               <div id="my_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">Home Page</h1>
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
      <!-- jewellery  section start -->
      <div class="jewellery_section">
         <div id="jewellery_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="fashion_taital">Souvenir</h1>
					 <link href="css/style2.css" type="text/css" rel="stylesheet" />
                     <?php
						$product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
						if (!empty($product_array)) { 
						?>
						<div class="product-row">
							<?php 
								$count = 0;
								// Assuming $product_array contains items from the database
								foreach ($product_array as $key => $product) :
									// Start displaying items from index 9 (number 10) and stop after displaying 8 items
									if ($key < 18) continue; // Skip items before index 9
									if ($count >= 18) break; // Stop after displaying 8 items

									// Display the item
								?>
								<div class="product-column">
									<form method="post" action="souvenir.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
									<div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
									<div class="product-tile-footer">
									<div class="product-title"><?php echo $product_array[$key]["name"]; ?></div>
									<div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
									<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
									</div>
									</form>
								</div>
								<?php 
									$count++;
									if ($count % 3 == 0 && $count < 18) echo '</div><div class="product-row">'; // Start a new row after every third item (except the last row)
								?>
									
								<?php endforeach; 
							'</div>'?>
						<?php
							}
						?>
                  </div>
               </div>
               
             
            </div>
            
         
         </div>
      </div>
      <!-- jewellery  section end -->
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
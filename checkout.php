<!--connect file-->
<?php
  include('includes/connect.php');
  session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Build a Box- Checkout</title>
    <!--Bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!--fontawesone-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <!--Nav bar-->
		 <section id ="header">
            <a href="index.php"><img src="img/logoo.png" ></a>
            <div>
                <ul id ="navbar">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="buildaboxpage.php">Build a Box</a></li>
                    <li><a href="bestseller.php" >Best Sellers</a></li>
					<li><a href="letthemchoose.html">Let them choose</a></li>
					<li> <a href="user_login.php"><i class="far fa-user"></i></a></li>
          <li id="lg-bag"> <a href="cart.php"><i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i></a></li>
					<a href="#" id="close"><i class="far fa-times"></i></a>
				</ul>
			</div>
			<div id ="mobile">
				<a href="cart.php"><i class="far fa-solid fa-cart-shopping"></i></a>
				<i id="bar" class="fas fa-outdent"></i>
			</div>
      </section>
            <!--navbar end-->
          <!--calling cart function-->
         
            <!--build box nav bar-->
      
      <!--build box nav bar end-->
 <div class="row px-1">
    <div class="col-md-12">
        <div class="row">
            <?php
            if(!isset($_SESSION['username'])){
				header('Location: user_login.php');
            }else{
                header('Location:payment.php');
            }
            ?>
        </div>
    </div>
 </div>
 

		<!--Footer-->
		<footer class="section-p1">
			<div class="col">
				<img class="logo" src="img/logoo.png">
				<h4> Contact</h4>
				<p> <strong>Address: </strong> : Balkumari, Lalitpur</p>
				<p> <strong>Phone: </strong> +977-9841234567</p>
				<p> <strong>Hours: </strong> 9:00 - 17:00, Sunday-Friday </p>
				</div>
				<div class="follow">
					<h4> Follow us</h4>
					<div class="icon">
						<i class="fab fa-facebook-f"></i>
						<i class="fab fa-instagram"></i>
						<i class="fab fa-twitter"></i>
						<i class="fab fa-pinterest-p"></i>
						<i class="fab fa-youtube"></i>
					</div>
				</div>
				<div class="col">
					<h4>About us</h4>
					<a href="about.html">About us</a>
					<a href="#">Delivery Information</a>
					<a href="#"> Privacy Policy</a>
					<a href="#"> Terms and Conditions</a>
					<a href="#"> Contact Us</a>
				</div>
				<div class="col">
					<h4> My Account</h4>
					<a href="#">Sign In</a>
					<a href="#"> View Cart</a>
					<a href="#">My Wishlist</a>
					<a href="#">Track My Order</a>
					<a href="#">Help</a>
				</div>
				<div class="col">
					<h4>Earn with Us</h4>
					<a href="#">Sell on Boxed with Love</a>
					<a href="#">Code of Conduct</a>
				</div>
				<div class="col install">
					<h4>Install App</h4>
					<p> From App Store or Google Play</p>
					<div class="row">
						<img src="img/app.jpg">
						<img src="img/play.jpg">
					</div>
					<h4 style="margin-top: 20px;">Secured Payment Gateways</h4>
					<div class="row">
						<div class="payrow">
						<img src="img/esewa_og.png">
						<img src="img/khalti.jpg">
						<img src="img/ime.png">
						<img src="img/fonepay_payments_fatafat.png">
					</div>
					</div>
				</div>
				<div class="copyright">
					<p><small>&copy; Copyright 2023, Boxed with Love</small></p>
				</div>
			</div>

		</footer>
        <script src="script.js"></script>
    
    <!--bootstrap js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<!--connect file-->
<?php
  include('includes/connect.php');
  include('functions/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Build a Box</title>
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
                    <li><a href="buildaboxpage.php" class="active">Build a Box</a></li>
                    <li><a href="bestseller.php" >Best Sellers</a></li>
										<li><a href="letthemchoose.html">Let them choose</a></li>
					<li> <a href="user_login.php"><i class="far fa-user"></i></a></li>
          <li id="lg-bag"> <a href="cart.php"><i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i></a></li>
					<a href="#" id="close"><i class="far fa-times"></i></a>
				</ul>
			</div>
			<div id ="mobile">
				<a href="cart.html"><i class="far fa-solid fa-cart-shopping"></i></a>
				<i id="bar" class="fas fa-outdent"></i>
			</div>
      </section>
            <!--navbar end-->
          <!--calling cart function-->
          <?php
            cart();
          ?>
            <!--build box nav bar-->
      <div class="container-fluid p-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-danger-subtle">
                <div class="container-fluid">
                                      
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="#">Choose a Box <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Fill the Box</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pick a Card</a>
                          </li>
                        <li class="nav-item">
                          <a class="nav-link" href="cart.php"> <i class="fa-solid fa-cart-shopping"></i>
                          <sup> <?php cart_item(); ?></sup></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">NRs
                              <?php total_cart_price(); ?>
                            </a>
                        </li>
                      </ul>
                </div>
                      <form class="form-inline my-2 my-lg-0 d-flex" method="get" action="search_product.php">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
                        <!--button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button-->
                        <input type="submit" value="Search" class="btn btn-outline-light my-2 my-sm-0" name="search_data_product">
                      </form>
                    </div>
                  </nav>
      </div>
      <!--build box nav bar end-->
<br>
      <div class="bg-light-subtle">
        <h3 class="text-center">Fill the Box</h3>
        <p class="text-center">Handpick sweet surprises</p>
      </div>
<div class="row">
  <div class="col-md-10">
    <!--products-->
    <div class="row">
    <!--fetching products-->
    <?php
    getproducts();
    get_unique_categories();
    get_unique_occassion();
    /*
      $select_query="select * from `products` order by rand() limit 0,9";
      $result_query=mysqli_query($con,$select_query);
      //$row = mysqli_fetch_assoc($result_query);
      //echo $row['product_title'];
      while($row = mysqli_fetch_assoc($result_query)){
        $product_id=$row['product_id'];
        $product_title=$row['product_title'];
        $product_description=$row['product_description'];
        //$product_keywords = $row['product_keywords'];
        $category_id = $row['product_category'];
        $occasion_id = $row['product_occasion'];
        $product_price = $row['product_price'];
        $product_image1 = $row['product_image1'];
        //$product_image2 = $row['product_image2'];
        //$product_image3 = $row['product_image3'];
        echo " <div class='col-md-4 mb-2'>
        <div class='card' >
          <img class='card-img-top' src='./admin_area/product_images/$product_image1' alt='$product_title'>
          <div class='card-body'>
            <h5 class='card-title'>$product_title</h5>
            <p class='card-text'>$product_description</p>
            <a href='#' class='btn btn-primary' style='background-color: hotpink; border: 0;'> Add To Box</a>
            <a href='#' class='btn btn-primary' style='background-color: hotpink;border: 0;'>View</a>
          </div>
        </div>
      </div>";

      }
      */
    ?>
      <!--row end-->
    </div>
    <!--col end-->
  </div>
  <!--Side nav-->
  <div class="col-md-2 bg-danger-subtle p-0">
    <!--occasion-->
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item">
        <a href="#" class="nav-link text-light-emphasis"><h4>Occasion</h4></a>
      </li>
      <?php
      getoccassion();
          /*
          $select_occasion = "SELECT * from `occasions`";
          $result_occasion = mysqli_query($con,$select_occasion);
          //$row_data=mysqli_fetch_assoc($result_occasion);
          //echo $row_data['occasion_title'];
          while($row_data=mysqli_fetch_assoc($result_occasion)){
            $occasion_title=$row_data['occasion_title'];
            $occasion_id=$row_data['occasion_id'];
            echo "<li class='nav-item bg-gradient'>
            <a href='buildaboxpage.php?occasion=$occasion_id' class='nav-link text-light-emphasis'>$occasion_title</a>
          </li>";
          }
          */
      ?>
    </ul>
    <!--categories-->
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item">
        <a href="#" class="nav-link text-light-emphasis"><h4>Categories</h4></a>
      </li>
      <?php
          getcategory();
          /*
          $select_category = "SELECT * from `categories`";
          $result_category = mysqli_query($con,$select_category);
          //$row_data=mysqli_fetch_assoc($result_occasion);
          //echo $row_data['occasion_title'];
          while($row_data=mysqli_fetch_assoc($result_category)){
            $category_title=$row_data['category_title'];
            $category_id=$row_data['category_id'];
            echo "<li class='nav-item bg-gradient'>
            <a href='buildaboxpage.php?category=$category_id' class='nav-link text-light-emphasis'>$category_title</a>
          </li>";
          }
          */
      ?>
    </ul>

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
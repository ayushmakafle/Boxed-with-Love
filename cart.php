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
    <title>Build a Box- Cart</title>
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
                    <li id="lg-bag"> <a href="cart.php"><i class="active fa-solid fa-cart-shopping" style="color: #ffffff;"></i></a></li>
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
      
      <!--build box nav bar end-->
 <!--table-->
 <div class="container m-2">
    <div class="row">
        <form action="" method="post"> 
        <table class="table table-bordered">
           
            <tbody>
                <?php
                global $con;
                $total_price = 0;
                $get_ip_address = getIPAddress();
                $cart_query = "SELECT * from `cart_details` where ip_address='$get_ip_address'";
                $result = mysqli_query($con,$cart_query);
                $result_count=mysqli_num_rows($result);
                if($result_count>0){
                    echo" <thead>
                    <tr>
                        <th> Product </th>
                        <th> Image</th>
                        <th> Quantity</th>
                        <th> Total Price</th>
                        <th> Remove</th>
                        <th colspan='2'> Operations</th>
                    </tr>
                </thead>";
                while($row = mysqli_fetch_array($result)){
                    $product_id = $row['product_id'];
                    $select_products = "SELECT * from `products` where product_id='$product_id'";
                    $result_product = mysqli_query($con,$select_products);
                    while($row_product_price = mysqli_fetch_array($result_product)){
                        $product_price=array($row_product_price['product_price']);
                        $price_table=$row_product_price['product_price'];
                        $product_title=$row_product_price['product_title'];
                        $product_image1=$row_product_price['product_image1'];
                        $product_values=array_sum($product_price);
                        $total_price += $product_values;
                
            ?>
                <tr>
                    <td> <?php echo $product_title?> </td>
                    <td> <img src="./admin_area/product_images/<?php echo $product_image1?>" alt=""
                    class="cart_img" style="width: 50px; height: 50px; object-fit:contain"></td>
                    <td> <input type="text" name="qty" 
                    class="form-input w-50"></td>
                    <?php
                    $get_ip_address=getIPAddress();
                    if(isset($_POST['update_cart'])){
                       $quantities=$_POST['qty']; 
                       $update_cart = "UPDATE `cart_details` set quantity=$quantities
                       where ip_address='$get_ip_address'";
                        $result_product_quantity = mysqli_query($con,$update_cart);
                        $total_price= $total_price*$quantities;

                    }
                    ?>
                    <td> NRs. <?php echo $price_table?> /- </td>
                    <td> <input type="checkbox" name="removeitem[]"
                    value="<?php echo $product_id?>"></td>
                    <td> 
                        <!--button class="bg-danger-subtle
            px-3 py-2 border-0 text-dramatic">Update</button-->
            <input type="submit" value="Update" 
            class="bg-danger-subtle
            px-3 py-2 border-0 text-dramatic" name="update_cart">
                        <!--button class="bg-danger-subtle
            px-3 py-2 border-0 text-dramatic">Remove</button-->
            <input type="submit" value="Remove" 
            class="bg-danger-subtle
            px-3 py-2 border-0 text-dramatic" name="remove_cart">
                        
                       
                    </td>
                </tr>
                <?php
                }
            }
        }
        else{
            echo "<br><h3 class='text-center text-danger'>Cart is empty</h3>";
        }
            ?>
            </tbody>
        </table>

        <!--subtotal-->
        <div class="d-flex mb-5">
        <?php
                global $con;
                $get_ip_address = getIPAddress();
                $cart_query = "SELECT * from `cart_details` where ip_address='$get_ip_address'";
                $result = mysqli_query($con,$cart_query);
                $result_count=mysqli_num_rows($result);
                if($result_count>0){
                    echo"   <h4 class='px-3'>Subtotal: 
                    <strong class='text-danger'>
                    $total_price</strong></h4>
                    <a href='buildaboxpage.php'>
                    <button class='bg-danger
                    px-3 py-2 border-0 mx-3 text-light'>
                    Add more treasures </button></a>
                   <button class='bg-danger px-3 py-2 border-0 text-light'>
                   <a href='checkout.php' class='text-light text-decoration-none'>
                   Checkout </a></button>
        ";}else{
        }
        ?>        
         
        </div>
                </div>
                </form>
 </div>
  
 <!--function to remove item-->
 <?php
 function remove_cart_item(){
    global $con;
    if(isset($_POST['remove_cart'])){
        foreach($_POST['removeitem'] as $remove_id){
            echo $remove_id;
            $delete_query="DELETE from `cart_details` where 
            product_id=$remove_id";
            $run_delete=mysqli_query($con,$delete_query);
            if($run_delete){
                echo"<script>window.open('cart.php','_self')
                </script>";
            } 
        }
    }
 }
 echo $remove_item=remove_cart_item();
 ?>
 

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
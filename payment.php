<?php
include('functions/common_function.php');
include("includes/connect.php");


if (!isLoggedIn()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}

include 'includes/connect.php';
      ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay with Khalti</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>
    <style>
			body{
				overflow-x: hidden;
			}
		</style>
</head>

    <body>
        <!--Nav bar-->
		 <section id ="header">
            <a href="index.php"><img src="img/logoo.png" ></a>
            <div>
                <ul id ="navbar">
                    <li><a href="index.php" class="active">Home</a></li>
					<li><a href="buildaboxpage.php">Build a Box</a></li>
                    <li><a href="bestseller.php">Best Sellers</a></li>
					<li> <a href="user_login.php"><i class="far fa-user"></i></a></li>
                    <li id="lg-bag"> <a href="cart.php"><i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i></a></li>
					<a href="#" id="close"><i class="far fa-times"></i></a>
				</ul>
			</div>
			<div id ="mobile">
				<a href="cart.html"><i class="far fa-shopping-cart"></i></a>
				<i id="bar" class="fas fa-outdent"></i>
			</div>
            </section>
    <?php
    $currentPage = basename($_SERVER['PHP_SELF']);
    ?>


    <div class="container">
        <br>
    <h1 class="text-center text-danger ">Confirm Payment</h1>
    <div class="d-flex align-items-center justify-content-center text-dark">
    <?php
    
if (isset($_GET['bill_id'])) {
    $bill_id = $_GET['bill_id'];
    $sql = "SELECT amount_due FROM bill WHERE bill_id = '$bill_id'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $amount = $row['amount_due'];
        echo "<h2>Bill Amount: $amount</h2>";
      } else {
        echo "<h2>No results found.</h2>";
    }
}
?></div>
<div class="d-flex align-items-center justify-content-center">
        <button id="payment" class="d-flex align-items-center bg-danger-subtle my-3 p-3 border-0">
            Pay with Khalti</button>
    </div>
    </div>
        <script>
            var config = {
                // replace the publicKey with yours
                "publicKey": "test_public_key_bdbfb88984c24b7194ff05cd4b05ac8f",
                "productIdentity": "<?php echo $bill_id;?>",
                "productName": "Bill Payment",
                //http://localhost/nea-billing-system/payment.php?billid=12327&amount=891
                "productUrl": "http://localhost/boxedwithlove/Boxed-with-Love/payment.php?bill_id=<?php echo $bill_id;?>",
                "paymentPreference": [
                    "KHALTI",
                    "EBANKING",
                    "MOBILE_BANKING",
                    "CONNECT_IPS",
                    "SCT",
                ],
                "eventHandler": {
                    onSuccess(payload) {
                        console.log(payload);
                        axios.defaults.baseURL = 'http://localhost/nea-billing-system/verify.php';
                        axios.get("http://localhost/boxedwithlove/Boxed-with-Love/verify.php", {
                            params: {
                                "token": payload.token,
                                "bill_id": <?php echo $bill_id; ?>,
                                "amount": payload.amount,
                            }
                        }).then(function (resp) {
                            console.log(resp.data);
                            // Redirect to user_profile.php after successful payment
                            console.log('Redirecting to user_profile.php');
                            window.location.href = 'profile.php';
                        })
                    },
                    onError(error) {
                        console.log(error);
                    },
                    onClose() {
                        console.log('widget is closing');
                    }
                }
            };

            var checkout = new KhaltiCheckout(config);
            var btn = document.getElementById("payment");
            btn.onclick = function () {
                // minimum transaction amount must be 10, i.e 1000 in paisa.
                checkout.show({ amount: <?php echo $amount*100; ?> });
            }
        </script>
</body>
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
					<a href="user_login.php">Sign In</a>
					<a href="cart.php"> View Cart</a>
				</div>
				<div class="col">
					<h4></h4>
					<a href="admin_login.php">Admin</a>
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
						<img src="img/khalti.jpg">
					</div>
					</div>
				</div>
				<div class="copyright">
					<p><small>&copy; Copyright 2023, Boxed with Love</small></p>
				</div>
			</div>

		</footer>
        <script src="script.js"></script>
    
	
</html>

<!--connect file-->
<?php
  include('./functions/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
      <!--Bootstrap css-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!--fontawesone-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <style>
       body{
         overflow-x:hidden;
       }

    </style>
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
    <!--access user id-->
    <?php
        $user_ip=getIPAddress();
        $get_user="SELECT * from `user_table` where user_ip='$user_ip'";
        $result=mysqli_query($con,$get_user);
        $run_query=mysqli_fetch_array($result);
        $user_id = $run_query['user_id'];
    ?>
    <div class="container">
        <h2 class="text-center text-danger">Payment Options</h2>
        <div class="row d-flex justify-content-center align-items-center my-5">
            <div class="col-md-6">
                <a href="https://www.khalti.com/" target="_blank">
                <img src="img/khalti.jpg" style=" width: 50% ;
        margin: auto;
        display: block;"> </a>
            </div>
            <div class="col-md-6">
                <a href="order.php?user_id=<?php echo $user_id?>" target="_blank"><h2>Pay Offline </h2></a>
            </div>

        </div>
    </div>
</body>
</html>
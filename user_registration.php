<!--connect file-->
<?php
  include('./functions/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
      <!--Bootstrap css-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!--fontawesone-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style.css">
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
    <div class="container-fluid my-3">
        <h2 class="text-center text-danger">
            New User Registration
        </h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post">
                    <div class="form-outline mb-4">
                        <label for="user_username"class="form-label">Username </label>
                         <input type="text" id="user_username" class="form-control"
                         placeholder="enter your username"
                         name="user_name" autocomplete="off" required>
                    </div>
                    <div class="form-outline mb-4">
                        <label for="user_email"class="form-label">Email </label>
                         <input type="email" id="user_email" class="form-control"
                         placeholder="enter your email"
                         name="user_email" autocomplete="off" required>
                    </div>
                    <div class="form-outline mb-4">
                        <label for="user_password"class="form-label">Password </label>
                         <input type="password" id="user_password" class="form-control"
                         placeholder="enter your password"
                         name="user_password" autocomplete="off" required>
                    </div>
                    <div class="form-outline mb-4">
                        <label for="conf_user_password"class="form-label">Confirm Password </label>
                         <input type="password" id="conf_user_password" class="form-control"
                         placeholder="reenter your password"
                         name="conf_user_password" autocomplete="off" required>
                    </div>
                    <div class="form-outline mb-4">
                        <label for="user_address"class="form-label">Address </label>
                         <input type="text" id="user_address" class="form-control"
                         placeholder="enter your address"
                         name="user_address" autocomplete="off" required>
                    </div>
                    <div class="form-outline mb-4">
                        <label for="user_contact"class="form-label">Contact </label>
                         <input type="text" id="user_contact" class="form-control"
                         placeholder="enter your phone number"
                         name="user_contact" autocomplete="off" required>
                    </div>
                    <div class="text-center mt-4 pt-2"></fiv>
                        <input type="submit" value="Register"
                        class="bg-danger-subtle py-2 border-0 px-3"
                        name="user_register">
                        <p class="small fw-bold mt-2 pt-1">
                            Already have an account? 
                            <a class="text-danger" href="user_login.php">Login</a></p>

                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php
if(isset($_POST['user_register'])){
    $user_username=$_POST['user_name'];
    $user_email=$_POST['user_email'];
    $user_password=$_POST['user_password'];
    $hash_password=password_hash($user_password,PASSWORD_DEFAULT);
    $user_address=$_POST['user_address'];
    $user_contact=$_POST['user_contact'];
    $conf_user_password=$_POST['conf_user_password'];
    $user_ip = getIPAddress();
    //select query
    $select_query="SELECT * from `user_table` where 
    username='$user_username' or user_email='$user_email'";
    $result=mysqli_query($con,$select_query);
    $rows_count=mysqli_num_rows($result);
    if($rows_count>0){
        echo"<script>alert('Username and email already exists')</script>";
    }elseif($user_password!=$conf_user_password){
        echo"<script>alert('passwords do not match')</script>";
    }else{
    //insert query
    $insert_query="INSERT into `user_table` 
    (username, user_email,user_password,user_ip,user_address,user_mobile)values
    ('$user_username','$user_email','$hash_password','$user_ip','$user_address','$user_contact')";
    $sql_execute=mysqli_query($con,$insert_query);
    if($sql_execute){
        echo"<script>alert('Registered succesfully');</script>";
    }else{
        die(mysqli_error($con));
    }
    }
   //selecting cart items
    $select_cart_items="SELECT * from `cart_details` where
    ip_address='$user_ip'";
    $result_cart=mysqli_query($con,$select_cart_items);
    $rows_count=mysqli_num_rows($result_cart);
    if($rows_count>0){
        $_SESSION['username']=$user_username;
        echo"<script>alert('you have items in your cart');</script>";
        echo"<script>window.open('checkout.php','_self'); </script>";
    }else{
        echo"<script>window.open('index.php','_self'); </script>";
    }
}

?>
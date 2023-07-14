<!--connect file-->
<?php
  include('./functions/common_function.php');
  @session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
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
    
    <div class="container-fluid my-3">
        <h2 class="text-center text-danger">
            User Login 
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
                        <label for="user_password"class="form-label">Password </label>
                         <input type="password" id="user_password" class="form-control"
                         placeholder="enter your password"
                         name="user_password" autocomplete="off" required>
                    </div>
                   
                   
                    <div class="text-center mt-4 pt-2"></fiv>
                        <input type="submit" value="Login"
                        class="bg-danger-subtle py-2 border-0 px-3"
                        name="user_login">
                        <p class="small fw-bold mt-2 pt-1">
                            Don't have an account? 
                            <a class="text-danger" 
                            href="user_registration.php">Register</a></p>

                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php
    if(isset($_POST['user_login'])){
        $user_username=$_POST['user_name'];
        $user_password=$_POST['user_password'];
        $user_ip=getIPAddress();

        $select_query="SELECT * from `user_table` where
        username='$user_username'";
        $result=mysqli_query($con,$select_query);
        $row_count=mysqli_num_rows($result);
        $row_data=mysqli_fetch_assoc($result);

        //cart item
        $select_query_cart="SELECT * from `cart_details` where
        ip_address='$user_ip'";
        $select_cart=mysqli_query($con,$select_query_cart);
        $row_count_cart=mysqli_num_rows($select_cart);

        if($row_count>0){
            $_SESSION['username']=$user_username;

            if(password_verify($user_password,$row_data['user_password'])){
                
                    session_start();

                    $_SESSION['username']=$user_username;
                    echo"<script>alert('Login successful')</script>";
                    echo"<script>window.open('profile.php','_self')</script>";

                }
            }else{
                echo"<script>alert('invalid credentials')</script>";

            }
        }else{
            echo"<script>alert('invalid credentials')</script>";
        }
  
?>
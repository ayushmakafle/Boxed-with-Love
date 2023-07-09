<?php
  include('./functions/common_function.php');
  @session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
      <!--Bootstrap css-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!--fontawesone-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body{
            overflow: hidden;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <h2 class="text-center mb-5 mt-5 text-danger">Admin Login</h2> 
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-6 col-xl-5">
                <img src="./img/reg.png" alt="adminimage" class="img-fluid">
            </div>
            <div class="col-lg-6 col-xl-5">
                <form action="" method="post">
                    <div class="form-outline mb-4">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" id="username" name="username" placeholder="Enter your username" required="required" class="form-control">
                    </div>
                    <div class="form-outline mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter your password" required="required" class="form-control">
                    </div>
                    <div>
                        <input type="submit" class="bg-danger py-2 px-3 border-0"
                        name="admin_login" value="Login">
                        <p class="small fw-bold mt-2 pt-1">Don't have an account?
                            <a href="admin_registration.php" class="link-danger">Registrer</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>
</html>
<?php
    if(isset($_POST['admin_login'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $select_query="SELECT * from `admin_table` where admin_name='$username'";
        $result=mysqli_query($con,$select_query);
        $row_count=mysqli_num_rows($result);
        $row_data=mysqli_fetch_assoc($result);

        if($row_count>0){
            $_SESSION['admin_name']=$username;

            if(password_verify($password,$row_data['admin_password'])){
                if($row_count==1 and $row_count_cart==0){
                    $_SESSION['admin_name']=$username;

                    echo"<script>alert('Login successful')</script>";
                    echo"<script>window.open('admin_index.php','_self')</script>";

                }
            }else{
                echo"<script>alert('invalid credentials')</script>";

            }
        }else{
            echo"<script>alert('invalid credentials')</script>";
        }
    }
?>
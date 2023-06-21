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
    <link rel="stylesheet" href="style.css">
</head>
<body>
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
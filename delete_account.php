<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Account</title>
</head>
<body>
    <h3 class="text-danger mb-4"> Delete Account<h3>
        <form action="" method="post" class="mt-5">
            <div class="form-outline mb-4">
                <input type="submit" class="form-control w-50 m-auto" name="delete"
                value="Delete Account">
            </div>
        </form> 
        <?php
            $username_session = $_SESSION['username'];
            if(isset($_POST['delete'])){
                $delete_query="DELETE from `user_table` where 
                username='$username_session'";
                $result=mysqli_query($con,$delete_query);
                if($result){
                    session_destroy();
                    echo"<script>alert('account deleted')</script>";
                    echo"<script>window.open('index.php','_self') </script>";
                }
            }
        ?>

</body>
</html>
<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Account</title>
</head>
<body>
    <h3 class="text-center text-danger mb-4">Edit Account</h3>
    <form action="" method="post">
        <div class="form-outline mb-4">
            <input type="text" class="form-control w-50 m-auto"
            name="user_username" placeholder="your username">
        </div>
        <div class="form-outline mb-4">
            <input type="email" class="form-control w-50 m-auto"
            name="user_email" placeholder="your email">
        </div>
        <div class="form-outline mb-4">
            <input type="text" class="form-control w-50 m-auto"
            name="user_address" placeholder="your address">
        </div>
        <div class="form-outline mb-4">
            <input type="text" class="form-control w-50 m-auto"
            name="user_mobile" placeholder="your contact">
        </div>
        <input type="submit" value="Update"class="bg-danger py-2 px-3 border-0"
        name="user_update">
    </form>
</body>
</html>
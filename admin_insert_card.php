<?php
include('../includes/connect.php');
if(isset($_POST['insert_card'])){
    $card_name=$_POST['card_name'];
    //accessing images
    $card_image=$_FILES['card_image']['name'];
    //accessing timage tmp name
    $temp_image=$_FILES['card_image']['tmp_name'];

    //empty condition
    if($card_name=='' or $card_image==''){
        echo"<script>alert('please fill all available fields')</script>";
        exit();
    }else{
        move_uploaded_file($temp_image,"card_images/$card_image");

        //insert query
        $insert_product = "INSERT INTO `card` 
        (card_name, card_image) VALUES
        ('$card_name', '$card_image')";
        $result_query=mysqli_query($con,$insert_product);
        if($result_query){
            echo"<script>alert('succesfully inserted the card')</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products - Admin Dashboard</title>
      <!--Bootstrap css-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!--fontawesone-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-danger-subtle">
    <div class="container mt-3">
        <h1 class="text-center mb-4"> Insert Card </h1>
        <form action="" method="post" enctype="multipart/form-data">
            <!--title-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="card_name" class="form-label">Card Name </label>
                <input type="text" name="card_name" 
                id="card_name" class="form-control"
                placeholder="Enter Card Name" 
                autocomplete="off" required="required">
            </div>
            <!--image-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="card_image" class="form-label">
                    Image </label>
                <input type="file" name="card_image" 
                id="card_image" class="form-control"
                required="required">
            </div>
            <!--submit-->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_card"
                class="btn btn_info mb-3 p-3 bg-danger" value="Insert Card">
            </div>


        </form>    
    </div>
    
</body>
</html>
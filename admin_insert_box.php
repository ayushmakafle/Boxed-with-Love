<?php
include('../includes/connect.php');
if(isset($_POST['insert_box'])){
    $box_name=$_POST['box_name'];
    $box_description=$_POST['box_description'];
    //accessing images
    $box_image=$_FILES['box_image']['name'];
    //accessing timage tmp name
    $temp_image=$_FILES['box_image']['tmp_name'];

    $box_price=$_POST['box_price'];
    //empty condition
    if($box_name=='' or $box_description=='' or $box_image=='' or $box_price==''){
        echo"<script>alert('please fill all available fields')</script>";
        exit();
    }else{
        move_uploaded_file($temp_image,"box_images/$box_image");

        //insert query
        $insert_product = "INSERT INTO `box` 
        (box_name, box_description, box_price, box_image) VALUES
        ('$box_name', '$box_description','$box_price', '$box_image')";
        $result_query=mysqli_query($con,$insert_product);
        if($result_query){
            echo"<script>alert('succesfully inserted the box')</script>";
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
        <h1 class="text-center mb-4"> Insert Box </h1>
        <form action="" method="post" enctype="multipart/form-data">
            <!--title-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="box_name" class="form-label">Box Title </label>
                <input type="text" name="box_name" 
                id="box_name" class="form-control"
                placeholder="Enter Box Name" 
                autocomplete="off" required="required">
            </div>
            <!--description-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="box_description" class="form-label">Box Description </label>
                <input type="text" name="box_description" 
                id="box_description" class="form-control"
                placeholder="Enter Box Description" autocomplete="off" required="required">
            </div>
            <!--image-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="box_image" class="form-label">
                    Image </label>
                <input type="file" name="box_image" 
                id="box_image" class="form-control"
                required="required">
            </div>
            <!--price-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="box_price" class="form-label">
                    Box Price </label>
                <input type="text" name="box_price" 
                id="box_price" class="form-control"
                placeholder="Enter Box Price" autocomplete="off"
                required="required">
            </div>
            <!--submit-->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_box"
                class="btn btn_info mb-3 p-3 bg-danger" value="Insert Box">
            </div>


        </form>    
    </div>
    
</body>
</html>
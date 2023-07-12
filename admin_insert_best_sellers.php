<?php
include('../includes/connect.php');
if(isset($_POST['insert_bestseller'])){
    $product_title=$_POST['product_title'];
    $product_description=$_POST['product_description'];
    //accessing images
    $product_image1=$_FILES['product_image1']['name'];
    //accessing timage tmp name
    $temp_image1=$_FILES['product_image1']['tmp_name'];

    $product_price=$_POST['product_price'];
    //empty condition
    if($product_title=='' or $product_description=='' or $product_price=='' or $product_image1 ==''){
        echo"<script>alert('please fill all available fields')</script>";
        exit();
    }else{
        move_uploaded_file($temp_image1,"bestseller_images/$product_image1");

        //insert query
        $insert_product = "INSERT INTO `bestseller` 
        (product_title, product_description, product_price, product_image1) VALUES
        ('$product_title', '$product_description', '$product_price', '$product_image1')";
        $result_query=mysqli_query($con,$insert_product);
        if($result_query){
            echo"<script>alert('succesfully inserted the product')</script>";
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
        <h1 class="text-center mb-4"> Insert Best Sellers </h1>
        <form action="" method="post" enctype="multipart/form-data">
            <!--title-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product Title </label>
                <input type="text" name="product_title" 
                id="product_title" class="form-control"
                placeholder="Enter Product Title" 
                autocomplete="off" required="required">
            </div>
            <!--description-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_description" class="form-label">Product Description </label>
                <input type="text" name="product_description" 
                id="product_description" class="form-control"
                placeholder="Enter Product Description" autocomplete="off" required="required">
            </div>
          
            <!--image1-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">
                    Product Image 1</label>
                <input type="file" name="product_image1" 
                id="product_image1" class="form-control"
                required="required">
            </div>
            
            <!--price-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">
                    Product Price </label>
                <input type="text" name="product_price" 
                id="product_price" class="form-control"
                placeholder="Enter Product Price" autocomplete="off"
                required="required">
            </div>
            <!--submit-->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_bestseller"
                class="btn btn_info mb-3 p-3 bg-danger" value="Insert Product">
            </div>


        </form>    
    </div>
    
</body>
</html>
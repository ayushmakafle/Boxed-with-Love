<?php
include('../includes/connect.php');
if(isset($_POST['insert_product'])){
    $product_title=$_POST['product_title'];
    $product_description=$_POST['product_description'];
    $product_keywords=$_POST['product_keywords'];
    $product_category=$_POST['product_category'];
    $product_occasion=$_POST['product_occasion'];
    //accessing images
    $product_image1=$_FILES['product_image1']['name'];
    $product_image2=$_FILES['product_image2']['name'];
    $product_image3=$_FILES['product_image3']['name'];
    //accessing timage tmp name
    $temp_image1=$_FILES['product_image1']['tmp_name'];
    $temp_image2=$_FILES['product_image2']['tmp_name'];
    $temp_image3=$_FILES['product_image3']['tmp_name'];

    $product_price=$_POST['product_price'];
    $product_status='true';
    //empty condition
    if($product_title=='' or $product_description==''
    or $product_keywords=='' or $product_category==''
    or $product_occasion=='' or $product_price=='' 
    or $product_image1 =='' or $product_image2==''
    or $product_image3 ==''){
        echo"<script>alert('please fill all available fields')</script>";
        exit();
    }else{
        move_uploaded_file($temp_image1,"./product_images/$product_image1");
        move_uploaded_file($temp_image2,"./product_images/$product_image2");
        move_uploaded_file($temp_image3,"./product_images/$product_image3");

        //insert query
        $insert_product = "INSERT INTO `products` 
        (product_title, product_description, product_keywords,
        product_category, product_occasion, product_price,
        product_image1 , product_image2, product_image3,
        date, status) VALUES('$product_title', 
        '$product_description', '$product_keywords', '$product_category', 
        '$product_occasion', '$product_price', '$product_image1',
        '$product_image2','$product_image3',NOW(),'$product_status')";
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
        <h1 class="text-center mb-4"> Insert Products </h1>
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
            <!--keywords-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keywords" class="form-label">
                    Product Keywords</label>
                <input type="text" name="product_keywords" 
                id="product_keywords" class="form-control"
                placeholder="Enter Product Keywords" autocomplete="off" required="required">
            </div>
            <!--category-->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_category" id="product_category" class="form-select">
                    <option value="">Select a Category</option>
                    <?php
                        $select_query="SELECT * from `categories`";
                        $result_query=mysqli_query($con,$select_query);
                        while($row=mysqli_fetch_assoc($result_query)){
                            $category_title=$row['category_title'];
                            $category_id=$row['category_id'];
                            echo "<option value='$category_id'>$category_title</option>";
                        }
                    ?>
                </select>
            </div>
            <!--occasions-->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_occasion" id="product_occasion" class="form-select">
                    <option value="">Select an Occasion</option>
                    <?php
                        $select_query="SELECT * from `occasions`";
                        $result_query=mysqli_query($con,$select_query);
                        while($row=mysqli_fetch_assoc($result_query)){
                            $occasion_title=$row['occasion_title'];
                            $occasion_id=$row['occasion_id'];
                            echo "<option value='$occasion_id'>$occasion_title</option>";
                        }
                    ?>
                </select>
            </div>
            <!--image1-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">
                    Product Image 1</label>
                <input type="file" name="product_image1" 
                id="product_image1" class="form-control"
                required="required">
            </div>
            <!--image2-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image_2" class="form-label">
                    Product Image 2</label>
                <input type="file" name="product_image2" 
                id="product_image2" class="form-control"
                required="required">
            </div>
            <!--image3-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image_3" class="form-label">
                    Product Image 3</label>
                <input type="file" name="product_image3" 
                id="product_image3" class="form-control"
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
                <input type="submit" name="insert_product"
                class="btn btn_info mb-3 p-3 bg-danger" value="Insert Product">
            </div>


        </form>    
    </div>
    
</body>
</html>
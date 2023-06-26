<?php
if(isset($_GET['edit_products'])){
    $edit_id=$_GET['edit_products'];
    $get_data="SELECT * FROM `products`where product_id=$edit_id";
    $result=mysqli_query($con,$get_data);
    $row=mysqli_fetch_assoc($result);
    $product_title=$row['product_title'];
    $product_description=$row['product_description'];
    $product_keywords=$row['product_keywords'];
    $product_category=$row['product_category'];
    $product_occassion=$row['product_occasion'];
    $product_price=$row['product_price'];
    $product_image1=$row['product_image1'];
    $product_image2=$row['product_image2'];
    $product_image3=$row['product_image3'];

    //fetching category
    $select_category="SELECT * FROM `categories` where category_id=$product_category";
    $result_category=mysqli_query($con,$select_category);
    $row_category=mysqli_fetch_assoc($result_category);
    $category_title=$row_category['category_title'];
     
    //fetching occassion
     $select_occassion="SELECT * FROM `occasions` where occasion_id=$product_occassion";
     $result_occassion=mysqli_query($con,$select_occassion);
     $row_occassion=mysqli_fetch_assoc($result_occassion);
     $occassion_title=$row_occassion['occasion_title'];
 
}


?>
<div class="container mt-5">
    <h1 class="text-center text-danger">Edit Product</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_title" class="form-label">
                Product Title</label>
            <input type="text" id="product_title" 
            value="<?php echo $product_title?>"
            name="product_title" class="form-control" required="required">
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_description" class="form-label">
                Product Description</label>
            <input type="text" id="product_description" 
            value="<?php echo $product_description?>"
            name="product_description" class="form-control" required="required">
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_keywords" class="form-label">
                Product Keywords</label>
            <input type="text" id="product_keywords" 
            value="<?php echo $product_keywords?>"
            name="product_keywords" class="form-control" required="required">
        </div>
        <div class="form-outline w-50 m-auto mb-4">
        <label for="product_category" class="form-label">
                Product Category</label>
            <select name="product_category" class="form-select">
                <option value="<?php echo $category_title ?>"><?php echo $category_title ?></option>
                <?php
                $select_category_all="SELECT * FROM `categories`";
                $result_category_all=mysqli_query($con,$select_category_all);
                while($row_category_all=mysqli_fetch_assoc($result_category_all)){
                    $category_title=$row_category_all['category_title'];
                    $category_id=$row_category_all['category_id'];
                    echo "<option value='$category_id'>$category_title</option>";
                }
                $category_title=$row_category['category_title'];
                ?>
            </select>
        </div>
        <div class="form-outline w-50 m-auto mb-4">
        <label for="product_occassion" class="form-label">
                Product Occassion</label>
            <select name="product_occassion" class="form-select">
                <option value="<?php echo $occassion_title ?>"><?php echo $occassion_title?></option>
                <?php
                $select_occassion_all="SELECT * FROM `occasions`";
                $result_occassion_all=mysqli_query($con,$select_occassion_all);
                while($row_occassion_all=mysqli_fetch_assoc($result_occassion_all)){
                    $occassion_title=$row_occassion_all['occasion_title'];
                    $occassion_id=$row_occassion_all['occasion_id'];
                    echo "<option value='$occassion_id'>$occassion_title</option>";
                }
                $occassion_title=$row_occassion['occasion_title'];
                ?>
            </select>
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_image1" class="form-label">
                Product Image</label>
            <div class="d-flex">
                <input type="file" id="product_image1" 
                name="product_image1" class="form-control w-50 m-auto" required="required">
                <img src="product_images/<?php echo $product_image1?>" alt=""
                style="width: 100px;object-fit">
            </div>
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_image2" class="form-label">
                Product Image</label>
            <div class="d-flex">
                <input type="file" id="product_image2" 
                name="product_image2" class="form-control w-50 m-auto" required="required">
                <img src="product_images/<?php echo $product_image2?>" alt=""
                style="width: 100px;object-fit">
            </div>
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_image3" class="form-label">
                Product Image</label>
            <div class="d-flex">
                <input type="file" id="product_image3" 
                name="product_image3" class="form-control w-50 m-auto" required="required">
                <img src="product_images/<?php echo $product_image3?>" alt=""
                style="width: 100px;object-fit">
            </div>
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_price" class="form-label">
                Product Price</label>
            <input type="text" id="product_price" 
            value="<?php echo $product_price?>"
            name="product_price" class="form-control" required="required">
        </div>
        <div class="text-center">
            <input type="submit" name="edit_product"
            value="Update" class="btn btn-danger px-3 mb-3">

    </form>
</div>

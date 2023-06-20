<?php
//connect file
include('./includes/connect.php');

//getting products
function getproducts(){
    global $con; // assuming $con is the database connection variable

    //condition to check isset or not
    if(!isset($_GET['category'])){
        if(!isset($_GET['occassion'])){
    
    $select_query = 'SELECT * FROM `products` ORDER BY RAND() LIMIT 0,9';
    $result_query = mysqli_query($con, $select_query);

    if (!$result_query) {
        // Handle query error
        echo "Error executing query: " . mysqli_error($con);
        return;
    }

    while ($row = mysqli_fetch_assoc($result_query)) {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_category = $row['product_category'];
        $product_occasion = $row['product_occasion'];
        $product_price = $row['product_price'];
        $product_image1 = $row['product_image1'];

        echo "
        <div class='col-md-4 mb-2'>
            <div class='card'>
                <img class='card-img-top' src='./admin_area/product_images/$product_image1' alt='$product_title'>
                <div class='card-body'>
                    <h5 class='card-title'>$product_title</h5>
                    <p class='card-text'>$product_description</p>
                    <a href='#' class='btn btn-primary' style='background-color: hotpink; border: 0;'>Add To Box</a>
                    <a href='#' class='btn btn-primary' style='background-color: hotpink; border: 0;'>View</a>
                </div>
            </div>
        </div>";
    }
}
}
}

//getting unique categories
function get_unique_categories(){
    global $con; // assuming $con is the database connection variable

    //condition to check isset or not
    if(isset($_GET['category'])){
    $category_id=$_GET['category'];
    $select_query = "SELECT * FROM `products` where product_category='$category_id'";
    $result_query = mysqli_query($con, $select_query);
    $num_of_rows=mysqli_num_rows($result_query);
    if($num_of_rows==0){
        echo "<h3 class='text-center text-danger'> No stock for this category</h3>";
    }
    if (!$result_query) {
        // Handle query error
        echo "Error executing query: " . mysqli_error($con);
        return;
    }

    while ($row = mysqli_fetch_assoc($result_query)) {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_category = $row['product_category'];
        $product_occasion = $row['product_occasion'];
        $product_price = $row['product_price'];
        $product_image1 = $row['product_image1'];

        echo "
        <div class='col-md-4 mb-2'>
            <div class='card'>
                <img class='card-img-top' src='./admin_area/product_images/$product_image1' alt='$product_title'>
                <div class='card-body'>
                    <h5 class='card-title'>$product_title</h5>
                    <p class='card-text'>$product_description</p>
                    <a href='#' class='btn btn-primary' style='background-color: hotpink; border: 0;'>Add To Box</a>
                    <a href='#' class='btn btn-primary' style='background-color: hotpink; border: 0;'>View</a>
                </div>
            </div>
        </div>";
    }
}
}

//getting unique occassions
function get_unique_occassion(){
    global $con; // assuming $con is the database connection variable

    //condition to check isset or not
    if(isset($_GET['occassion'])){
    $occassion_id=$_GET['occassion'];
    $select_query = "SELECT * FROM `products` where product_occasion='$occassion_id'";
    $result_query = mysqli_query($con, $select_query);
    $num_of_rows=mysqli_num_rows($result_query);
    if($num_of_rows==0){
        echo "<h3 class='text-center text-danger'> No stock for this occassion</h3>";
    }
    if (!$result_query) {
        // Handle query error
        echo "Error executing query: " . mysqli_error($con);
        return;
    }

    while ($row = mysqli_fetch_assoc($result_query)) {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_category = $row['product_category'];
        $product_occasion = $row['product_occasion'];
        $product_price = $row['product_price'];
        $product_image1 = $row['product_image1'];

        echo "
        <div class='col-md-4 mb-2'>
            <div class='card'>
                <img class='card-img-top' src='./admin_area/product_images/$product_image1' alt='$product_title'>
                <div class='card-body'>
                    <h5 class='card-title'>$product_title</h5>
                    <p class='card-text'>$product_description</p>
                    <a href='#' class='btn btn-primary' style='background-color: hotpink; border: 0;'>Add To Box</a>
                    <a href='#' class='btn btn-primary' style='background-color: hotpink; border: 0;'>View</a>
                </div>
            </div>
        </div>";
    }
}
}


//displaying occasions in side nav
function getoccassion(){
    global $con;
    $select_occasion = "SELECT * from `occasions`";
    $result_occasion = mysqli_query($con,$select_occasion);
    //$row_data=mysqli_fetch_assoc($result_occasion);
    //echo $row_data['occasion_title'];
    while($row_data=mysqli_fetch_assoc($result_occasion)){
        $occasion_title=$row_data['occasion_title'];
        $occasion_id=$row_data['occasion_id'];
        echo "<li class='nav-item bg-gradient'>
        <a href='buildaboxpage.php?occasion=$occasion_id' class='nav-link text-light-emphasis'>$occasion_title</a>
        </li>";
    }
}

//displaying categories in side nav
function getcategory(){
    global $con;
    $select_category = "SELECT * from `categories`";
          $result_category = mysqli_query($con,$select_category);
          //$row_data=mysqli_fetch_assoc($result_occasion);
          //echo $row_data['occasion_title'];
          while($row_data=mysqli_fetch_assoc($result_category)){
            $category_title=$row_data['category_title'];
            $category_id=$row_data['category_id'];
            echo "<li class='nav-item bg-gradient'>
            <a href='buildaboxpage.php?category=$category_id' class='nav-link text-light-emphasis'>$category_title</a>
          </li>";
          }
}

//searching products
function searchproduct(){
    global $con; // assuming $con is the database connection variable
    if(isset($_GET['search_data_product'])){
        $search_data_value=$_GET['search_data'];
    $search_query = "SELECT * FROM `products` where product_keywords like
    '%$search_data_value%'";
    $result_query = mysqli_query($con, $search_query);
    $num_of_rows=mysqli_num_rows($result_query);
    if($num_of_rows==0){
        echo "<h3 class='text-center text-danger'>No results match</h3>";
    }
    if (!$result_query) {
        // Handle query error
        echo "Error executing query: " . mysqli_error($con);
        return;
    }

    while ($row = mysqli_fetch_assoc($result_query)) {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_category = $row['product_category'];
        $product_occasion = $row['product_occasion'];
        $product_price = $row['product_price'];
        $product_image1 = $row['product_image1'];

        echo "
        <div class='col-md-4 mb-2'>
            <div class='card'>
                <img class='card-img-top' src='./admin_area/product_images/$product_image1' alt='$product_title'>
                <div class='card-body'>
                    <h5 class='card-title'>$product_title</h5>
                    <p class='card-text'>$product_description</p>
                    <a href='#' class='btn btn-primary' style='background-color: hotpink; border: 0;'>Add To Box</a>
                    <a href='#' class='btn btn-primary' style='background-color: hotpink; border: 0;'>View</a>
                </div>
            </div>
        </div>";
    }
}
}
?>

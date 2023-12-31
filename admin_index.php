<!--connect file-->
<?php
  include('includes/connect.php');
  include('functions/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
     <!--Bootstrap css-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!--fontawesone-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body{
            overflow-x: hidden;
        }
        .product_img{
            width: 10%;
            object-fit: contain;
        }
    </style>
</head>
<body>
    <!--navbar-->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FAA4B9;">
            <div class="container-fuild">
                <img src="../img/logoo.png" alt="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                            <?php
                            if(!isset($_SESSION['admin_name'])){
                                echo"<li class='nav-item'>
                                <a href=''class='nav-link'>Welcome Guest</a>
                                </li>";
                            }else{
                                echo"<li class='nav-item'>
                                <a href=''class='nav-link'>Welcome ".$_SESSION['admin_name']."</a>
                                </li>";
                            }
                            ?>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!--nav end-->
    <div >
        <h3 class="text-center p-2">Manage Details</h3>
    </div>
    <div class="row">
        <div class="col-md-12 bg-danger-subtle p-1 d-flex align-items-center">
            <div class="p-3">
            </div>
            <div class="button text-center">
                <button><a href="admin_index.php?view_products" class="nav-link text-dramatic bg-danger-sutble m-1">
                    View Products</a></button>
                <button><a href="insert_product.php" class="nav-link text-dramatic bg-danger-sutble m-1">
                    Insert Products</a></button>
                <button><a href="admin_index.php?insertcategories" class="nav-link text-dramatic bg-danger-sutble m-1">
                    Insert Categories</a></button>
                <button><a href="admin_index.php?view_categories" class="nav-link text-dramatic bg-danger-sutble m-1">
                    View Categories</a></button>
                <button><a href="admin_index.php?insertoccasions" class="nav-link text-dramatic bg-danger-sutble m-1">
                    Insert Occasions</a></button>
                <button><a href="admin_index.php?view_occassions" class="nav-link text-dramatic bg-danger-sutble m-1">
                    View Occassions</a></button>
                <button><a href="admin_index.php?insertbox" class="nav-link text-dramatic bg-danger-sutble m-1">
                    Insert Box</a></button>
                <button><a href="admin_index.php?insertcard" class="nav-link text-dramatic bg-danger-sutble m-1">
                    Insert Card</a></button>
                <button><a href="admin_index.php?insertbestsellers" class="nav-link text-dramatic bg-danger-sutble m-1">
                    Insert Best Sellers</a></button>
                <button><a href="admin_index.php?list_orders" class="nav-link text-dramatic bg-danger-sutble m-1">
                    All Orders</a></button>
                <button><a href="admin_index.php?list_payments" class="nav-link text-dramatic bg-danger-sutble m-1">
                    All Payments</a></button>
                <button><a href="admin_index.php?list_users" class="nav-link text-dramatic bg-danger-sutble m-1">
                    List users</a></button>
               <button><a href="admin_logout.php" class="nav-link text-dramatic bg-danger-sutble m-1">
                Logout</a></button>

            </div>
        </div>
    </div>
    <div class="container my-3"> 
        <?php
            if(isset($_GET['insertcategories'])){
                include('insertcategories.php');
            }
            if(isset($_GET['insertoccasions'])){
                include('insert_occasions.php');
            }
            if(isset($_GET['insertbox'])){
                include('admin_insert_box.php');
            }
            if(isset($_GET['insertcard'])){
                include('admin_insert_card.php');
            }
            if(isset($_GET['insertbestsellers'])){
                include('admin_insert_best_sellers.php');
            }
            if(isset($_GET['view_products'])){
                include('view_products.php');
            }
            if(isset($_GET['edit_products'])){
                include('edit_products.php');
            }
            if(isset($_GET['delete_product'])){
                include('delete_product.php');
            }
            if(isset($_GET['view_categories'])){
                include('view_categories.php');
            }
            if(isset($_GET['view_occassions'])){
                include('view_occassions.php');
            }
            if(isset($_GET['edit_category'])){
                include('edit_category.php');
            }
            if(isset($_GET['edit_occassion'])){
                include('edit_occassion.php');
            }
            if(isset($_GET['delete_category'])){
                include('delete_category.php');
            }
            if(isset($_GET['delete_occassion'])){
                include('delete_occassion.php');
            }
            if(isset($_GET['list_orders'])){
                include('list_orders.php');
            }
            if(isset($_GET['list_payments'])){
                include('list_payments.php');
            }
            if(isset($_GET['list_users'])){
                include('list_users.php');
            }
        ?>
    </div>
<!--footer-->  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html> 
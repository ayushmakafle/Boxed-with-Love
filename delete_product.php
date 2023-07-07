<?php
if(isset($_GET['delete_product'])){
    $delete_id=$_GET['delete_product'];

    $delete_product="DELETE from `products` where product_id=$delete_id";
    $result_product=mysqli_query($con,$delete_product);
    if($result_product){
        echo"<script>alert('product deleted')</script>";
        echo"<script>window.open('./admin_index.php','_self')</script>";

    }
}
?>
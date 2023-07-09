<?php
if(isset($_GET['delete_category'])){
    $delete_category=$_GET['delete_category'];

    $delete_query="DELETE from `categories` where category_id=$delete_category";
    $result=mysqli_query($con,$delete_query);
    if($result){
        echo "<script>alert('Category Deleted')</script>";
        echo "<script>window.open('./admin_index.php?view_categories','_self')</script>";
    }
}

?>
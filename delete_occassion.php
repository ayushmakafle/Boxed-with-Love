<?php
if(isset($_GET['delete_occassion'])){
    $delete_occassion=$_GET['delete_occassion'];

    $delete_query="DELETE from `occasions` where occasion_id=$delete_occassion";
    $result=mysqli_query($con,$delete_query);
    if($result){
        echo "<script>alert('Occassion Deleted')</script>";
        echo "<script>window.open('./admin_index.php?view_occassions','_self')</script>";
    }
}

?>
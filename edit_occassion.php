<?php
    if(isset($_GET['edit_occassion'])){
        $edit_occassion=$_GET['edit_occassion'];
        $get_occassion="SELECT * from `occasions` where occasion_id=$edit_occassion";
        $result=mysqli_query($con,$get_occassion);
        $row=mysqli_fetch_assoc($result);
        $occassion_title=$row['occasion_title'];
    }
    if(isset($_POST['edit_occ'])){
        $occ_title=$_POST['occassion_title'];
        $update_query="UPDATE `occasions` set occasion_title='$occ_title'
        where occasion_id=$edit_occassion";
        $result_occ=mysqli_query($con,$update_query);
        if($result_occ){
            echo "<script>alert('Occassion updated')</script>";
            echo "<script>window.open('./admin_index.php?view_occassions','_self')</script>";
        }
    }
?>
<div class="container mt-3">
    <h1 class="text-center text-danger">Edit Occassion</h1>
    <form action="" method="post" class="text-center">
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="occassion_title" class="form=label">Occassion Title</label>
            <input type="text" name="occassion_title" id="category_title"class="form-control" 
            required="required" value="<?php echo $occassion_title?>">

        </div>
        <input type="submit" value ="Update Occassion" class="btn btn-danger px-3 mb-3"
        name="edit_occ">

    </form>
</div>
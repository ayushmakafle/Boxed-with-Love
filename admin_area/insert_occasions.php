<?php
    include('../includes/connect.php');
    if(isset($_POST['insert_occasion'])){
        $occasion_title=$_POST['occasion_title'];
        //select data from database
        $select_query="SELECT * from `occasions`  where occasion_title='$occasion_title'";
        $result_select = mysqli_query($con, $select_query);
        if (!$result_select) {
            die('Query Error: ' . mysqli_error($con));
        }
        $number=mysqli_num_rows($result_select);
        if($number>0){
            echo"<script>alert('already present in database')</script>";
        }else{
        $insert_query = "INSERT INTO `occasions` (occasion_title) VALUES ('$occasion_title')";
        $result=mysqli_query($con,$insert_query);
        if($result){
            echo "<script>alert('Occasion has been inserted successfully');</script>";
        }
    }
    }
?>
<h2 class="text-center">Insert Occasions</h2>
<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
    <span class="input-group-text bg-danger-subtle" id="basic-addon1">
        <i class="fa-solid fa-receipt"></i>
    </span>
    <input type="text" class="form-control" name="occasion_title" placeholder="Insert Occasions" aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 mb-2 m-auto">
  <input type="submit" class="bg-danger-subtle border-0 " name="insert_occasion" 
  value="Insert Occasions">
    <!--button class="bg-danger-subtle my-3 p-3 border-0">Insert Occasions</button-->
</div>
</form>
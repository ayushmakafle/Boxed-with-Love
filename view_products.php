<h3 class="text-center text-danger">All Products</h3>
<table class="table table-bordered mt-5">
    <thead >
    <tr>
        <th class="text-danger">Product ID</th>
        <th class="text-danger">Product Title</th>
        <th class="text-danger">Product Image</th>
        <th class="text-danger">Product Price</th>
        <th class="text-danger">Total Sold</th>
        <th class="text-danger">Status</th>
        <th class="text-danger">Edit</th>
        <th class="text-danger">Delete</th>
    </tr>
    </thead>
    <tbody>
        <?php
        $get_products="SELECT * from `products`";
        $result=mysqli_query($con,$get_products);
        $number=0;
        while($row=mysqli_fetch_assoc($result)){
            $product_id=$row['product_id'];
            $product_title=$row['product_title'];
            $product_image1=$row['product_image1'];
            $product_price=$row['product_price'];
            $status=$row['status'];
            $number++;
            ?>
            <tr class='text-center'>
            <td class='text-danger'><?php echo $number?></td>
            <td> <?php echo $product_title?></td>
            <td> <img src='product_images/<?php echo $product_image1;?>' class='product_img'/></td>
            <td><?php echo $product_price?>/-</td>
            <td><?php
            $get_count="SELECT * from `orders_pending` where 
            product_id=$product_id";
            $result_count=mysqli_query($con,$get_count);
            $rows_count=mysqli_num_rows($result_count);
            echo $rows_count;
            ?></td>
            <td> <?php echo $status?></td>
            <td><a href='admin_index.php?edit_products=<?php
            echo $product_id ?>' class=''> 
            <i class='fa-solid fa-pen-to-square'></a></td>
            <td><a href='admin_index.php?delete_product=<?php
            echo $product_id ?>' class=''>
            <i class='fa-solid fa-trash'></a></td>        
        </tr>
        <?php
        }
        ?>
     
    </tbody>
</table>
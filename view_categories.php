<h3 class="text-center text-danger">All Categories</h3>
<table class="table table-bordered mt-5">
    <thead class="text-center">
        <tr>
            <th>SNo.</th>
            <th>Category</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody class="text-center">
        <?php
            $select_cat="SELECT * from `categories`";
            $result=mysqli_query($con,$select_cat);  
            $number=0 ;
            while($row=mysqli_fetch_assoc($result)){
                $category_id=$row['category_id'];
                $category_title=$row['category_title'];
                $number++;
            
        ?>
        <tr>
            <td><?php echo $number;?></td>
            <td><?php echo $category_title;?></td>
            <td><a href='' class=''> 
                <i class='fa-solid fa-pen-to-square'></i></a>
            </td>
            <td><a href='' class=''>
                <i class='fa-solid fa-trash'></i></a>
            </td> 
        </tr>
        <?php 
        } 
        ?>
    </tbody>
</table>
<h3 class="text-center text-danger">All Occassions</h3>
<table class="table table-bordered mt-5">
    <thead class="text-center">
        <tr>
            <th>SNo.</th>
            <th>Occassion</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody class="text-center">
        <?php
            $select_cat="SELECT * from `occasions`";
            $result=mysqli_query($con,$select_cat);  
            $number=0 ;
            while($row=mysqli_fetch_assoc($result)){
                $occassion_id=$row['occasion_id'];
                $occassion_title=$row['occasion_title'];
                $number++;
            
        ?>
        <tr>
            <td><?php echo $number;?></td>
            <td><?php echo $occassion_title;?></td>
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
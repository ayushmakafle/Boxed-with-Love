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
            <td><a href='admin_index.php?edit_occassion=<?php echo $occassion_id?>' class=''> 
                <i class='fa-solid fa-pen-to-square'></i></a>
            </td>
            <td><a href='admin_index.php?delete_occassion=<?php echo $occassion_id?>'>
                <i class='fa-solid fa-trash'></i></a>
            </td> 
        </tr>
        <?php 
        } 
        ?>
    </tbody>
</table>
<!-- Button trigger modal -->
<!--button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button-->

<!-- Modal -->
<!--div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

      </div>
      <div class="modal-body">
        <h4> Are you sure you want to delete this </h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
            <a href="./admin_index.php?view_occassions" class="text-light text-decoaration-none">
                No</a></button>
        <button type="button" class="btn btn-primary">
            <a href='admin_index.php?delete_occassion=</?php echo $occassion_id?>' class="text-light text-decoaration-none">
                Yes</a></button>
      </div>
    </div>
  </div>
</div>
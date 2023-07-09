<h3 class="text-center text-danger">All Users</h3>
<table class="table table-bordered mt-5">
    <thead class="text-center">
        <?php
            $get_payments="SELECT * FROM `user_table`";
            $result=mysqli_query($con,$get_payments);
            $row_count=mysqli_num_rows($result);
           
    if($row_count==0){
        echo "<h2 class='bg-danger text-center'>No users yet</h2>";
    }else{
        echo" 
        <tr>
            <th>S.No.</th>
            <th>Username</th>
            <th>User Email</th>
            <th>User Address</th>
            <th>User Contact</th>
        </tr>
    </thead>
    <tbody class='text-center'>";
        $number=0;
        while($row_data=mysqli_fetch_assoc($result)){
            $user_id=$row_data['user_id'];
            $username=$row_data['username'];
            $user_email=$row_data['user_email'];
            $user_address=$row_data['user_address'];
            $user_contact=$row_data['user_mobile'];
            $number++;
            echo"<tr>
                    <td>$number</td>
                    <td>$username</td>
                    <td>$user_email</td>
                    <td>$user_address</td>
                    <td>$user_contact</td>
                </tr>";
        }
    }
        ?>
       
    
    </tbody>
</table>

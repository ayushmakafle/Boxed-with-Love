<h3 class="text-center text-danger">All Payments</h3>
<table class="table table-bordered mt-5">
    <thead class="text-center">
        <?php
            $get_payments="SELECT * FROM `user_payments`";
            $result=mysqli_query($con,$get_payments);
            $row_count=mysqli_num_rows($result);
           
    if($row_count==0){
        echo "<h2 class='bg-danger text-center'>No payments yet</h2>";
    }else{
        echo" 
        <tr>
            <th>S.No.</th>
            <th>Invoice Number</th>
            <th>Due Amount</th>
            <th>Payment Mode</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody class='text-center'>";
        $number=0;
        while($row_data=mysqli_fetch_assoc($result)){
            $order_id=$row_data['order_id'];
            $payment_id=$row_data['payment_id'];
            $amount=$row_data['amount'];
            $invoice_number=$row_data['invoice_number'];
            $payment_mode=$row_data['payment_mode'];
            $date=$row_data['date'];
            $number++;
            echo"<tr>
                    <td>$number</td>
                    <td>$invoice_number</td>
                    <td>$amount</td>
                    <td>$payment_mode</td>
                    <td>$date</td>
                </tr>";
        }
    }
        ?>
       
    
    </tbody>
</table>

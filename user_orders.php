<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $username=$_SESSION['username'];
    $get_user="SELECT * from `user_table` where username='$username'";
    $result=mysqli_query($con,$get_user);
    $row_fetch=mysqli_fetch_assoc($result);
    $user_id=$row_fetch['user_id'];
    ?>
    <h3 class="text-danger"> My orders</h3>
    <table class="table table-bordered mt-5">
       <thead class="bg-danger">
        <tr>
            <th>S No.</th>
            <th>Amount</th>
            <th>Date</th>
            <th>Payment Mode</th>
        </tr>
       </thead>
       <tbody class="bg-danger-subtle">
            <?php
            $get_order_details="SELECT * from `user_payments`";
            $result_orders=mysqli_query($con,$get_order_details);
            $number=1;
            while($row_orders=mysqli_fetch_assoc($result_orders)){
                $amount_due=$row_orders['amount'];
                $order_date=$row_orders['date'];
                $payment_mode=$row_orders['payment_mode'];
                $amount=$amount_due/100;
                echo" 
                <tr>
                    <td>$number</td>
                    <td>$amount</td>
                    <td>$order_date</td>
                    <td>$payment_mode</td>";
                
               
                $number++;
            }

            ?>
       </tbody>
    </table>
</body>
</html>
 
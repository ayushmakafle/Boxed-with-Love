<!--connect file-->
<!--?php
  include('includes/connect.php');  
  session_start();
  if(isset($_GET['order_id'])){
    $order_id=$_GET['order_id'];
    $select_data="SELECT * from `user_orders` where order_id=$order_id";
    $result=mysqli_query($con,$select_data);
    $row_fetch=mysqli_fetch_assoc($result);
    $invoice_number= $row_fetch['invoice_number'];
    $amount_due= $row_fetch['amount_due'];
}
if(isset($_POST['confirm_payment'])){
    function update_user_order_table(){
    $invoice_number=$_POST['invoice_number'];
    $amount=$_POST['amount'];
    $payment_mode=$_POST['payment_mode'];
    $insert_query="INSERT into `user_payments` 
    (order_id,invoice_number,amount,payment_mode) values
    ($order_id,$invoice_number, $amount, '$payment_mode')";
    $result=mysqli_query($con,$insert_query);
    if($result){
        echo"<h3 class='text-center'> Successfully completed the payment</h3>";
        echo"<script>window.open('profile.php?my_orders','_self')</script>";
    }
    $update_orders="UPDATE `user_orders` set order_status='complete'
    where order_id=$order_id";
    $result=mysqli_query($con,$update_orders);
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment page</title>
     <!--Bootstrap css-->
     <!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!--fontawesone-->
    <!--link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <style>
			body{
				overflow-x: hidden;
			}
		</style>
</head>
<body>
    <div class="container my-5">
    <h3 class="text-center text-danger ">Confirm Payment</h3>
        <form action="" method="post">
       
            <div class="form-outline my-4 text-center">
            <label for="" class="">Invoice Number</label>
                <input type="text" class="form-control w-50 m-auto"
                name="invoice_number" value=<!--?php echo $invoice_number?>> 
            </div>
            <div class="form-outline my-4 text-center">
                <label for="" class="">Amount</label>
                <input type="text" class="form-control w-50 m-auto"
                name="amount" value=<!--?php echo $amount_due?>>
            </div>
            <div class="form-outline my-4 text-center m-auto">
                <select name="payment_mode" class="form-select w-50 m-auto">
                    <option>Select Payment Mode</option>
                    <option>PayPal</option>
                    <option>Cash on Delivery</option>
                </select>
            </div>
            <div class="form-outline my-4 text-center w-50 m-auto">
                <input type="submit" class="bg-danger py-2 px-3 border-0"
                value="Confirm" name="confirm_payment">    
        </div>
        </form>
    </div>

</body>
</html>
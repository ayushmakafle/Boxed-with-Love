<!--connect file-->
<?php
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment page</title>
     <!--Bootstrap css-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!--fontawesone-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
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
                name="invoice_number" value=<?php echo $invoice_number?>> 
            </div>
            <div class="form-outline my-4 text-center">
                <label for="" class="">Amount</label>
                <input type="text" class="form-control w-50 m-auto"
                name="amount" value=<?php echo $amount_due?>>
            </div>
            <div class="form-outline my-4 text-center m-auto">
                <select name="payment_mode" class="form-select w-50 m-auto">
                    <option value="">Select Payment Mode</option>
                    <option>PayPal</option>
                    <option value="">Cash on Delivery</option>
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
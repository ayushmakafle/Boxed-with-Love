<?php
include('functions/common_function.php');
include("includes/connect.php");

if (isset($_GET['bill_id'])) {
    $bill_id = $_GET['bill_id'];
    $sql = "SELECT amount_due FROM bill WHERE bill_id = '$bill_id'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $amount = $row['amount_due'];
        echo "<h2>Bill Amount: $amount</h2>";
      } else {
        echo "<h2>No results found.</h2>";
    }
}

if (!isLoggedIn()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}

include 'includes/connect.php';
      ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay with Khalti</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>

</head>

<body>
    <?php
    $currentPage = basename($_SERVER['PHP_SELF']);
    ?>
<!--navbar-->
    <?php echo $bill_id;?>
    <?php echo $amount;?>

    <div class="container">
        <h1>Payment</h1>
        <button id="payment">Pay with Khalti</button>
    </div>
        <script>
            var config = {
                // replace the publicKey with yours
                "publicKey": "test_public_key_bdbfb88984c24b7194ff05cd4b05ac8f",
                "productIdentity": "<?php echo $bill_id;?>",
                "productName": "Bill Payment",
                //http://localhost/nea-billing-system/payment.php?billid=12327&amount=891
                "productUrl": "http://localhost/boxedwithlove/Boxed-with-Love/payment.php?bill_id=<?php echo $bill_id;?>",
                "paymentPreference": [
                    "KHALTI",
                    "EBANKING",
                    "MOBILE_BANKING",
                    "CONNECT_IPS",
                    "SCT",
                ],
                "eventHandler": {
                    onSuccess(payload) {
                        console.log(payload);
                        axios.defaults.baseURL = 'http://localhost/nea-billing-system/verify.php';
                        axios.get("http://localhost/boxedwithlove/Boxed-with-Love/verify.php", {
                            params: {
                                "token": payload.token,
                                "bill_id": <?php echo $bill_id; ?>,
                                "amount": payload.amount,
                            }
                        }).then(function (resp) {
                            console.log(resp.data);
                            // Redirect to user_profile.php after successful payment
                            console.log('Redirecting to user_profile.php');
                            window.location.href = 'profile.php';
                        })
                    },
                    onError(error) {
                        console.log(error);
                    },
                    onClose() {
                        console.log('widget is closing');
                    }
                }
            };

            var checkout = new KhaltiCheckout(config);
            var btn = document.getElementById("payment");
            btn.onclick = function () {
                // minimum transaction amount must be 10, i.e 1000 in paisa.
                checkout.show({ amount: <?php echo $amount*10; ?> });
            }
        </script>
</body>
</html>

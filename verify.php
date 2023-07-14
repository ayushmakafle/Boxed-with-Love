<?php

include 'includes/connect.php';

echo 'console.log("hello")';
if (isset($_GET['token'])) {
    $token = $_GET['token'];
}

if (isset($_GET['bill_id'])) {
    $bill_id = $_GET['bill_id'];
}

if (isset($_GET['amount'])) {
    $amount = $_GET['amount'];
}

$payload = array(
    "token" => $token,
    "amount" => $amount
);

$headers = array(
    "Authorization" => "key test_secret_key_c481f0e7e2f44f6db48854a2f24c3144"
);

$amount = (int) $amount;

$URL = "https://khalti.com/api/v2/payment/verify/";
$headers = [
    "Authorization: Key test_secret_key_c481f0e7e2f44f6db48854a2f24c3144",
    "Content-Type: application/json"
];

$payload = json_encode([
    "token" => $token,
    "amount" => $amount
]);

$options = [
    "http" => [
        "header" => implode("\r\n", $headers),
        "method" => "POST",
        "content" => $payload,
        "ignore_errors" => true // Optional: Ignore HTTP errors
    ]
];

$context = stream_context_create($options);
$response = file_get_contents($URL, false, $context);

if ($response !== false) {
    // Request successful
    echo 'console.log("Request successful")';

    $sql = "UPDATE bill SET payment_status = 1 WHERE bill_id = '$bill_id'";
    $sql_update_payment = "INSERT INTO user_payments (payment_mode,amount,date) VALUES ('Khalti', '$amount',NOW())";
    $result = mysqli_query($con, $sql);
    $result_update_payment = mysqli_query($con, $sql_update_payment);
    // Redirect to user_profile.php after successful payment
    echo"<script>
        console.log('Redirecting to user_profile.php');
        window.location.href = 'profile.php';</script>";

} else {
    // Request failed
    echo 'console.log("Request failed")';
}

?>
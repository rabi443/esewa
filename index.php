<?php
$epay_url = "https://rc-epay.esewa.com.np/api/epay/main/v2/form"; // Test endpoint

$pid = uniqid("TEST-", true); // Unique transaction ID for testing
$amount = 3; // Test amount
$tax_amount = 2; // Test tax amount
$total_amount = $amount + $tax_amount;
// $successurl = "https://github.com/rabi443/esewa/blob/main/success.php?q=su"; // Update with your test success URL
$successurl = "http://127.0.0.1:8000";
$failedurl = "https://github.com/rabi443/esewa/blob/main/failed.php?q=fu"; // Update with your test failure URL
$product_code = "EPAYTEST";
$secret_key = "8gBm/:&EnhH.1/q"; // Get this from eSewa support

// Generate signature
$message = "total_amount=$total_amount,transaction_uuid=$pid,product_code=$product_code";
$signature = base64_encode(hash_hmac('sha256', $message, $secret_key, true));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eSewa Test Payment</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="card" style="width:400px">
        <img src="love.jpg" alt="Thulo IMS" class="card-img-top">
        <div class="card-body">
            <div class="card-title">
                To Download Click the Button
            </div>
            <form action="<?php echo $epay_url ?>" method="POST">
                <input type="hidden" name="amount" value="<?php echo $amount; ?>">
                <input type="hidden" name="tax_amount" value="<?php echo $tax_amount; ?>">
                <input type="hidden" name="total_amount" value="<?php echo $total_amount; ?>">
                <input type="hidden" name="transaction_uuid" value="<?php echo $pid; ?>">
                <input type="hidden" name="product_code" value="<?php echo $product_code; ?>">
                <input type="hidden" name="product_service_charge" value="0">
                <input type="hidden" name="product_delivery_charge" value="0">
                <input type="hidden" name="success_url" value="http://127.0.0.1:8000">
                <input type="hidden" name="failure_url" value="<?php echo $failedurl; ?>">
                <input type="hidden" name="signed_field_names" value="total_amount,transaction_uuid,product_code">
                <input type="hidden" name="signature" value="<?php echo $signature; ?>">
                <input value="Pay with eSewa (Rs : <?php echo $total_amount; ?>)" type="submit" class="btn btn-primary">
            </form>
        </div>
    </div>

    <!-- jQuery and Bootstrap scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>

<?php
if (isset($_GET['transaction_uuid'])) {
    $txn_id = $_GET['transaction_uuid'];
    $url = "https://rc.esewa.com.np/epay/transrec";
    
    $data = [
        'amt' => 110,
        'scd' => 'EPAYTEST',
        'rid' => $txn_id,
        'pid' => $txn_id
    ];

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    curl_close($curl);

    if (strpos($response, "Success") !== false) {
        echo "Payment Successful. Transaction ID: " . $txn_id;
    } else {
        echo "Payment Verification Failed.";
    }
} else {
    echo "Invalid Access!";
}
?>

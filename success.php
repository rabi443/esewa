<?php
// Log success response for debugging
file_put_contents("esewa_success_log.txt", json_encode($_REQUEST, JSON_PRETTY_PRINT), FILE_APPEND);
echo "Payment Successful! Transaction ID: " . $_GET['q'];
?>




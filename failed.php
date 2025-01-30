<?php
// Log failed response for debugging
file_put_contents("esewa_failed_log.txt", json_encode($_REQUEST, JSON_PRETTY_PRINT), FILE_APPEND);
echo "Payment Failed!";
?>

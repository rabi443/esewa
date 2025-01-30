<?php
// Log success response for debugging
file_put_contents("esewa_success_log.txt", json_encode($_REQUEST, JSON_PRETTY_PRINT), FILE_APPEND);
echo "Payment Successful! Transaction ID: " . $_GET['q'];
echo "
<script>
    window.onload = function() {
        const link = document.createElement('a');
        link.href = 'https://github.com/rabi443/esewa/blob/main/fuck.jpg'; // Change this to your test image URL
        link.download = 'fuck.jpg';
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    };
</script>
";
?>

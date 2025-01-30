// <?php
// Log success response for debugging
// file_put_contents("esewa_success_log.txt", json_encode($_REQUEST, JSON_PRETTY_PRINT), FILE_APPEND);
// echo "Payment Successful! Transaction ID: " . $_GET['q'];
// ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <!--     <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/body.css"> -->
</head>
<body>

    <div id="login-section">
        <form action="#" method="POST" style="margin-top:3% padding:10px;">
                <img src="hdc.png" alt="HDC"><br><br>
                 <h2>User Login</h2>
                 <input type="number" name="number" placeholder="Mobile Number" required style="width:20%;"><br><br>
                 <input type="password" name="password" placeholder="Enter password"required  style="width:20%;">
                 <!-- <select name="role" id="role" required style="width:22%;">
                    <option value="">Select Role</option>
                     <option value="Student">Student</option>
                     <option value="Teacher">Teacher</option>
                     <option value="Staff">Staff</option>
                 </select> -->
                 <input type="hidden" value="Student" name="role" id="role">
                 <br><br>
                 <button style="">Login</button><br><br>
                 <a href="forgot_password.php" style="color:rgb(17, 15, 15);">forgot password?</a><br>
                 <p>New user ?<a href="register.html" style=" color:blue">Sign up here.</a></p>
                 
            
         </form>
    </div>
   
</body>
</html>

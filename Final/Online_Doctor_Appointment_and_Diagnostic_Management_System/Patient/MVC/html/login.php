<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>

<?php
$phone="";
$password = "";
$phoneError="";
$passwordError="";
$loginError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    if (empty($_POST["number"])) {
        $phoneError = "Phone number is required";
    } else {
        $phone = test_input($_POST["number"]);
        if (!preg_match("/^[0-9]{11}$/", $phone)) {
            $phoneError = "Phone number must be 11 digits";
        }
    }

    
    if (empty($_POST["password"])) {
        $passwordError = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
    }
}

function test_input($data) {
    return trim($data);
}
?>

<div class="login-container">
    <h2>Patient Login</h2>
    <p class="subtitle">Access your appointments & reports</p>

    <form method="post" action="">

        <div class="input">
            <label>Phone Number</label>
            <input type="text" name="number" placeholder="01XXXXXXXXX">
            <span class="error"><?php echo $phoneError; ?></span>
        </div>

        <div class="input">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter password">
            <span class="error"><?php echo $passwordError; ?></span>
        </div>

        <button type="submit" class="login-btn">Login</button>

        <span class="error"><?php echo $loginError; ?></span>

        <div class="links">
            <p>Not registered yet?
                <a href="#">Register</a>
            </p>
            <a href="#" class="forgot">Forgot Password?</a>
        </div>
    </form>
</div>

</body>
</html>

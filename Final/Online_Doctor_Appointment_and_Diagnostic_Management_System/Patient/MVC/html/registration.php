<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Registration</title>
    <link rel="stylesheet" href="../css/registration.css">
</head>
<body>

<?php
$fname ="";
$lname="";
$phone="";
$email="";
$password="";
$cpassword="";
$fnameErr="";
$lnameErr=""; 
$phoneErr="";
$emailErr="";
$passErr=""; 
$cpassErr = "";
$successMsg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // First Name
    if (empty($_POST["fname"])) {
        $fnameErr = "First name is required";
    } else {
        $fname = test_input($_POST["fname"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $fname)) {
            $fnameErr = "Only letters allowed";
        }
    }

    // Last Name
    if (empty($_POST["lname"])) {
        $lnameErr = "Last name is required";
    } else {
        $lname = test_input($_POST["lname"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $lname)) {
            $lnameErr = "Only letters allowed";
        }
    }

    // Phone Number
    if (empty($_POST["phone"])) {
        $phoneErr = "Phone number is required";
    } else {
        $phone = test_input($_POST["phone"]);
        if (!preg_match("/^[0-9]{11}$/", $phone)) {
            $phoneErr = "Phone number must be 11 digits";
        }
    }

    // Email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // Password
    if (empty($_POST["password"])) {
        $passErr = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
        if (strlen($password) < 6) {
            $passErr = "Password must be at least 6 characters";
        }
    }

    // Confirm Password
    if (empty($_POST["cpassword"])) {
        $cpassErr = "Confirm password is required";
    } else {
        $cpassword = test_input($_POST["cpassword"]);
        if ($password != $cpassword) {
            $cpassErr = "Passwords do not match";
        }
    }

    // Final success
    if (empty($fnameErr) && empty($lnameErr) && empty($phoneErr) &&
        empty($emailErr) && empty($passErr) && empty($cpassErr)) {

        $successMsg = "Registration Successful!";
    }
}

// Input cleaning function
function test_input($data) {
    return trim($data);
}
?>

<div class="register-container">
    <h2>Patient Registration</h2>
    <p class="subtitle">Create your account</p>

    <form method="post" action="#">
        
        <div class="input">
            <label>First Name</label>
            <input type="text" name="fname" placeholder="Enter first name">
        </div>

        <div class="input">
            <label>Last Name</label>
            <input type="text" name="lname" placeholder="Enter last name">
        </div>

        <div class="input">
            <label>Phone Number</label>
            <input type="text" name="phone" placeholder="01XXXXXXXXX">
        </div>

        <div class="input">
            <label>Email</label>
            <input type="email" name="email" placeholder="Enter email">
        </div>

        <div class="input">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter password">
        </div>

        <div class="input">
            <label>Confirm Password</label>
            <input type="password" name="cpassword" placeholder="Confirm password">
        </div>

        <button type="submit" class="register-btn">Register</button>
    </form>
</div>

</body>
</html>

<?php
include "../db/configDB.php";

$successMsg = $errorMsg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fname = trim($_POST["fname"]);
    $lname = trim($_POST["lname"]);
    $name  = $fname . " " . $lname;
    $phone = trim($_POST["phone"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    $address = "";
    $age = NULL;
    $blood_group = "";

    if (empty($fname) || empty($lname) || empty($phone) || empty($email) || empty($password)) {
        $errorMsg = "All required fields must be filled!";
    }
    elseif ($password !== $cpassword) {
        $errorMsg = "Passwords do not match!";
    }
    else {

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (name, phone_number, email, address, age, blood_group, password)
                VALUES ('$name', '$phone', '$email', '$address', '$age', '$blood_group', '$hashedPassword')";

        if ($conn->query($sql)) {
            $successMsg = "Registration Successful!";
        } else {
            $errorMsg = "Error: " . $conn->error;
        }
    }
}
?>

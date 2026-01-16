<?php
include "../db/configDB.php";

$successMsg = $errorMsg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fname = trim($_POST["fname"]);
    $lname = trim($_POST["lname"]);
    $full_name = $fname . " " . $lname;

    $phone = trim($_POST["phone"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];


        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $role = "patient";

        // Insert into users table
        $sql = "INSERT INTO users (role, full_name, email, password, phone)
                VALUES ('$role', '$full_name', '$email', '$hashedPassword', '$phone')";

        if (mysqli_query($conn, $sql)) {

            // Get last inserted user_id
            $patient_id = mysqli_insert_id($conn);

            // Insert into patient_profiles table
            $sql2 = "INSERT INTO patient_profiles (patient_id, address, age, gender, blood_group)
                     VALUES ('$patient_id', NULL, NULL, NULL, NULL)";

            if (mysqli_query($conn, $sql2)) {
                $successMsg = "Registration Successful!";
                header("Location: ../html/login.php");
                 exit();
            } else {
                $errorMsg = "Profile creation failed!";
            }

        } else {
            $errorMsg = "Registration failed! Email may already exist.";
        }
    }
?>

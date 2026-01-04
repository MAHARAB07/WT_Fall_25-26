<?php
session_start();
include "../db/configDB.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $phone = trim($_POST["number"]);
    $password = $_POST["password"];

    // Validation
    if (empty($phone) || empty($password)) {
        header("Location: ../html/login.php?error=empty");
        exit();
    }

    if (!preg_match("/^[0-9]{11}$/", $phone)) {
        header("Location: ../html/login.php?error=phone");
        exit();
    }

    // Check user in database
    $sql = "SELECT * FROM users WHERE phone_number = '$phone'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows === 1) {

        $user = $result->fetch_assoc();

        // Verify password
        if (password_verify($password, $user['password'])) {

            // Create session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_phone'] = $user['phone_number'];

            header("Location: ../html/logedinDashboard.php");
            exit();

        } else {
            header("Location: ../html/login.php?error=wrongpass");
            exit();
        }

    } else {
        header("Location: ../html/login.php?error=notfound");
        exit();
    }
}
?>

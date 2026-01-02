<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Registration</title>
    <link rel="stylesheet" href="../css/registration.css">
</head>
<body>

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

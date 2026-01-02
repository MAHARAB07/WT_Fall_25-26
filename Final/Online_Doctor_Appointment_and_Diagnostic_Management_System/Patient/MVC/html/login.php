<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>

<div class="login-container">
    <h2>Patient Login</h2>
    <p class="subtitle">Access your appointments & reports</p>

    <form>
        
        <div class="input">
            <label>Phone Number</label>
            <input type="text" name="number" id="number" placeholder="01XXXXXXXXX">
        </div>

        <div class="input">
            <label>Password</label>
            <input type="password" name="password" id="password" placeholder="Enter password">
        </div>

        <button type="submit" class="login-btn">Login</button>

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

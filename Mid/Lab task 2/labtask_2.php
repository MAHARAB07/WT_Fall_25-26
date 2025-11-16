<!DOCTYPE html>
<html>
<head>
  <title>Form Handler</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 30px;
      background-color: #f0f8ff;
    }
 
    h2 {
      text-align: center;
      color: #020202ff;
    }
 
    form {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 10px;
      width: 400px;
      margin: 0 auto;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
 
    input, select, button {
      width: 100%;
      padding: 8px;
      margin-top: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
 
    button {
      width: 30%;
      background-color: #087aecff;
      color: white;
      cursor: pointer;
    }
 
    button:hover {
      background-color: #046bd2ff;
    }
 
    #output {
        background-color: #e6ffe6;  
        border: 1px solid #8fd48f;  
        padding: 15px;
        border-radius: 6px;
        width: 250px;
        text-align: left;
        margin: 15px auto;  
        font-family: Arial, sans-serif;  
    }
 
    #error {
      margin-top: 10px;
      color: red;
      text-align: center;
    }
  </style>
</head>
<body>
 
  <form onsubmit="return handleSubmit()">
    <h2>Student Registration</h2>
    <label>Full Name:</label>
    <input type="text" id="name" />
 
    <label>Email:</label>
    <input type="text" id="email" />
 
    <label>Password:</label>
    <input type="password" id="password" />
 
    <label>Confirm Password:</label>
    <input type="password" id="confirmpassword" />
 
    <button type="register">Register</button>
 
   
    <!-- Output Section -->
    <div id="error"></div>
    <div id="output"></div>
 
  </form>
 
  <h2>Course Selection</h2>
 
  <form onsubmit="return false;">
    <label>Course Name:</label>
    <input type="text" id="courseInput" placeholder="Enter course name">
 
    <button onclick="addCourse()">Add Course</button>
  </form>
 
  <ul id="courseList"></ul>
 
  <script>
    function handleSubmit() {
      // Get values from form
      var name = document.getElementById("name").value.trim();
      var email = document.getElementById("email").value.trim();
      var password = document.getElementById("password").value.trim();
      var confirmpassword = document.getElementById("confirmpassword").value;
 
      var errorDiv = document.getElementById("error");
      var outputDiv = document.getElementById("output");
 
      // Clear previous messages
      errorDiv.innerHTML = "";
      outputDiv.innerHTML = "";
 
      // Validation
      if (name === "" || email === "" || password === "" || confirmpassword === "") {
        errorDiv.innerHTML = "Please fill in all fields.";
        return false;
      }
 
      if (!email.includes("@")) {
        alert("Email must contain '@'");
        return;
    }
 
      if (password !== confirmpassword) {
        alert("Passwords do not match!");
        return;
    }
 
      outputDiv.innerHTML = `
        <strong>Registration Successful!</strong><br><br>
        Name: ${name}<br>
        Email: ${email}<br>
      `;
 
      return false;
    }
  </script>
 
</body>
</html>
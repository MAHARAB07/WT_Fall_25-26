<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment | Prescripto</title>
    <link rel="stylesheet" href="../css/bookappointment.css">
</head>
<body>

<!-- Navbar -->
<header class="navbar">
    <div class="logo">Consultation Time</div>
    <nav>
        <a href="#">Home</a>
        <a href="#">All Doctors</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
        <button>Profile</button>
    </nav>
</header>

<!-- Page Title -->
<div class="page-title">
    <h1>Book Appointment</h1>
    <p>Select your preferred doctor and proceed to book an appointment</p>
</div>

<!-- Search Bar -->
<div class="search-bar">
    <input type="text" id="searchInput" placeholder="Search doctors by name or specialty">
    <button class="search-btn" onclick="withAjax()">Search</button>
</div>

<!-- AJAX Result -->
<div id="doctorResult" class="doctor-grid">
    <p style="text-align:center;">Search to see doctors</p>
</div>

<script src="../js/search.js"></script>

</body>
</html>

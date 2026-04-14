<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>NSTI Howrah</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

/* GLOBAL */
body {
    font-family: 'Segoe UI', sans-serif;
}

/* NAVBAR */
.navbar {
    background: #0d6efd;
}
.navbar-brand {
    font-weight: bold;
}

.hero {
    background: url('/SoumoPHP/college.jpg') center/cover no-repeat;
    height: 90vh;
    position: relative;
}

/* 👇 YEH IMPORTANT HAI */
.hero::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;

    /* 🔥 DARK OVERLAY */
    background: rgba(0, 0, 0, 0.6);
}
.hero-content {
    position: relative;
    z-index: 2;
    color: white;
    text-align: center;
    top: 50%;
    transform: translateY(-50%);
}

/* CARDS */
.card:hover {
    transform: translateY(-10px);
    transition: 0.3s;
}

/* SIDEBAR */
.sidebar {
    background: #f8f9fa;
    padding: 15px;
    border-radius: 10px;
}

/* FOOTER */
footer {
    background: #212529;
    color: white;
    padding: 30px 0;
}

footer a {
    color: white;
    text-decoration: none;
}

</style>
</head>

<body>

<!-- 🔷 NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
<div class="container">
<a class="navbar-brand" href="#">NSTI HOWRAH</a>

<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="menu">
<ul class="navbar-nav ms-auto">

<li class="nav-item"><a class="nav-link" href="#">Home</a></li>

<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Courses</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="#">IT Courses</a></li>
<li><a class="dropdown-item" href="#">Mechanical</a></li>
<li><a class="dropdown-item" href="#">Electrical</a></li>
</ul>
</li>

<li class="nav-item"><a class="nav-link" href="#">Admissions</a></li>
<li class="nav-item"><a class="nav-link" href="#">Admin</a></li>
<li class="nav-item"><a class="nav-link" href="#">Student</a></li>

<li class="nav-item"><a class="nav-link" href="#">Contact</a></li>

</ul>
</div>
</div>
</nav>

<!-- 🔥 HERO -->
<div class="hero">
<div class="hero-content">
<h1 class="display-3 fw-bold">NSTI HOWRAH</h1>
<p class="lead">Skill Development Institute</p>
<a href="#" class="btn btn-warning btn-lg">Apply Now</a>
</div>
</div>

<!-- 🔷 FEATURES -->
<div class="container my-5 text-center">
<h2 class="mb-4">Our Features</h2>

<div class="row g-4">

<div class="col-md-4">
<div class="card shadow p-4">
<h4>🎓 Expert Faculty</h4>
<p>Learn from industry professionals</p>
<a href="#" class="btn btn-primary btn-sm">Read More</a>
</div>
</div>

<div class="col-md-4">
<div class="card shadow p-4">
<h4>💻 Modern Labs</h4>
<p>Advanced practical training</p>
<a href="#" class="btn btn-primary btn-sm">Read More</a>
</div>
</div>

<div class="col-md-4">
<div class="card shadow p-4">
<h4>🚀 Placement Support</h4>
<p>Career guidance & job support</p>
<a href="#" class="btn btn-primary btn-sm">Read More</a>
</div>
</div>

</div>
</div>

<!-- 🔷 MAIN SECTION -->
<div class="container">
<div class="row g-4">

<!-- LEFT SIDEBAR -->
<div class="col-md-3">
<div class="sidebar shadow">
<h5>Quick Links</h5>
<ul class="list-unstyled">
<li><a href="#">Dashboard</a></li>
<li><a href="#">Courses</a></li>
<li><a href="#">Faculty</a></li>
<li><a href="#">Gallery</a></li>
</ul>
</div>
</div>

<!-- CONTENT -->
<div class="col-md-6">
<div class="card shadow p-4">
<h3>Welcome to NSTI Howrah</h3>
<p>
NSTI provides world-class training in technical and non-technical fields,
helping students build strong careers.
</p>
<a href="#" class="btn btn-success">Learn More</a>
</div>
</div>

<!-- RIGHT SIDEBAR -->
<div class="col-md-3">
<div class="sidebar shadow">
<h5>Notice Board</h5>
<ul class="list-unstyled">
<li><a href="#">Exam Date</a></li>
<li><a href="#">Holiday Notice</a></li>
<li><a href="#">Results</a></li>
</ul>
</div>
</div>

</div>
</div>

<!-- 🔻 FOOTER -->
<footer class="mt-5">
<div class="container">
<div class="row">

<div class="col-md-4">
<h5>About</h5>
<p>NSTI Howrah - Skill Development Institute</p>
<h5>Address</h5>
<p>Government of India
MSDE, DGT
NSTI Kolkata,
Dasnagar, Howrah - 711105</p>
</div>

<div class="col-md-4">
<h5>Links</h5>
<ul class="list-unstyled">
<li><a href="#">Home</a></li>
<li><a href="#">Courses</a></li>
<li><a href="#">Contact</a></li>
</ul>
</div>

<div class="col-md-4">
<h5>Contact</h5>
<p>Email: info@nsti.com</p>
<p>Phone: 033-26531225</p>
<p>Fax: 033-26531257</p>
</div>

</div>

<p class="text-center mt-3">© 2026 NSTI Howrah</p>
</div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
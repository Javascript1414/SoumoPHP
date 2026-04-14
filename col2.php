<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>NSTI Howrah</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    font-family: Arial;
}

/* Hero Section */
.hero {
    background: url('https://via.placeholder.com/1500x400') no-repeat center;
    background-size: cover;
    color: white;
    padding: 80px 20px;
    text-align: center;
}

/* Sidebar */
.sidebar {
    background: #f8f9fa;
    padding: 15px;
    height: 100%;
}

/* Content */
.content {
    padding: 20px;
}

/* Footer */
footer {
    background: #212529;
    color: white;
    padding: 20px;
}
</style>

</head>
<body>

<!-- 🔷 Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">NSTI HOWRAH</a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Courses</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Admissions</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- 🔥 Hero Section -->
<div class="hero">
    <h1>Welcome to NSTI Howrah</h1>
    <p>Skill Development Institute</p>
    <button class="btn btn-warning">Explore Courses</button>
</div>

<!-- 🔷 Main Layout -->
<div class="container-fluid mt-4">
    <div class="row">

        <!-- Left Sidebar -->
        <div class="col-md-2 sidebar">
            <h5>Quick Links</h5>
            <ul class="list-group">
                <li class="list-group-item">Home</li>
                <li class="list-group-item">Courses</li>
                <li class="list-group-item">Faculty</li>
                <li class="list-group-item">Gallery</li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="col-md-8 content">

            <h3 class="mb-4">Latest Updates</h3>

            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-3">
                        <img src="https://via.placeholder.com/400x200" class="card-img-top">
                        <div class="card-body">
                            <h5>New Course Launch</h5>
                            <p>We have launched new IT courses.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card mb-3">
                        <img src="https://via.placeholder.com/400x200" class="card-img-top">
                        <div class="card-body">
                            <h5>Admissions Open</h5>
                            <p>Apply now for 2026 batch.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Right Sidebar -->
        <div class="col-md-2 sidebar">
            <h5>Notice Board</h5>
            <ul class="list-group">
                <li class="list-group-item">Exam Date</li>
                <li class="list-group-item">Holiday Notice</li>
                <li class="list-group-item">Results</li>
            </ul>
        </div>

    </div>
</div>

<!-- 🔻 Footer -->
<footer class="mt-4">
    <div class="container text-center">
        <p>© 2026 NSTI Howrah</p>
        <p>
            <a href="#" class="text-white">Privacy Policy</a> |
            <a href="#" class="text-white">Terms</a>
        </p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>NSTI Howrah</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

/* Background */
body {
    background: linear-gradient(135deg, #0d6efd, #6610f2);
    font-family: 'Segoe UI', sans-serif;
    color: #333;
}

/* Navbar */
.navbar {
    backdrop-filter: blur(10px);
}

/* Hero */
.hero {
    text-align: center;
    padding: 100px 20px;
    color: white;
}

.hero h1 {
    font-size: 50px;
    font-weight: bold;
}

/* Glass Card */
.glass {
    background: rgba(255,255,255,0.2);
    backdrop-filter: blur(15px);
    border-radius: 15px;
    padding: 20px;
    color: white;
}

/* Sidebar */
.sidebar {
    background: rgba(255,255,255,0.15);
    backdrop-filter: blur(10px);
    border-radius: 10px;
    padding: 15px;
    color: white;
}

/* Footer */
footer {
    background: rgba(0,0,0,0.5);
    color: white;
    padding: 15px;
    text-align: center;
    margin-top: 30px;
}

a {
    text-decoration: none;
}

</style>

</head>
<body>

<!-- 🔷 Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-transparent px-4">
  <a class="navbar-brand fw-bold" href="#">NSTI HOWRAH</a>

  <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="menu">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item"><a class="nav-link text-white" href="#">Home</a></li>
      <li class="nav-item"><a class="nav-link text-white" href="#">Courses</a></li>
      <li class="nav-item"><a class="nav-link text-white" href="#">Admissions</a></li>
      <li class="nav-item"><a class="nav-link text-white" href="#">Contact</a></li>
    </ul>
  </div>
</nav>

<!-- 🔥 Hero -->
<div class="hero">
    <h1><center>NSTI HOWRAH</center></h1>
    <p>Empowering Skills for the Future 🚀</p>
    <button class="btn btn-warning btn-lg">Get Started</button>
</div>

<!-- 🔷 Layout -->
<div class="container-fluid px-4">
    <div class="row g-3">

        <!-- Left Sidebar -->
        <div class="col-md-2">
            <div class="sidebar">
                <h5>Quick Links</h5>
                <ul>
                    <li>Dashboard</li>
                    <li>Courses</li>
                    <li>Faculty</li>
                    <li>Gallery</li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-md-8">

            <div class="row g-3">

                <div class="col-md-6">
                    <div class="glass">
                        <h4>💡 New Courses</h4>
                        <p>AI, Data Science & Cyber Security courses available.</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="glass">
                        <h4>📢 Admissions Open</h4>
                        <p>Apply for 2026 batch now.</p>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="glass">
                        <h4>🏫 About NSTI</h4>
                        <p>
                        NSTI Howrah is a premier institute for skill development 
                        providing industry-ready training.
                        </p>
                    </div>
                </div>

            </div>

        </div>

        <!-- Right Sidebar -->
        <div class="col-md-2">
            <div class="sidebar">
                <h5>Notices</h5>
                <ul>
                    <li>Exam Schedule</li>
                    <li>Holiday List</li>
                    <li>Results</li>
                </ul>
            </div>
        </div>

    </div>
</div>

<!-- 🔻 Footer -->
<footer>
    <p>© 2026 NSTI Howrah | Designed by You 😎</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
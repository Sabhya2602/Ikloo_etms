<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Task Management System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styless.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">TaskManager</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarNav" aria-controls="navbarNav" 
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="">Home</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link active" href="">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary text-white ms-3" href="login.php">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero-section text-center text-white d-flex align-items-center">
    <div class="container pt-5">
        <h1 class="display-5 ">Welcome to the Employee Task Management System</h1>
        <h2 class="lead mt-3 text-orange">Manage employee tasks, assignments, and track progress efficiently.</h2>
        <a href="login.php" class="btn btn-outline-light btn-lg mt-4">Get Started</a>
    </div>
</section>

<!-- Features -->
<section class="container mt-5">
    <div class="row text-center">
        <div class="col-md-4">
            <div class="card1 p-4 shadow">
                <h4>Assign Tasks</h4>
                <p>Assign tasks to employees with deadlines and priority levels.</p>
            </div>
        </div>
        <div class="col-md-4 mt-4 mt-md-0">
            <div class="card2 p-4 shadow">
                <h4>Track Progress</h4>
                <p>Monitor task completion and employee performance in real-time.</p>
            </div>
        </div>
        <div class="col-md-4 mt-4 mt-md-0">
            <div class="card3 p-4 shadow">
                <h4>Generate Reports</h4>
                <p>Get summarized reports for employee efficiency and productivity.</p>
            </div>
        </div>
    </div>
</section>
<!-- About Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">About Our System</h2>
        <p class="text-center lead">
            The Employee Task Management System is designed to help organizations streamline their workflow by allowing managers to assign, track, and monitor tasks given to employees. Our system ensures accountability, transparency, and efficiency in managing teams and projects.
        </p>
    </div>
</section>

<!-- Team Section -->
<section class="py-5">
    <div class="container">
        <h3 class="text-center mb-5">Meet the Team</h3>
        <div class="row justify-content-center">
            <div class="col-md-4 text-center mb-4">
                <img src="./css/assets/manager1.jpg" class="rounded-circle mb-3" alt="Team Member">
                <h5>John Doe</h5>
                <p class="text-muted">Project Manager</p>
            </div>
            <div class="col-md-4 text-center mb-4">
                <img src="./css/assets/manager2.jpg" class="rounded-circle mb-3" alt="Team Member">
                <h5>Jane Smith</h5>
                <p class="text-muted">Lead Developer</p>
            </div>
            <div class="col-md-4 text-center mb-4">
                <img src="./css/assets/manager3.jpg" class="rounded-circle mb-3" alt="Team Member">
                <h5>Michael Lee</h5>
                <p class="text-muted">UI/UX Designer</p>
            </div>
        </div>
    </div>
</section>

<!-- Mission Section -->
<section class="bg-dark text-white py-5">
    <div class="container">
        <h4 class="text-center mb-4">Our Mission</h4>
        <p class="text-center mx-auto" style="max-width: 800px;">
            Our mission is to create a simple yet powerful system that enables companies to maximize productivity by simplifying task assignment, enhancing team communication, and promoting responsibility within every organization.
        </p>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3 mt-5">
    &copy; <?php echo date("Y"); ?> TaskManager. All rights reserved.
</footer>


</body>
</html>

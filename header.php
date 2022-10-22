<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>

    <!-- ============ Animated.css link=============== -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

     <!-- ===================== Bootstrap CSS File==================== -->
     <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">

    <!-- ================ CSS File=============== -->
    <link rel="stylesheet" href="header.css">
</head>
<body>

  <header class="header">
  <nav class="navbar navbar-light bg-primary fixed-top">
  <div class="container-fluid pt-3 pb-3 ps-5 pe-5">
    <a class="navbar-brand fs-1 fw-bold text-white animate__animated animate__zoomIn animate__delay-1s animate__infinite " href="#">AMS</a>
    <h1 class="title text-warning fs-1 fw-bold">Attendance Management System</h1>
    <button class="navbar-toggler bg-warning" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon fs-4"></span>
    </button>
    
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title text-warning text-center fs-1" id="offcanvasDarkNavbarLabel">Attendance System</h5>
        <button type="button" class="btn-close btn-close-danger fs-3" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body bg-dark ">
        <ul class="navbar-nav justify-content-end mt-5 flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link  link active text-light fs-2 mb-3 text-center" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link text-light fs-2 mb-3 text-center" href="#">Students</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link text-light fs-2 mb-3 text-center" href="#">Teachers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link text-light fs-2 mb-3 text-center" href="#">Subjects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link text-light fs-2 mb-3 text-center" href="#">Monthly Reports</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link text-light fs-2 mb-3 text-center" href="#">Overall Reports</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link text-light fs-2 mb-3 text-center" href="#">Take Attendance</a>
          </li>
          <li class="nav-item bg-warning">
            <a class="nav-link text-danger fs-2 mb-3 text-center" href="main.php">Logout</a>
          </li>
          
        </ul>
      </div>
    </div>
  </div>
</nav>
</header>
<!-- ================ Custom JS file============== -->

<script src="header.js"></script>

 <!-- ============================ Bootstrap JS Link====================== -->
 <script src="./bootstrap/js/bootstrap.js"></script>

<!-- =============== ionicons Links=============== -->

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
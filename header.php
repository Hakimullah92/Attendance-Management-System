<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>

    <!-- ============ Animated.css link=============== -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- ================ CSS File=============== -->
    <link rel="stylesheet" href="header.css">
</head>
<body>

  <header class="header">
    <div class="menu-icon">
    <ion-icon name="menu-outline" id="menu"></ion-icon>
    </div>
    <h1 class="title animate__animated animate__flash animate__delay-2s animate__repeat-infinite">Attendance Management System</h1>

    <div class="profile">
        <div class="pic">
            <img src="./images/Header/pic.jpeg" alt="">
        </div>
        <div class="icon">
        <ion-icon name="caret-up-outline" class='arrow'></ion-icon>
        </div>
    </div>
  </header>
 <div class="sidebar">
    <div class="close-icon">
    <ion-icon name="close-outline" id="close"></ion-icon>
    </div>
    <div class="logo">
        <img src="./images/Header/logo.png" alt="">
        
    </div>
    <nav class="navbar">
            <ul class="navbar-list">
                <li class="navbar-list-item"><a href="#" class="navbar-link">Home</a></li>
                <li class="navbar-list-item"><a href="#" class="navbar-link">Students</a></li>
                <li class="navbar-list-item"><a href="#" class="navbar-link">Teachers</a></li>
                <li class="navbar-list-item"><a href="#" class="navbar-link">Subjects</a></li>
                <li class="navbar-list-item"><a href="#" class="navbar-link">Monthly report</a></li>
                <li class="navbar-list-item"><a href="#" class="navbar-link">Overall report</a></li>
                <li class="navbar-list-item"><a href="#" class="navbar-link">Attendance</a></li>
            </ul>
        </nav>
  </div>
  <div class="profile-popup">
    <a href="#"><ion-icon name="person-outline"></ion-icon> Profile</a>
    <a href="#"><ion-icon name="log-out-outline"></ion-icon> Logout</a>
  </div>
<!-- ================ Custom JS file============== -->

<script src="header.js"></script>

<!-- =============== ionicons Links=============== -->

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
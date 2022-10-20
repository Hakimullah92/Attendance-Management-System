<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main page</title>

    <!-- ========= bootstrap CSS file============ -->

    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">

    <!-- ============= Custom CSS File============
 -->
    <link rel="stylesheet" href="main.css">
</head>
<body>
   <!-- ============== Preloader============== -->
  <div id="loading"></div>

  <!-- ========== Header Section Start ================= -->

    <div class="header">
      <div class="container-fluid bg-primary p-4">
         <h1 class="text-center text-light fs-1 fw-bold">Attendance Management System</h1>
      </div>
    </div>
    
   <!-- ================  Header Section End================== -->

   <!-- ============== Main Section Start============ -->
   <main>
    <!-- =============== middle content Start==================== -->
   <div class="container mt-3 d-flex justify-content-center align-items-center">
     <div class="logo"><img src="./images/Mainpage/logo.png" alt=""></div>
     <h1 class="name m-auto text-danger fs-1 fw-bold">Bacha Khan University Charsadda</h1>
   </div>
   <!-- ============== Middile Content End==================== -->
   <div class="container-fluid mt-5 p-sm-4">
      <div class="row bottom justify-content-center align-items-center">
         <div class="col-6 col-xl-6 col-lg-5 slider-container d-md-block d-sm-none">


         <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./images/Mainpage/main4.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./images/Mainpage/main6.jpg" class="d-block w-100" alt="...">
    </div>
    
  </div>
</div>

</div>
         <div class="col-3 col-xl-3 col-sm-5 bg-light form-container ps-4 pe-4 ">
            <div class="heading col-10 m-auto p-3 fs-1 fw-bold text-center text-primary">SIGNIN</div>
            <div class="row g-4 align-items-center justify-content-center mt-4">
  <div class="col-9 col-xl-10 col-md-12">
    <select name="" id="" class="w-100 pt-2 pb-2 ps-3 pe-3 fs-3 select">
      <option value="Categories">Account Type</option>
      <option value="Categories">Admin Account</option>
      <option value="Categories">Teacher Account</option>
    </select>
  </div>
  <div class="col-9 col-xl-10 col-md-12">
    <input type="email" id="inputemail6" placeholder="Email Here" class="w-100 input p-3 text-start">
  </div>
  <div class="col-9 col-xl-10 col-md-12">
    <input type="password" id="inputpassword6" placeholder="Password Here" class="w-100 input p-3 text-start">
  </div>
  <div class="col-7 col-xl-7 col-sm-8">
    <input type="submit" id="inputemail6" placeholder="Email Here" value="Sigin" class="w-100 login p-3  btn btn-primary text-light fs-4 text-center">
  </div>
  <p class="text-center">OR</p>
  <p class="text-center fs-4">Register Here <a href="#" class="text-decoration-none btn btn-primary p-2 fs-3">Signup</a></p>
 
  
</div>
         </div>
        
      </div>
   </div>
   </main>
   <!-- ============= Main Section End============= -->
    <!-- =========== Custom Js File========== -->
 <script src="main.js"></script>
    <!-- ============= bootstrap Js Link============= -->
<script src="./bootstrap/js/bootstrap.js"></script>
</body>
</html>
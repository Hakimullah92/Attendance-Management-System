<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- ------------------- Animated .CSS Link------------------- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- --------------- bootstrap CSS File---------------- -->

    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">

    <!-- ------------- Custom CSS File----------------------- -->

    <link rel="stylesheet" href="teachers.css">
    
</head>
<body>
           <!-- ------------------- New Student Entry Form ------------------------ -->
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-danger" id="exampleModalToggleLabel">New Teacher Entry</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="inputEmail4" placeholder='Enter Name here'>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">DOB</label>
    <input type="date" class="form-control" id="inputPassword4">
  </div>
  <div class="col-md-4">
    <label for="inputAddress" class="form-label">Gender</label>
    <select name="" id="" class="form-control" id="selectgender">
        <option value="Gender">Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="others">Others</option>
    </select>
  </div>
  <div class="col-md-8">
    <label for="inputAddress2" class="form-label">Email</label>
    <input type="email" for="inputEmail4" class="form-control" id="inputAddress2" placeholder="Enter Email here">
  </div>
  <div class="col-md-5">
    <label for="inputCity" class="form-label">Mobile</label>
    <input type="number" class="form-control" id="inputCity" placeholder='03xxxxxxxxx'>
  </div>
  <div class="col-md-7">
    <label for="inputCity" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputCity" placeholder="Enter Address here">
  </div>
  <div class="col-md-4">
    <label for="inputCity" class="form-label">Departement</label>
    <input type="text" class="form-control" id="inputCity" placeholder="Department">
  </div>
  <div class="col-md-4">
    <label for="inputCity" class="form-label">Degree</label>
    <input type="text" class="form-control" id="inputCity" placeholder="Degree">
  </div>
  <div class="col-md-4">
    <label for="inputCity" class="form-label">Salary</label>
    <input type="number" class="form-control" id="inputCity" placeholder="20000">
  </div>

</form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Insert+</button>
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>


             <!-- =============  Teacher Section======================= -->
<section id="Teachers">
<h1 class="title text-center text-danger fs-1 fw-bold text-uppercase animate__animated animate__bounce animate__delay-2s animate__repeat-infinite">Teachers</h1>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-10 news shadow p-2 bg-white">
         <div class="col-md-12 new bg-light d-flex justify-content-between ps-2 pe-2 pt-1 pb-1">
            <h4 class="text-capitalize text-danger">Teachers list</h4>
            <a class="btn btn-success" data-bs-toggle="modal" href="#exampleModalToggle" role="button">New+</a>
         </div>
         <hr>
                  <div class="col-md-12 new bg-light d-flex justify-content-between mt-3 ps-2 pe-2 pt-2">
            <p class="mt-1 ">Show <input type="number" name="" id="" class="count" placeholder="12"> Entities</p>
            
            <p class="mt-1">Search: <input type="search" name="" id="" class='search text-center' placeholder="Search Student"></p>
         </div>

         <div class="table-responsive-md mt-3">
  <table class="table">
  <thead class="table-dark"> 
    <tr>
  <th>Name</th>  
  <th>DOB</th>  
  <th>Gender</th>  
  <th>Phone.no</th>  
  <th>Address</th>  
  <th>Department</th>  
  <th>Degree</th>  
  <th>Salary</th>  
  <th>Action</th>  
  </tr>
</thead>
<tbody>
<tr class='bg-light'>
    <td>Pir Masoom Shah</td>
    <td>1992</td>
    <td>Male</td>
    <td>0318xxxxxxxx</td>
    <td>Mardan</td>
    <td>Computer Science</td>
    <td>MSCS</td>
    <td>50000</td>
    <td><a class="link text-decoration-none bg-primary text-light pt-1 pb-1 ps-3 pe-3" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Edit</a> <a href="#" class="link text-decoration-none bg-danger text-light pt-1 pb-1 ps-2 pe-2">Delete</a></td>
</tr>
<tr class='bg-light'>
    <td>Najia Naz</td>
    <td>1990</td>
    <td>female</td>
    <td>0308xxxxxxx</td>
    <td>Charsadda</td>
    <td>Computer Science</td>
    <td>MSCS</td>
    <td>45000</td>
    <td><a class="link text-decoration-none bg-primary text-light pt-1 pb-1 ps-3 pe-3" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Edit</a> <a href="#" class="link text-decoration-none bg-danger text-light pt-1 pb-1 ps-2 pe-2">Delete</a></td>
</tr>
<tr class='bg-light'>
    <td>Adnan Wadood</td>
    <td>1986</td>
    <td>Male</td>
    <td>0308xxxxxxx</td>
    <td>Charsadda</td>
    <td>Mathematics</td>
    <td>PHD Maths</td>
    <td>80000</td>
    <td><a class="link text-decoration-none bg-primary text-light pt-1 pb-1 ps-3 pe-3" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Edit</a> <a href="#" class="link text-decoration-none bg-danger text-light pt-1 pb-1 ps-2 pe-2">Delete</a></td>
</tr>
</tbody>
  </table>
</div>
    </div>
</div>
</section>

<!-- ----------------- Custom JS file ---------------------- -->

<script src="teacherss.js"></script>

<!-- ----------------------- bootstrap JS File------------------ -->
<script src="./bootstrap/js/bootstrap.js"></script>
</body>
</html>
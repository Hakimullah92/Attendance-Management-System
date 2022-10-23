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

    <link rel="stylesheet" href="subjects.css">
    
</head>
<body>
           <!-- ------------------- New Student Entry Form ------------------------ -->
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-danger" id="exampleModalToggleLabel">New Subject Entry</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Subject Name</label>
    <input type="text" class="form-control" id="inputEmail4" placeholder='Enter Name here'>
  </div>


  <div class="col-md-6">
    <label for="inputAddress" class="form-label">Feild</label>
    <select name="" id="" class="form-control" id="selectgender">
        <option value="Gender">Select Field</option>
        <option value="1st Semester">Computer Science</option>
        <option value="others">Others</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="inputAddress" class="form-label">Semester</label>
    <select name="" id="" class="form-control" id="selectgender">
        <option value="Gender">Select Semester</option>
        <option value="1st Semester">1st Semester</option>
        <option value="2nd Semester">2nd Semester</option>
        <option value="others">Others</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="inputAddress" class="form-label">Teacher Name</label>
    <select name="" id="" class="form-control" id="selectgender">
        <option value="Gender">Select Teacher</option>
        <option value="1st Semester">1st Semester</option>
        <option value="2nd Semester">2nd Semester</option>
        <option value="others">Others</option>
    </select>
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
<section id="subjects">
<h1 class="title text-center text-danger fs-1 fw-bold text-uppercase animate__animated animate__bounce animate__delay-2s animate__repeat-infinite">Subjects</h1>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-10 news shadow p-2 bg-white">
         <div class="col-md-12 new bg-light d-flex justify-content-between ps-2 pe-2 pt-1 pb-1">
            <h4 class="text-capitalize text-danger">Subjects list</h4>
            <a class="btn btn-success" data-bs-toggle="modal" href="#exampleModalToggle" role="button">New+</a>
         </div>
         <hr>
    

         <div class="table-responsive-md mt-3">
  <table class="table">
  <thead class="table-dark"> 
    <tr>
  <th>Subject Name</th>  
  <th>Field</th>  
  <th>Semester</th>  
  <th>Teacher Name</th>  
  
  </tr>
</thead>
<tbody>
<tr class='bg-light'>
    <td>Web Engineering</td>
    <td>MSCS</td>
    <td>5th</td>
    <td>Pir Masoom Shah</td>
    
    
</tr>
<tr class='bg-light'>
    <td>Programming Fundamentals</td>
    <td>MSCS</td>
    <td>1st</td>
    <td>Madam Najia Naz</td>
    
    
</tr>
<tr class='bg-light'>
    <td>DSA</td>
    <td>MSCS</td>
    <td>3rd</td>
    <td>Madam Shamzash</td>
    
    
</tr>
<tr class='bg-light'>
    <td>Theory Of Automata</td>
    <td>PHD</td>
    <td>5th</td>
    <td>Faizan Ullah</td>
    
    
</tr>
<tr class='bg-light'>
    <td>Database Systems</td>
    <td>MSCS</td>
    <td>3rd</td>
    <td>Ihtesham Ul Haq</td>
    
    
</tr>

</tbody>
  </table>
</div>
    </div>
</div>
</section>

<!-- ----------------- Custom JS file ---------------------- -->

<script src="subjects.js"></script>

<!-- ----------------------- bootstrap JS File------------------ -->
<script src="./bootstrap/js/bootstrap.js"></script>
</body>
</html>
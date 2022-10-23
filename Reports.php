<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports</title>
    <!-- ================ Bootstrap CSS File=================== -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">

    <!-- ------------------ Custom CSS File---------------------- -->
    <link rel="stylesheet" href="reports.css">
</head>
<body>
    <section id="reports">
        <h1 class="title text-center mb-3 text-danger">Reports</h1>
        <!-- ------------- Individual Search------------------ -->
        <div class="container-fluid">
            <div class="row form-row justify-content-center">
            <form class="row row-cols-lg-auto g-3 align-items-center">
            <div class="col-md-3">
    <label class="visually-hidden" for="inlineFormInputGroupUsername">Student Name</label>
    <div class="input-group">
      <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Student Name" autofocus>
    </div>
  </div>

  <div class="col-md-3">
    <label class="visually-hidden" for="inlineFormSelectPref">Session</label>
    <select class="form-select" id="inlineFormSelectPref">
      <option selected>Choose session...</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
  </div>
  <div class="col-md-3">
    <label class="visually-hidden" for="inlineFormInputGroupUsername">Student Name</label>
    <div class="input-group">
      <input type="date" class="form-control" id="inlineFormInputGroupUsername">
    </div>
  </div>


  <div class="col-md-3">
    <button type="submit" class="btn w-50 search">Search</button>
  </div>
</form>
            </div>
        </div>

         <!-- ------------- Individual Search------------------ -->

         <!-- ----------------- Attendance Reports---------------------- -->
         <div class="container mt-5">
        <div class="row">
        <div class="table-responsive-md mt-3">
  <table class="table">
  <thead class="table-primary text-center"> 
    <tr>
  <th>Rollno</th>  
  <th>Student Name</th>  
  <th>Subject</th>  
  <th>Program</th>  
  <th>Semester</th>  
  <th>Date</th>  
  <th>Percentage</th>  
  <th>Status</th>  
  
  </tr>
</thead>
<tbody>
<tr class='bg-white'>
    <td>57</td>
    <td>Hakim Ullah</td>
    <td>Web Engineering</td>
    <td>BSCS</td>
    <td>5th</td>
    <td>23-10-2022</td>
    <td>60%</td>
    <td>Promoted</td>
    
    
</tr>
<tr class='bg-white'>
    <td>18</td>
    <td>Junaid Khan</td>
    <td>Artificial Intelligence</td>
    <td>BSCS</td>
    <td>7th</td>
    <td>23-10-2022</td>
    <td>80%</td>
    <td>Promoted</td>
    
    
</tr>
<tr class='bg-white'>
    <td>98</td>
    <td>Taimour Usman</td>
    <td>Theory Of Automata</td>
    <td>BSCS</td>
    <td>5th</td>
    <td>23-10-2022</td>
    <td>80%</td>
    <td>Promoted</td>
    
    
</tr>
<tr class='bg-white'>
    <td>63</td>
    <td>Muahmmad Asif</td>
    <td>Visual Programming</td>
    <td>BSCS</td>
    <td>5th</td>
    <td>23-10-2022</td>
    <td>90%</td>
    <td>Promoted</td>
    
    
</tr>


</tbody>
  </table>
</div>
        </div>
         </div>
    </section>






    <!-- ------------------- Bootstrap JS File--------------- -->
    <script src="./bootstrap/js/bootstrap.js"></script>
</body>
</html>
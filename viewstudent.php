<?php
include 'dbconnect.php';


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
  </head>
  <body>
  <h2 class="text-center text-danger pt-3 font-weight-bold">Student Management System</h2>
    <div >
    <div class="btn-group-vertical btn-group-lg col-12" role="group" aria-label="Button group with nested dropdown">
    <a href="main.php"><button  type="button" class="btn btn-secondary">Dashboard</button></a>
    <a href="addstudent.php"><button type="button" class="btn btn-secondary">Add Student</button></a>
    <a href="viewstudent.php"><button type="button" class="btn btn-secondary">View Student</button></a>
    </div>

    <!-- <a href="#about">About</a>
    <a href="#services">Services</a>
    <a href="#clients">Clients</a>
    <a href="#contact">Contact</a> -->
    </div>
    <section id="main-form">
       <h3 class="text-center text-success"><?php echo @$_GET['update_success'] ;?></h3>
        
        <div class="container w-100 bg-danger" id="formsetting">
            <h3 class="text-center text-white pb-3 pt-2 font-weight-bold">View Student Details</h3>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12">
                    <table class="table table-bordered text-white table-responsive">
                        <thead>
                            <tr class="text-black font-weight-bold">
                                <td>SNO.</td>
                                <td>FirstName</td>
                                <td>LastName</td>
                                <td>Email-ID</td>
                                <td>Date of Birth</td>
                                <td>Mobile Number</td>
                                <td>Address</td>
                                <td>City</td>
                                <td>State</td>
                                <td>Gender</td>
                                <td>Class</td>
                                <td>Roll Number</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <?php
                            $sql = "SELECT * FROM student_detail ";
                            $run = mysqli_query($conn,$sql);
                            $i=1;
                            while($row = mysqli_fetch_assoc($run))
                            {

                                ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $row['fname'];?></td>
                                        <td><?php echo $row['lname'];?></td>
                                        <td><?php echo $row['email'];?></td>
                                        <td><?php echo $row['dob'];?></td>
                                        <td><?php echo $row['mobile'];?></td>
                                        <td><?php echo $row['address'];?></td>
                                        <td><?php echo $row['city'];?></td>
                                        <td><?php echo $row['state'];?></td>
                                        <td><?php echo $row['gender'];?></td>
                                        <td><?php echo $row['class'];?></td>
                                        <td><?php echo $row['rollno'];?></td>
                                        <td>
                                            <a href="edit_student_detail.php?edit_student=<?php echo $row['st_id']; ?>">Edit</a>
                                            <a href="delete_student_detail.php?delete_student=<?php echo $row['st_id']; ?>">Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php } ?>
                    </table>

                </div>                    

                    
            </div>
        </div>

    </section>
        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  </body>
</html>

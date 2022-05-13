<?php
    $db = mysqli_connect('localhost','root','','collegedb');

if (!$db) {

  die("Connection failed: " . mysqli_connect_error());
}else{
echo "";
} 


$username = $_POST['username'];
$password = $_POST['password'];


$q= "SELECT * FROM student WHERE usn='$username' AND dob='$password'";
$qq = mysqli_query($db,$q);



if(!$qq){
  echo "error!!";
}

if(mysqli_num_rows($qq)>0){

  
while($row = mysqli_fetch_array($qq)){



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Student
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/material-dashboard.css" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-200">





  <nav>
    <div class="main-content position-relative bg-gray-100 max-height-vh-50 ">
      <!-- Navbar -->
      <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
        navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
          <nav aria-label="breadcrumb">

            <h6 class="font-weight-bolder text-uppercase  mb-0">profile </h6>
</nav>

          </ul>
        </div>
    </div>
  </nav>


  <!-- End Navbar -->
  <div class="container-fluid px-2 px-md-4">
    <div class="page-header min-height-300 border-radius-xl mt-4"
      style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
      <span class="mask  bg-gradient-primary  opacity-6"></span>
    </div>
    <div class="card card-body mx-3 mx-md-4 mt-n6">
      <div class="row gx-4 mb-2">
        <div class="col-auto"><br>
          <div class="avatar avatar-xl position-relative">

            <img src="<?php echo " imagesuploadedf/".$row['pic']; ?>" />
          </div>
        </div>
        <div class="col-auto my-auto">
          <div class="h-100">
            <h5 class="mb-1 text-uppercase">
              <?php echo $row["fname"]; ?>
              <?php echo $row["lname"]; ?>
            </h5>

          </div>
        </div>
        
      </div>
      <div class="row">
          <div class="row">
            <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <h6 class="mb-0">PERSONAL INFORMATION</h6>
                  <hr class="verticle gray-light my-4">
                </div>
                <div class="card-body p-3">
                <ul class="list-group">
                    <li class="list-group-item border-0 ps-0 text-uppercase pt-0 text-sm"><strong class="text-dark">First Name:</strong> &nbsp;<?php echo $row["fname"]; ?></li>
                    <li class="list-group-item border-0 ps-0 text-uppercase text-sm"><strong class="text-dark">Last Name:</strong> &nbsp; <?php  echo $row["lname"]; ?></li>
                    <li class="list-group-item border-0 ps-0 text-uppercase text-sm"><strong class="text-dark">Address:</strong> &nbsp; <?php echo $row["address"]; ?></li>
                    <li class="list-group-item border-0 ps-0 text-uppercase text-sm"><strong class="text-dark">Date Of Birth:</strong> &nbsp; <?php echo $row["dob"]; ?></li>
                    <li class="list-group-item border-0 ps-0 text-uppercase text-sm"><strong class="text-dark">Blood Group:</strong> &nbsp; <?php echo $row["bloodgrp"]; ?></li>
                    <li class="list-group-item border-0 ps-0 text-uppercase text-sm"><strong class="text-dark">Mobile number:</strong> &nbsp; <?php echo $row["mob"]; ?></li>
                    
                  </ul>
                 
                </div>
              </div>
            </div>
            <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                      <h6 class="mb-0">DEPARTMENT INFOMATION</h6>
                    </div>
                    <hr class="verticle gray-light my-4">
                   
                  </div>
                </div>
                <div class="card-body p-3">
                  
                  <ul class="list-group">
                    <li class="list-group-item border-0 ps-0 text-uppercase pt-0 text-sm"><strong class="text-dark">Department no:</strong> &nbsp;<?php echo $row["dno"]; ?></li>



                    <?php   $dno= $row["dno"];                     ?>
                    <li class="list-group-item border-0 ps-0 text-uppercase text-sm"><strong class="text-dark">USN:</strong> &nbsp; <?php echo $row["usn"]; ?></li>
                    <li class="list-group-item border-0 ps-0 text-uppercase text-sm"><strong class="text-dark">Campus ID:</strong> &nbsp; <?php echo $row["campusid"]; ?></li>
                    <li class="list-group-item border-0 ps-0 text-uppercase text-sm"><strong class="text-dark">SEM:</strong> &nbsp;<?php echo $row["section"]; ?></li>

                    <?php   $sem= $row["section"];                     ?>
                    
                  </ul>
                </div>
              </div>
            </div>
            
            
          </div>
        </div>
    </div>
  </div>
  </div>
  </div>


  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">
              SUBJECTS YOU HAVE

              </h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">


              <?php
   
   $query = "SELECT * FROM subjects WHERE year='$sem' AND dnum='$dno'";
   $result = mysqli_query($db, $query);
 
   if(!$result){
     echo $result . "<br/>" . mysqli_error($conn);
   }

   
   if(mysqli_num_rows($result)>0){
     while($row = mysqli_fetch_array($result)){
   ?>





              <table class="table align-items-center mb-0" border=1 cellspacing=0 cellpadding=10>

                <tr>

                  <th class="text-uppercase text-dark  text-xxs font-weight-bolder opacity-7">Subject name</th>
                  <th class="text-uppercase text-dark  text-xxs font-weight-bolder opacity-7">Subject code</th>

                </tr>


                <tr>
                  <div class="d-flex px-2 py-1">
                    <div>

                      <td class="text-uppercase ">


                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">
                            <?php echo $row["subname"]; ?>
                          </h6>


                      </td>

                    </div>
                  </div>

                  <!-- Sub -->

                  <td class="text-uppercase ">
                    <h6 class="mb-0 text-sm">
                      <?php echo $row["subcode"]; ?>
                    </h6>
                  </td>
    

                </tr>



              </table>
              <?php
      }
    } else {
    ?>
      
    <?php
    }
    ?>
     
            </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>



  <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">
           
                MARKS YOU OBTAINED
                </h6>
              </div>
            </div>  
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">

              <?php


$query = "SELECT uusn,fname,scode,subname,IA1,IA2,IA3 FROM marks,student,subjects WHERE uusn=usn AND uusn='$username' AND scode=subcode ORDER BY uusn";
    $result = mysqli_query($db, $query);
  
    if(!$result){
      echo $result . "<br/>" . mysqli_error($db);
    }



    if(mysqli_num_rows($result)>0){
      while($row = mysqli_fetch_array($result)){
    ?>


                <table class="table align-items-center mb-0" border = 1 cellspacing = 0 cellpadding = 10>
                  
                  <tr>                  
                    
                    <th  class="text-uppercase  font-weight-bolder  text-xs text-dark">Usn</th>
                      <th  class="text-uppercase  font-weight-bolder  text-xs text-dark">Student name</th>
                      <th  class="text-uppercase  font-weight-bolder  text-xs text-dark">Subject Code</th>
                      <th  class="text-uppercase  font-weight-bolder  text-xs text-dark">Subject name</th>
                      <th  class="text-uppercase  font-weight-bolder  text-xs text-dark">IA1</th>
                      <th  class="text-uppercase  font-weight-bolder  text-xs text-dark">IA2</th>
                      <th  class="text-uppercase  font-weight-bolder  text-xs text-dark">IA3</th>

                    </tr>
                  
                
                  

                  <tr>
                        <div class="d-flex px-2 py-1">
                          <div>
     
                      <td class="text-uppercase "> 
                        

                      <div class="d-flex flex-column justify-content-center">
                            <h6 class="text-uppercase text-dark  text-xs font-weight-bolder opacity-7"><?php echo $row["uusn"]; ?></h6>
                            
                            
                          </td>
                          
                        </div>
                    </div>
                      
                    <!--FIRST NAME-->

                      <td  class="text-uppercase "> 
                         <h6 class="text-uppercase text-dark  text-xs font-weight-bolder opacity-7">  <?php echo $row["fname"]; ?></h6>
                        </td>
                      
                    <!--SUBCODE-->


                      <td  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                      <p class="text-uppercase text-dark  text-xs font-weight-bolder opacity-7"><?php echo $row["scode"]; ?></p> 
                      </td>


                    <!-- SUBNAME-->

                      <td  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                      <p class="text-uppercase text-dark  text-xs font-weight-bolder opacity-7"><?php echo $row["subname"]; ?></p> 
                      </td>

                    <!-- IA1 -->

                      <td  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                      <p class="text-uppercase text-dark  text-xs font-weight-bolder opacity-7"><?php echo $row["IA1"]; ?></p> 
                      </td>

                    <!--IA2 -->

                      <td  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                      <p class="text-uppercase text-dark  text-xs font-weight-bolder opacity-7"> <?php echo $row["IA2"]; ?></p> 
                      </td>


                    <!-- IA3 -->

                      <td  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                      <p class="text-uppercase text-dark  text-xs font-weight-bolder opacity-7"> <?php echo $row["IA3"]; ?></p> 
                      </td>


                     
                      

                    </tr>


                 
                </table>

                <?php
      }
    } else {
    ?>
      <h3>No Data Found!</h3>
    <?php
    }
    ?>

     
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  </div>

  </div>



  <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">
           
                ATTENDENCE LIST
                </h6>
              </div>
            </div>  
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">

              <?php



   $query = "SELECT * FROM attendance WHERE usnn='$username' ORDER BY usnn";
   $result = mysqli_query($db, $query);
 
   if(!$result){
     echo $result . "<br/>" . mysqli_error($db);
   }



    if(mysqli_num_rows($result)>0){
     while($row = mysqli_fetch_array($result)){
   ?>


                <table class="table align-items-center mb-0" border = 1 cellspacing = 0 cellpadding = 10>
                  
                  <tr>                  
                    
                    <th  class="text-uppercase  font-weight-bolder  text-xs text-dark">Usn</th>
                      <th  class="text-uppercase  font-weight-bolder  text-xs text-dark">Subject code</th>
                      <th  class="text-uppercase  font-weight-bolder  text-xs text-dark">Date</th>
                      <th  class="text-uppercase  font-weight-bolder  text-xs text-dark">Total</th>
                      <th  class="text-uppercase  font-weight-bolder  text-xs text-dark">Attended</th>
                      <th  class="text-uppercase  font-weight-bolder  text-xs text-dark">percentage %</th>

                    </tr>
                  
                
                  

                  <tr>
                        <div class="d-flex px-2 py-1">
                          <div>
     
                      <td class="text-uppercase "> 
                        

                      <div class="d-flex flex-column justify-content-center">
                            <h6 class="text-uppercase text-dark  text-xs font-weight-bolder opacity-7"><?php echo $row["usnn"]; ?></h6>
                            
                            
                          </td>
                          
                        </div>
                    </div>
                      
                    <!-- Sub -->

                      <td  class="text-uppercase "> 
                         <h6 class="text-uppercase text-dark  text-xs font-weight-bolder opacity-7"> <?php echo $row["sub"]; ?></h6>
                        </td>
                      
                    <!--date-->


                      <td  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                      <p class="text-xs font-weight-bold mb-0"><?php echo $row["date"]; ?></p> 
                      </td>


                    <!-- total-->

                      <td  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                      <p class="text-xs font-weight-bold mb-0"><?php echo $row["total"]; ?></p> 
                      </td>

                    <!-- attended -->

                      <td  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                      <p class="text-xs font-weight-bold mb-0"><?php echo $row["attended"]; ?></p> 
                      </td>

                    <!-- % -->

                      <td  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                      <p class="text-xs font-weight-bold mb-0"><?php echo $row["percentage"]; ?></p> 
                      </td>


                     
                      

                    </tr>


                 
                </table>

                <?php
      }
    } else {
    ?>
      <h3>No Data Found!</h3>
    <?php
    }
    ?>
    

     
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  </div>

  </div>

            <footer class="footer py-4  ">
              <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                  <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                      ©
                      <script>
                        document.write(new Date().getFullYear())
                      </script>,
                      made with <i class="fa fa-heart"></i> by
                      <a  class="font-weight-bold" target="_blank">Tany & Vithu</a>

                    </div>
                  </div>

                </div>
              </div>
            </footer>
          </div>

          <?php
    }
   



}



else{
 echo "<h1>wrong username or password!!";
}




      ?>

</body>

</html>
<?php
session_start();
require('../includes/function.php');
$uemail=$_SESSION['email'];
$utype=$_SESSION['usertype'];


$AddmissionYear=2021;



if($_SESSION['email'] and $utype=="student")
{
  $conn =mysqli_connect('localhost','root','','cutm_csr');
  $posts=getAllPostAdmin($conn);

  $studentResultyr1=getStudentResultyr1($conn,$uemail,$AddmissionYear);
  $studentResultyr2=getStudentResultyr2($conn,$uemail,$AddmissionYear+1);
  $studentResultyr3=getStudentResultyr3($conn,$uemail,$AddmissionYear+2);
  $studentResultyr4=getStudentResultyr4($conn,$uemail,$AddmissionYear+3);
}
else
{
  echo "working";
  header('location:../includes/logout.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="student.php" class="logo d-flex align-items-center">
        <img src="../images/icon.png" alt="">
        <span class="d-none d-lg-block">CSR CUTM</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->


    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">




        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            

            <span class="d-none d-md-block dropdown-toggle ps-2"><?=$uemail?></suserNamepan>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?=$uemail?></h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../includes/logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="student.php">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link " href="generatereport.php">
                <i class="bi bi-journal-text"></i>
                <span>Add Activity</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link " href="studentresult.php">
                <i class="bi bi-journal-text"></i>
                <span>CSR Result</span>
            </a>
        </li>


    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="bd-masthead mb-3" id="content">
        <div class="container-xxl bd-gutter">
            <div class="col-md-8 mx-auto text-center">
            
                <img src="../images/cutmimage.png" width="200" height="200" alt="Bootstrap" class="d-block mx-auto mb-3">
                <h1 class="mb-3 fw-semibold">Centurion University of Technology and Management</h1>
                <p class="lead mb-4">School of Applied Sciences, Bhubaneswar </p>
                <p class="lead mb-4">Bhubaneswar Campus</p>
                <p class="lead mb-4">Semester Grade Sheet</p>
                <p class="lead mb-4"><b>Student Regd. No :</b> <?=$uemail?></p>
                <p class="lead mb-4"><b>Student Name : </b><?=$studentResultyr2['Name']?></p>
            
            </div>
        </div>
    </div>

    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Year</th>
            <th scope="col">First</th>
            <th scope="col">Second</th>
            <th scope="col">Third</th>
            <th scope="col">Forth</th>
            <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Culture(in hrs)</th>
                <td><?=$studentResultyr1['Culture']?></td>
                <td><?=$studentResultyr2['Culture']?></td>
                <td><?=$studentResultyr3['Culture']?></td>
                <td><?=$studentResultyr4['Culture']?></td>
                <td><?=$studentResultyr1['Culture'] + $studentResultyr2['Culture'] + $studentResultyr3['Culture'] + $studentResultyr4['Culture']?></td>
            </tr>
            <tr>
                <th>Sports(in hrs)</th>
                <td><?=$studentResultyr1['Sports']?></td>
                <td><?=$studentResultyr2['Sports']?></td>
                <td><?=$studentResultyr3['Sports']?></td>
                <td><?=$studentResultyr4['Sports']?></td>
                <td><?=$studentResultyr1['Sports'] + $studentResultyr2['Sports'] + $studentResultyr3['Sports'] + $studentResultyr4['Sports']?></td>
            </tr>
            <tr>
                <th>Responsibility(in hrs)</th>
                <td><?=$studentResultyr1['Responsibility']?></td>
                <td><?=$studentResultyr2['Responsibility']?></td>
                <td><?=$studentResultyr3['Responsibility']?></td>
                <td><?=$studentResultyr4['Responsibility']?></td>
                <td><?=$studentResultyr1['Responsibility'] + $studentResultyr2['Responsibility'] + $studentResultyr3['Responsibility'] + $studentResultyr4['Responsibility']?></td>
            </tr>
            <tr>
                <th>Credit</th>
                <td><?=$studentResultyr1['Culture']?></td>
                <td><?=$studentResultyr2['Culture']?></td>
                <td><?=$studentResultyr3['Culture']?></td>
                <td><?=$studentResultyr4['Culture']?></td>
                <td><?=$studentResultyr1['Culture'] + $studentResultyr2['Culture'] + $studentResultyr3['Culture'] + $studentResultyr4['Culture']?></td>
            </tr>
        </tbody>
    </table>
    <br><br><br>
    <center><button class="btn btn-success btn-lg float-right" type="click" onclick="printDiv()">Print</button><center>

  </main><!-- End #main -->
    

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>CSR CUTM</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="https://chinmayakumarbiswal.in/">Chinmaya Kumar Biswal</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
        function printDiv() {
            var divContents = document.getElementById("main").innerHTML;
            // var a = window.open('', '', 'height=500, width=500');
            // a.document.write('<html>');
            // a.document.write('<body > <h1>Div contents are <br>');
            // a.document.write(divContents);
            // a.document.write('</body></html>');
            // a.document.close();
            // a.print();
            window.print();
        }
    </script>

</body>

</html>
<?php
require('../includes/function.php');
require('../includes/database.php');
$uemail=$_SESSION['email'];
$utype=$_SESSION['usertype'];

$post_images=getImagesByPost($db,$uemail);


$AddmissionYear=2021;


if($_SESSION['email'] and $utype=="student")
{
  $studentData=getAllStudentDetails($db,$uemail);
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

    <title>Edit Profile</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

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
                <img src="../images/cutm.png" alt="">
                <span class="d-none d-lg-block"> | CSR CUTM</span>
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
                            <span>student</span>
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
                    <i class="bi bi-clipboard-check"></i>
                    <span>CSR Result</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="prof.php">
                    <i class="bi bi-person-fill"></i>
                    <span>Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="../login/login.php">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Log out</span>
                </a>
            </li>



        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="bd-masthead mb-3" id="content">
            <div class="container-xxl bd-gutter">
                <div class="col-md-8 mx-auto text-center">

                    <h1 class="mb-3 fw-bold">Profile Update</h1>


                </div>
            </div>
        </div>

        <img src="../images/profileimg/<?=$post_images['profileimage'] ?>" alt="KIRAN Icon" width="170" height="170" ALIGN="right" HSPACE="30" VSPACE="30"
            style=border-radius:50%; />
                <section class="section dashboard">


                    <form action="../includes/createuser.php" method="post" enctype="multipart/form-data">

                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Name : </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" value="<?=$post_images['name']?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Registration Number: </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="regdno"  value="<?=$post_images['regd']?>" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">School Name:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="school" value="<?=$post_images['schoolname']?>" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Program: </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="program" value="<?=$post_images['program']?>" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Branch: </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="branch" value="<?=$post_images['branch']?>" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Session: </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="addyr" value="<?=$post_images['admissionyear']?>" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Gender:</label>
                            <div class="col-sm-10">
                              <select class="form-select" aria-label="Default select example" name="sex">
                                <option value="<?=$post_images['sex']?>"><?=$post_images['sex']?></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Transgender">Transgender</option>
                              </select>
                          </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Religion:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="religion" value="<?=$post_images['religion']?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Date of Birth: </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="dob" value="<?=$post_images['dob']?>" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Blood group: </label>
                            <div class="col-sm-10">
                              <select class="form-select" aria-label="Default select example" name="blood">
                                <option value="<?=$post_images['blood_group']?>">Select Blood <?=$post_images['blood_group']?></option>
                                <option value="o+">O+</option>
                                <option value="a+">A+</option>
                                <option value="b+">B+</option>
                                <option value="ab+">AB+</option>
                                <option value="o-">O-</option>
                                <option value="a-">A-</option>
                                <option value="b-">B-</option>
                                <option value="ab-">AB-</option>
                              </select>
                          </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Hobby :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="hobby" value="<?=$post_images['hobby']?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Mobile No.:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="mob" value="<?=$post_images['mobile']?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Mail:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="email" value="<?=$post_images['email']?>" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Present address:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="presentadd" value="<?=$post_images['present_address']?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Permanent address:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="permanent" value="<?=$post_images['permanent_address']?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                          <label for="inputNumber" class="col-sm-2 col-form-label">Update Profile Image</label>
                            <div class="col-sm-10">
                            <input class="form-control" type="file" id="formFile" name="imageupload" accept="image/*" required>
                          </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Publish Post</label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary" name="editprofile">Submit</button>
                            </div>
                        </div>
                    </form>

                </section>
    </main><!-- End #main -->


    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>CSR | CUTM</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="https://cutm.ac.in/">Centurion University of Technology and Management</a>
    </div>
  </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

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
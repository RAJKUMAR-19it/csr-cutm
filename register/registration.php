<?php
?>>
<!DOCTYPE html>
<html> 
<head>
<title> CSR | CUTM | Registration </title>

		<!-- Web Fonts -->
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">

		<!-- CSS Global Compulsory -->
		<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/style.css">

		<!-- CSS Header and Footer -->
		<link rel="stylesheet" href="assets/css/header.css">
		<link rel="stylesheet" href="assets/css/footer.css">

		<!-- CSS Implementing Plugins -->
		<link rel="stylesheet" href="assets/plugins/line-icons-pro/styles.css">
		<link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
		<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">

		<!-- CSS Customization -->
		<link rel="stylesheet" href="assets/css/custom.css">

</head>

<body>
		<div class="wrapper">
		<!--=== Header v1 ===-->
		<div class="header-v1">
		
				<center><b><h2>Centurion University of Technology and Management</h2></b>
				<img src="assets/img/cutm.png" width="100" height="100" alt="img"></center>
				</a>
				</div>
				</div><!--/end responsive container-->

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-responsive-collapse">
				<div class="res-container">
				<ul class="nav navbar-nav">

				<!-- Collect the nav links, forms, and other content for toggling -->


				

				

				</ul>

				</div>
				</div>
				</div>
				</div>
				</div>
				<!-- End Navbar -->



	<!-- Image title -->

	<div style="text-align: center; margin-top: 50px;">
	<h2>CSR Registration Form</h2>
	</div>

	<!-- End title  -->


				<!--=== Content Part ===-->
				<div class="container content">
				<div class="row">
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
				<form onsubmit="showMsg(0);return false;" method="post" class="reg-page">
				
				<label>Name</label>
				<input type="text" class="form-control " style="margin-bottom: 20px;" required="">

				<label>Registration No.</label>
				<input type="text" class="form-control " style="margin-bottom: 20px;" required="">

				<label>Campus</label>
				<input type="text" class="form-control " style="margin-bottom: 20px;" required="">

				<label>School Name</label>
				<input type="text" class="form-control " style="margin-bottom: 20px;" required="">

				<label>Program</label>
				<input type="text" class="form-control " style="margin-bottom: 20px;" required="">

				<label>Branch</label>
				<input type="text" class="form-control " style="margin-bottom: 20px;" required="">
				
				<label>Academic Year</label>
				<input type="text" class="form-control " style="margin-bottom: 20px;" required="">

				<label>Email Address <span class="color-red">*</span></label>
				<input type="text" class="form-control " style="margin-bottom: 20px;" required="">

				<label>Mobile No.</label>
				<input type="text" class="form-control " style="margin-bottom: 20px;" required="">

				<label><input type="radio" value="Male" name="gender"> Same as present address</label>
				<div class="row">
				<div class="col-sm-6">
				<label>Present Address</label>
                <textarea cols="82" rows="5" class="form-control " style="margin-bottom: 20px;"required>  
                </textarea>  
				</div>
				
				<div class="col-sm-6">
				<label>Permanent Address</label>
                <textarea cols="82" rows="5" class="form-control " style="margin-bottom: 20px;"required>  
                </textarea>
				</div>
				</div>

				<div class="row mb-3">
                          <label for="inputNumber" class="col-sm-2 col-form-label">Upload Profile Image</label>
                            <div class="col-sm-10">
                            <input class="form-control" type="file" id="formFile" name="imageupload" accept="image/*" required>
                          </div>
                        </div>
				<div class="alert alert-success successBox">
				<button type="button" class="close" onclick="showMsg(1);">×</button>
				<strong style="font-size: 16px;">Congratulations!</strong><span class="alert-link"> You Have Successfully Registered.</span>
				</div>

				<hr>

				<div class="row">
				<div class="col-lg-6 checkbox">
				<label>
				<input type="checkbox" required="">
				I read <a href="#" class="color-green">Terms and Conditions</a>
				</label>
				</div>
				<div class="col-lg-6 text-right">
				<button class="btn-u" type="submit">Register</button>
				</div>
				</div>
				</form>
				</div>
				</div>
				</div><!--/container-->
				<!--=== End Content Part ===-->

		

		<div class="copyright">
		<div class="container">
		<div class="row">
		<div class="col-md-6">
		<p>
		2022 &copy; Designed by
		<a href="https://cutm.ac.in/">Centurion University of Technology and Management</a>
		</p>
		</div>

		</div>
		</div>
		</div><!--/copyright-->
		</div>
		<!--=== End Footer ===-->
</div><!--/wrapper-->

	<!-- Java scripts -->
	<script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript">
	function showMsg(flag){
	if(flag==0){
	$('.successBox').css('display', 'block');
	}else{
	$('.successBox').css('display', 'none');
	}
	}
	</script>

</body>
</html>
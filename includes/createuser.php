<?php
    require('./database.php');
    require('./function.php');

   
    if(isset($_POST['createu'])){
		$name=mysqli_real_escape_string($db,$_POST['name']);
        $email=mysqli_real_escape_string($db,$_POST['email']);
		$regdno=mysqli_real_escape_string($db,$_POST['regdno']);
		$school=mysqli_real_escape_string($db,$_POST['school']);
		$program=mysqli_real_escape_string($db,$_POST['program']);
		$branch=mysqli_real_escape_string($db,$_POST['branch']);
		$addyr=mysqli_real_escape_string($db,$_POST['addyr']);
		$sex=mysqli_real_escape_string($db,$_POST['sex']);
		$religion=mysqli_real_escape_string($db,$_POST['religion']);
		$dob=mysqli_real_escape_string($db,$_POST['dob']);
		$blood=mysqli_real_escape_string($db,$_POST['blood']);
		$hobby=mysqli_real_escape_string($db,$_POST['hobby']);
		$presentadd=mysqli_real_escape_string($db,$_POST['presentadd']);
		$premantadd=mysqli_real_escape_string($db,$_POST['permanent']);
		$phone=mysqli_real_escape_string($db,$_POST['mob']);

		$image_name=$_FILES['imageupload']['name'];
        $image_tmp=$_FILES['imageupload']['tmp_name'];

		$password=mysqli_real_escape_string($db,$_POST['password']);


		echo $name."<br><br>";
		echo $email."<br><br>";
		echo $regdno."<br><br>";
		echo $school."<br><br>";
		echo $program."<br><br>";
		echo $branch."<br><br>";
		echo $addyr."<br><br>";
		echo $sex."<br><br>";
		echo $religion."<br><br>";
		echo $dob."<br><br>";
		echo $blood."<br><br>";
		echo $hobby."<br><br>";
		echo $presentadd."<br><br>";
		echo $premantadd."<br><br>";
		echo $phone."<br><br>";
		echo $image_name."<br><br>";
        echo $image_tmp."<br><br>";
		echo $password."<br><br>";

        print "<pre>";
        print_r($_FILES);
        print "</pre>";

        if(move_uploaded_file($image_tmp,"../images/profileimg/$image_name")){
            $query="INSERT INTO student (name,email,regd,schoolname,program,branch,admissionyear,sex,religion,dob,blood_group,hobby,present_address,permanent_address,password,mobile,profileimage) VALUES('$name','$email','$regdno','$school','$program','$branch','$addyr','$sex','$religion','$dob','$blood','$hobby','$presentadd','$premantadd','$password','$phone','$image_name')";
            $run=mysqli_query($db,$query) or die(mysqli_error($db));
            if ($run) {
                header('location:../login/login.php');
            }
            else {
                echo "inserted error";
            }
        }
        else {
            echo "File Size High";
        }
    }

	
	if(isset($_POST['editprofile'])){
		$name=mysqli_real_escape_string($db,$_POST['name']);
        $email=mysqli_real_escape_string($db,$_POST['email']);
		$sex=mysqli_real_escape_string($db,$_POST['sex']);
		$religion=mysqli_real_escape_string($db,$_POST['religion']);
		$blood=mysqli_real_escape_string($db,$_POST['blood']);
		$hobby=mysqli_real_escape_string($db,$_POST['hobby']);
		$presentadd=mysqli_real_escape_string($db,$_POST['presentadd']);
		$premantadd=mysqli_real_escape_string($db,$_POST['permanent']);
		$phone=mysqli_real_escape_string($db,$_POST['mob']);

		$image_name=$_FILES['imageupload']['name'];
        $image_tmp=$_FILES['imageupload']['tmp_name'];



		echo $name."<br><br>";
		echo $email."<br><br>";
		echo $sex."<br><br>";
		echo $religion."<br><br>";
		echo $blood."<br><br>";
		echo $hobby."<br><br>";
		echo $presentadd."<br><br>";
		echo $premantadd."<br><br>";
		echo $phone."<br><br>";
		echo $image_name."<br><br>";
        echo $image_tmp."<br><br>";

		if(move_uploaded_file($image_tmp,"../images/profileimg/$image_name")){
            $query="UPDATE  student SET name='$name', sex='$sex', religion='$religion', blood_group='$blood', hobby='$hobby', present_address='$presentadd', permanent_address='$premantadd', mobile='$phone', profileimage='$image_name'  WHERE email='$email'";
            $run=mysqli_query($db,$query) or die(mysqli_error($db));
            if ($run) {
                header('location:../adminlogin/prof.php');
				echo "inserted done";
            }
            else {
                echo "inserted error";
            }
        }
        else {
            echo "File Size High";
        }
	}

?>
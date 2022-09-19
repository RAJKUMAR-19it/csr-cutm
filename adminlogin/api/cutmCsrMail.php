<?php
    session_start();
        
    $email=$_GET['email'];
    $name=$_GET['name'];
    $password="situ";

    

    $from='situ@chinmayakumarbiswal.in';
    $to=$email;
    $subject='login Details ';
    $message="Name : ".$name."\n"."Email:". $email."\n"."Password:". $password."\n". "You login to CSR website using http://localhost/csr-project/adminlogin/teacher.php "."\n". "Thank You" ."\n". "Chinmaya Kumar Biswal";
    $headers="From: ".$from;
    $send=mail($to, $subject, $message, $headers);
    if ($send) {
        echo "send ok";
        header('location:http://localhost/csr-project/adminlogin/admin.php');
    }
    else {
        echo "error in sending ";
        header('location:http://localhost/csr-project/adminlogin/admin.php');
    }

?>
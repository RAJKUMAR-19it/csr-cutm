<?php
    function getAllYear($db){
        $query="SELECT * FROM Year";
        $run=mysqli_query($db,$query);
        $data=array();
        while($d=mysqli_fetch_assoc($run)){
            $data[]=$d;
        }
        return $data;
    }

    function getAllPost($db,$uemail){
        $query="SELECT * FROM csrtimesheet WHERE emailOfStd='$uemail' ORDER BY id DESC";
        $run=mysqli_query($db,$query);
        $data=array();
        while($d=mysqli_fetch_assoc($run)){
            $data[]=$d;
        }
        return $data;
    }

    function getAllPostTeacher($db){
        $query="SELECT * FROM csrtimesheet ORDER BY id DESC";
        $run=mysqli_query($db,$query);
        $data=array();
        while($d=mysqli_fetch_assoc($run)){
            $data[]=$d;
        }
        return $data;
    }

    function getAllPostAdmin($db){
        $query="SELECT NameOfStd,emailOfStd,totalTime,id,SUM(totalTime) as totalTime FROM csrtimesheet GROUP BY emailOfStd ORDER BY id DESC";
        $run=mysqli_query($db,$query);
        $data=array();
        while($d=mysqli_fetch_assoc($run)){
            $data[]=$d;
        }
        return $data;
    }

    function getUserNmae($db,$uemail){
        $query="SELECT * FROM student WHERE email='$uemail'";
        $run=mysqli_query($db,$query);
        $data=mysqli_fetch_assoc($run);
        return $data['name'];
    }

    function getStudentSports($db,$uemail){
        $query="SELECT SUM(totalTime) as totalTime FROM csrtimesheet WHERE emailOfStd='$uemail' AND csrPr='Sports'";
        $run=mysqli_query($db,$query);
        $data=mysqli_fetch_assoc($run);
        return $data['totalTime'];
    }

    function getStudentResponsibility($db,$uemail){
        $query="SELECT SUM(totalTime) as totalTime FROM csrtimesheet WHERE emailOfStd='$uemail' AND csrPr='Responsibility'";
        $run=mysqli_query($db,$query);
        $data=mysqli_fetch_assoc($run);
        return $data['totalTime'];
    }

    function getStudentCulture($db,$uemail){
        $query="SELECT SUM(totalTime) as totalTime FROM csrtimesheet WHERE emailOfStd='$uemail' AND csrPr='Culture'";
        $run=mysqli_query($db,$query);
        $data=mysqli_fetch_assoc($run);
        return $data['totalTime'];
    }

    function getAllStudentDetails($db,$uemail){
        $query="SELECT * FROM student WHERE email='$uemail' ORDER BY id DESC";
        $run=mysqli_query($db,$query);
        $data=mysqli_fetch_assoc($run);
        return $data;
    }

    function getAllPostByAdmin($db,$uemail){
        $year = date("Y"); 

        $query="SELECT * FROM csrtimesheet WHERE emailOfStd='$uemail' AND yearOfPr='$year' AND status='Approved' ORDER BY id DESC";
        $run=mysqli_query($db,$query);
        $data=array();
        while($d=mysqli_fetch_assoc($run)){
            $data[]=$d;
        }
        return $data;
    }

    function getStudentCultureByAdmin($db,$uemail){
        $query="SELECT SUM(totalTime) as totalTime FROM csrtimesheet WHERE emailOfStd='$uemail' AND csrPr='Culture'";
        $run=mysqli_query($db,$query);
        $data=mysqli_fetch_assoc($run);
        return $data['totalTime'];
    }
    
    function getStudentResponsibilityByAdmin($db,$uemail){
        $query="SELECT SUM(totalTime) as totalTime FROM csrtimesheet WHERE emailOfStd='$uemail' AND csrPr='Responsibility'";
        $run=mysqli_query($db,$query);
        $data=mysqli_fetch_assoc($run);
        return $data['totalTime'];
    }

    function getStudentSportsByAdmin($db,$uemail){
        $query="SELECT SUM(totalTime) as totalTime FROM csrtimesheet WHERE emailOfStd='$uemail' AND csrPr='Sports'";
        $run=mysqli_query($db,$query);
        $data=mysqli_fetch_assoc($run);
        return $data['totalTime'];
    }

    function getStudentResultyr1($db,$uemail,$year){
        $query="SELECT * FROM certificatelog WHERE email='$uemail' AND Year='$year'";
        $run=mysqli_query($db,$query);
        $data=mysqli_fetch_assoc($run);
        return $data;
    }

    function getStudentResultyr2($db,$uemail,$year){
        $query="SELECT * FROM certificatelog WHERE email='$uemail' AND Year='$year'";
        $run=mysqli_query($db,$query);
        $data=mysqli_fetch_assoc($run);
        return $data;
    }

    function getStudentResultyr3($db,$uemail,$year){
        $query="SELECT * FROM certificatelog WHERE email='$uemail' AND Year='$year'";
        $run=mysqli_query($db,$query);
        $data=mysqli_fetch_assoc($run);
        return $data;
    }

    function getStudentResultyr4($db,$uemail,$year){
        $query="SELECT * FROM certificatelog WHERE email='$uemail' AND Year='$year'";
        $run=mysqli_query($db,$query);
        $data=mysqli_fetch_assoc($run);
        return $data;
    }
?>
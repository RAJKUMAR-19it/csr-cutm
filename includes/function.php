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
?>
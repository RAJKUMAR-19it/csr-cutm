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
?>
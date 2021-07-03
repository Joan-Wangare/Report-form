<?php

//check connection to database

include('connect.php');

//POST action to send data to teachers database

    if(isset($_POST['save']))
    {
//fetching data from form to insert in table
        $sql ="INSERT INTO teachers(name,date,students_present,students_absent,time,class_group,topic,remarks)
        VALUE ('".$_POST["name"]."',
        '".$_POST["date"]."',
        '".$_POST["students_present"]."',
        '".$_POST["students_absent"]."',
        '".$_POST["time"]."',
        '".$_POST["class_group"]."',
        '".$_POST["topic"]."',
        '".$_POST["remarks"]."')";
//check connection then insert data
        $result = mysqli_query($conn,$sql);
        if($result){
          echo "saved";
        } else{
          echo "not saved";
        }

};

?>
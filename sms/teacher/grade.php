<?php

include "config.php";

  if (isset($_POST['submit_grade'])) {

    $student_id = $_POST['student_id'];
    $course_id = $_POST['course_id'];
    $grade = $_POST['grade'];

    $sql = "INSERT INTO `grades`(`student_id`, `course_id`, `grade`) VALUES ('$student_id','$course_id','$grade')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";
       header("Location: viewGrade.php");
       exit();
    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }
?>
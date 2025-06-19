<?php

include "config.php";

  if (isset($_POST['add_course'])) {

      $course_name = $_POST['course_name'];
      $course_code = $_POST['course_code'];
      $course_description = $_POST['course_description'];
      
    $sql = "INSERT INTO `course`(`course_name`, `course_code`, `course_description`) VALUES ('$course_name','$course_code','$course_description')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";
      header("Location: viewCourse.php");
      exit();

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }
?>
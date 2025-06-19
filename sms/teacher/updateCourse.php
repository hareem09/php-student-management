<?php
include 'config.php';

if (isset($_POST["update"])) {
    $id = $_POST["id"];
   $course_name = $_POST['cname'];
    $course_code = $_POST['ccode'];
    $course_description = $_POST['cdescription'];

    $sql = "UPDATE course SET course_name='$course_name', course_code='$course_code', course_description='$course_description' WHERE course_id='$id'";
    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully!";
         // You can redirect or perform other actions here
        header("Location: viewCourse.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
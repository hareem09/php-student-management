<?php
include 'config.php';

if (isset($_POST["update"])) {
    // $id = $_POST["id"];
   $s_id = $_POST['s_id'];
    $c_id = $_POST['c_id'];
    $grade = $_POST['grade'];

    $sql = "UPDATE grades SET student_id='$s_id', course_id='$c_id', grade='$grade' WHERE student_id='$s_id' AND course_id='$c_id'";
    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully!";
        // You can redirect or perform other actions here
        header("Location: viewGrade.php");
        exit();
        
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
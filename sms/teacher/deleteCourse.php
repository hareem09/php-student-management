<?php 

include "config.php"; 

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM `course` WHERE `course_id`='$id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully.";
         // You can redirect or perform other actions here
        header("Location: viewCourse.php");
        exit();
    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>
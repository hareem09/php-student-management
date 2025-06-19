<?php 

include "config.php"; 

if (isset($_GET['s_id'])) {

    $s_id = $_GET['s_id'];

    $sql = "DELETE FROM `grades` WHERE `student_id`='$s_id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully.";
         // You can redirect or perform other actions here
        header("Location: viewGrade.php");
        exit();

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>
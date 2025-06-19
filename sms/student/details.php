<?php

include "config.php";

  if (isset($_POST['submit'])) {

    $first_name = $_POST['first_name'];

    $last_name = $_POST['last_name'];

    $age = $_POST['age'];

    $address = $_POST['address'];

    $phone = $_POST['phone'];

    $sql = "INSERT INTO `details`(`first_name`, `last_name`, `age`, `address`, `phone`) VALUES ('$first_name','$last_name','$age','$address','$phone')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";
      header("Location: view.php");
      exit();
    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }
?>
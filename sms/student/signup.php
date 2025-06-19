<?php

include "config.php";

  if (isset($_POST['signup'])) {

    $user_name = $_POST['username'];

    $email = $_POST['email'];

    $password = $_POST['password'];

    $sql = "INSERT INTO `students`(`username`, `email`, `password`) VALUES ('$user_name','$email','$password')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }
?>
<!-- <?php
echo "Signup page is under construction.";
?> -->
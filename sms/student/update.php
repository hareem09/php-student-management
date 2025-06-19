<?php
include 'config.php';

if (isset($_POST["update"])) {
    $id = $_POST["id"];
   $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $address = $_POST['address'];

    $sql = "UPDATE details SET first_name='$first_name', last_name='$last_name', address='$address' WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully!";
         // You can redirect or perform other actions here
        header("Location: view.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
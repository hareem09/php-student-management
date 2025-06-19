<?php 

include "config.php";

$sql = "SELECT * FROM grades";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Grade</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>Grade List</h2>

<table class="table">

    <thead>

        <tr>

        <!-- <th>ID</th> -->

        <th>Student ID</th>

        <th>Course ID</th>

        <th>Grade</th>

        <th>Action</th>

    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>
                    <tr>
                    <!-- <td><?php echo $row['id']; ?></td> -->
                    <td><?php echo $row['student_id']; ?></td>
                    <td><?php echo $row['course_id']; ?></td>
                    <td><?php echo $row['grade']; ?></td>
                    <td><a href="updateGrade.html?s_id=<?php echo $row['student_id']; ?>&c_id=<?php echo $row['course_id']; ?>" class="btn btn-warning">Update</a><a class="btn btn-danger" href="deleteGrade.php?s_id=<?php echo $row['student_id']; ?>&c_id=<?php echo $row['course_id']; ?>">Delete</a></td>

                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>

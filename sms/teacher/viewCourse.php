<?php 

include "config.php";

$sql = "SELECT * FROM course";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View course</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>Course List</h2>

<table class="table">

    <thead>

        <tr>

        <th>ID</th>

        <th>Course Name</th>

        <th>Course Code</th>

        <th>Description</th>

        <th>Action</th>

    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>
                    <tr>
                    <td><?php echo $row['course_id']; ?></td>
                    <td><?php echo $row['course_name']; ?></td>
                    <td><?php echo $row['course_code']; ?></td>
                    <td><?php echo $row['course_description']; ?></td>
                    <td><a href="updateCourse.html?id=<?php echo $row['course_id']; ?>" class="btn btn-warning">Update</a><a class="btn btn-danger" href="deleteCourse.php?id=<?php echo $row['course_id']; ?>">Delete</a></td>

                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="css/all-students.css">
</head>
<body>
<?php   
include "header.php";
$students = mysqli_query($connect, 'SELECT * FROM registered');

?>
<a href="register.php">Add New Student</a>
<h2>All Students</h2>
<table class="table">
    <thead>
        <td>S/N</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>User Name</td>
        <td>Email</td>
        <td>Phone</td>
        <td>Department</td>
        <td>Action</td>

    </thead>
    <tbody>
        <?php
        foreach ($students as $student): ?>
    <tr>
        <td><?= $student['ID'] ?></td>
        <td><?= $student['first_name'] ?></td>
        <td><?= $student['last_name'] ?></td>
        <td><?= $student['user_name'] ?></td>
        <td><?= $student['email'] ?></td>
        <td><?= $student['phone'] ?></td>
        <td><?= $student['department'] ?></td>
        <td>
       <button><a href="edit-student.php?ID=<?= $student['ID'] ?>">Edit</a></button>
        <button><a href="delete-student.php?ID=<?= $student['ID'] ?>">Delete</a></button>
        <button><a href="view-student.php?ID=<?= $student['ID'] ?>">View</a></button>

        </td>

    </tr>
    <?php 
    endforeach;
     ?>
    </tbody>
</table>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="all-students.php">All Students</a>

<?php
include 'header.php';
?>

<?php
$id = $_GET['ID'];
$student = mysqli_query($connect, "SELECT * FROM registered WHERE ID = '$id'");

$student_details = mysqli_fetch_assoc($student);
if(!$student_details){
exit("student not found");
}
?>

<h2>View Student</h2>

<p> First Name: <?= $student_details['first_name'] ?> </p>
<p> Last Name: <?= $student_details['last_name'] ?> </p>
<p> User Name: <?= $student_details['user_name'] ?> </p>
<p> Email: <?= $student_details['email'] ?> </p>
<p> Phone: <?= $student_details['phone'] ?> </p>
<p> Department: <?= $student_details['department'] ?> </p>
<p> Password: <?= $student_details['password'] ?> </p>


</body>
</html>
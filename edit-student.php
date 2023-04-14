<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="all-studentS.php">All Students</a>
 <?php
include "header.php";

$id = $_GET['ID'];
$student = mysqli_query($connect, "SELECT * FROM registered WHERE ID = '$id'");

if(!$student){
exit('Student not found');
}

$student_details = mysqli_fetch_assoc($student);
?>




<h2>Edit Students</h2>
<form action="process.php" method="post">
<input type="hidden" value="<?php  echo $id ?>" name="student_id">
<label for="">First Name:</label>
<input type="text" name="first_name" value="<?php echo $student_details['first_name'] ?>"><br>

<label for="">Last Name:</label>
<input type="text" name="last_name" value="<?php echo $student_details['last_name'] ?>"><br>

<label for="">User Name:</label>
<input type="text" name="user_name" value="<?php echo $student_details['user_name'] ?>"><br>

<label for="">Email:</label>
<input type="email" name="email" value="<?php echo $student_details['email'] ?>"><br>

<label for="">Phone</label>
<input type="tel" name="phone" value="<?php echo $student_details['phone'] ?>"><br>

<label for="">Password:</label>
<input type="password" name="pass" value="<?php echo $student_details['password'] ?>"><br>


<label for="">Department</label>
<select name="student_department">
    <option value="">Select gender</option>
    <option value="Software Engineering" <?php if($student_details['department']==="Software Engineering"){ echo "selected";} ?> >Software Engineering</option>
    <option value="Computer Engineering" <?php if($student_details['department']==="Computer Engineering"){ echo "selected";} ?> >Computer Engineering</option>
    <option value="Systems Engineering" <?php if($student_details['department']==="Systems Engineering"){ echo "selected";} ?> >Systems Engineering</option>
    <option value="Marine Engineering" <?php if($student_details['department']==="Marine Engineering"){ echo "selected";} ?> >Marine Engineering</option>
    <option value="Electronic Engineering" <?php if($student_details['department']==="Electronic Engineering"){ echo "selected";} ?> >Electronic Engineering</option>
    <option value="Civil Engineering" <?php if($student_details['department']==="Civil Engineering"){ echo "selected";} ?> >Civil Engineering</option>
    <option value="Mechanical Engineering" <?php if($student_details['department']==="Mechanical Engineering"){ echo "selected";} ?> >Mechanical Engineering</option>

</select><br>
<input type="submit" value="Update" name="edit_student">

</form>
</body>
</html>
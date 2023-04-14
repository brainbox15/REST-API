
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p><a href="logout.php">Log out</a></p>

<h2>Students</h2>
<form action="process.php" method="post">
<label for="">Name:</label>
<input type="text" name="student_name"><br>

<label for="">Age:</label>
<input type="text" name="student_age"><br>


<label for="">Gender</label>
<select name="student_gender">
    <option value="">Select gender</option>
    <option value="M">Male</option>
    <option value="F">Female</option>

</select><br>
<input type="submit" value="save" name="save_student">

</form>
</body>
</html>
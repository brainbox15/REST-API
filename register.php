

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>




<!-- <?php
include 'header.php';
?> -->

<h2>Student Registration Form</h2>
<div id="form_container">
    <form action="process.php" method="post">
        <label for="">First Name:</label>
        <input type="text" name="first_name" required>

        <label for="">Last Name:</label>
        <input type="text" name="last_name" required>

        <label for="">Username:</label>
        <input type="text" name="user_name" required>

        <label for="">Email:</label>
        <input type="text" name="email" required>

        <label for="">Phone:</label>
        <input type="tel" name="phone" required>

        <label for="">Department</label>
        <select name="student_department" required>
            <option value="">Select department</option>
            <option value="Software Engineering">Software Engineering</option>
            <option value="Computer Engineering">Computer Engineering</option>
            <option value="Systems Engineering">Systems Engineering</option>
            <option value="Marine Engineering">Marine Engineering</option>
            <option value="Electronic Engineering">Electronic Engineering</option>
            <option value="Civil Engineering">Civil Engineering</option>
            <option value="Mechanical Engineering">Mechanical Engineering</option>




        </select>

        <label for="">Password:</label>
        <input type="password" name="pass">
        <label for="">Confirm password:</label>
        <input type="password" name="confirm_pass">



        </select><br>
        <input type="submit" value="Register" name="save_user" id="register">

    </form>
    </div>
</body>
</html>
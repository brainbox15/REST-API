<?php
session_start();
?>

<?php

require "header.php";
// create student
if(isset($_POST['save_student'])){
    $name = $_POST['student_name'];
    $age = $_POST['student_age'];
    $gender = $_POST['student_gender'];


    $insert_data= mysqli_query($connect, "INSERT INTO js1( name, age, gender) VALUES( '$name', '$age', '$gender')");
if($insert_data){
    header("location: all-students.php");
}

}

// Update Student
if(isset($_POST['edit_student'])){
    $id =$_POST['student_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $name = $_POST['user_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $department = $_POST['student_department'];

    $pass = $_POST['pass'];

    
    $update_student = mysqli_query($connect, "UPDATE registered SET first_name = '$first_name',
    last_name = '$last_name', user_name = '$name', email = '$email', phone = '$phone', department = '$department', password = '$pass' WHERE ID = '$id' ");

if($update_student){
header("Location: all-students.php");

}
}



// REGISTER USER
if(isset($_POST['save_user'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $name = $_POST['user_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $department = $_POST['student_department'];

    $pass = $_POST['pass'];
    $confirm_pass = $_POST['confirm_pass'];

    
    // confirming pass & confrirm pass matches.
    if($pass !==$confirm_pass){
        exit("<p>password do not match</p><a href='register.php'>Go back</a</p>");
    }

    // checking if email already exist
    $user_exist = mysqli_query($connect, "SELECT * FROM registered WHERE email = '$email'");
    if(mysqli_num_rows($user_exist) > 0){
        exit("<p>User already exist</p><a href='index.php'>login</a>");
        
    }


          //   checking if user_name already exist
          $username_exist = mysqli_query($connect, "SELECT * FROM registerd WHERE user_name = '$name'");
          if (mysqli_num_rows($username_exist) > 0) {
              exit("<p>User name already exist</p><a href='register.php'>Go back</a>");
  
          }

    // encrypting password
    $cryptic_pass = md5($pass);


    // inserting data into database.
    $insert_user= mysqli_query($connect, "INSERT INTO registered (first_name, last_name, user_name, email, phone, department, password) VALUES( '$first_name', '$last_name','$name', '$email','$phone','$department', '$cryptic_pass')");
if($insert_user){
    header("location: all-students.php");
}

}




// LOGIN USER

if(isset($_POST['login_user'])){
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $user_exist = mysqli_query($connect, "SELECT * FROM users WHERE email = '$email'");


    // if user does not exist
    if(!mysqli_num_rows($user_exist)){
        exit("<p>User not found</p> <p><a href='register.php'>Register</a></p> <p><a href='index.php'>Go back</a></p>");        
    }
  
    $user_details = mysqli_fetch_assoc($user_exist);

    $cryptic_pass = md5($pass);

    if($cryptic_pass !== $user_details['password']){
        exit("<p>Incorrect Password</p><a href='index.php'>Go back</a>");
    }

    // creates a session array 
    $_SESSION["login"] = true;
    $_SESSION["id"] = $user_details['id'];

    
    header("Location: create.php");

    
}

  // if(!$user_exist){
    //     exit("<p>User not found</p><a href='register.php'>Register</a</p>");
  
    // }
?>



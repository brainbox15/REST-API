

<?php
require 'header.php';
?>

<?php
$id = $_GET['ID'];
$delete = mysqli_query($connect, "DELETE FROM registered WHERE ID = '$id'");

if($delete){
    header("Location: all-students.php");
}
?>



<?php
$id = $_GET['id'];
$con = mysqli_connect('localhost','root','','student_list');
$sql = "DELETE FROM student_information WHERE id=$id";
$result = mysqli_query($con, $sql);

header('location: index.php');
?>
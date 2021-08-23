<?php
$id = $_GET['id'];
$mysqli = mysqli_connect("localhost", "root", "", "php");
$sql = "DELETE FROM student WHERE id='$id' ";
$result = mysqli_query($mysqli, $sql);
if($result){
    header('Location:student_list.php');
}

?>
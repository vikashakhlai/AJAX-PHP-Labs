<?php
$name = $_POST['fname'];
$rno = $_POST['id'];
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$con = mysqli_connect("localhost","root","root");
$db= mysqli_select_db($con,"school");
$sql = "SELECT * from `students` where `name`='".$name."' AND `rno`=".$rno;
$result = mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
echo $row['address'];
?>
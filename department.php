<?php
$svr = "localhost";
$usr = "root";
$pas = "";
$dbnm = "flexloc";

$connectivity = mysqli_connect($svr, $usr, $pas, $dbnm);
//echo "Connection Succesful";

$DeptNme = $_POST['dept_namer'];
$DeptNum = $_POST['dept_numbr'];
$DeptTsk = $_POST['dept_tasks'];
//$DeptTskadd = $_POST['tasksadded'];

//inserting to Department table
$inserter = "INSERT INTO `department_table`(`Department No.`, `Department Name`,`Tasks`) VALUES ('$DeptNum', '$DeptNme', '$DeptTsk')";

mysqli_query($connectivity, $inserter);
?>
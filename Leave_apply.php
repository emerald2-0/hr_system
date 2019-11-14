<?php  
$server_name = "localhost";
$server_user = "root";
$server_pswd = "";
$databs_name = "flexloc";

$connectr = mysqli_connect($server_name, $server_user, $server_pswd, $databs_name);

$emp_name = $_SESSION['loggedin'];
$days_count = $_POST['No_of_days'];
$starter = $_POST['start_day'];
$Reportd = $_POST['end_day'];
$lvstatus = "Pending";

$insertinto = "INSERT INTO `leave_days_report`(`Employee_Name`,`No_of_Days`,`Start_Day`,`Report_Day`,`Status`) values ('$emp_name', '$days_count', '$starter', '$Reportd', '$lvstatus')";

$remainingdays = "SELECT * FROM employee_table WHERE `Emp Name`='$emp_name'";

//Connecting the other table
$table1 = mysqli_query($connectr, $remainingdays);
$numrows = mysqli_num_rows($table1);
if ($numrows>0) {
	# code...
	$update = "UPDATE `employee_table` SET `Leave Days`=`Leave Days` - '$days_count' WHERE `Emp Name`='$emp_name'";
	mysqli_query($connectr, $update);
}
mysqli_query($connectr,$insertinto);
echo "Leave application applied successfuly";
?>
<?php  
//session_start();
//The script is to register employee into database:
$server_name = "localhost";
$server_user = "root";
$server_pswd = "";
$databs_name = "flexloc";

$creat_conn = mysqli_connect($server_name, $server_user, $server_pswd, $databs_name);
//echo "Connection Successful";

//Adding Emp into database:
$Emp_name = $_POST['empname'];
$Emp_Dept = $_POST['emp_department'];
$Emp_pss = $_POST['emp_passwd'];
$Emp_number = $_POST['emp_no'];
$Emp_leaved = $_POST['emp_leave'];
$Emp_role = $_POST['emp_role'];


$add_emp = "INSERT INTO `employee_table`(`Employee No.`, `Department`, `Emp Name`, `Password`, `Role`,`Tasks`, `Dept No.`,`Leave Days`) VALUES ('$Emp_number', '$Emp_Dept', '$Emp_name', '$Emp_pss','$Emp_role','0', '2', '$Emp_leaved')";
//$add_emp = "INSERT INTO `employee_table`(`Employee No.`, `Department`, `Emp Name`, `Password`, `Tasks`, `Dept No.`,`Leave Days`) VALUES ('', 'ICT', 'Tested', 'My password','0', '2', '21')";

//Final addition:
mysqli_query($creat_conn,$add_emp);
header("Location:alert1.html");
?>
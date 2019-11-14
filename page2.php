<?php
//This is for Employee addition by admin
//FYI this is the only working php code:-)
//session_start();
//connecting database

$svname = "localhost";
$usname = "root";
$passwd = "";
$dbname = "flexloc";

//variable for connection mode
$conn = mysqli_connect($svname, $usname, $passwd, $dbname);
//Passed Variables
$usrnam = $_POST['uname'];
$passwd = $_POST['pss'];
//session_start();
//$_SESSION["logged_in"] = $_POST['uname'];
$_SESSION['loggedin'] = $usrnam;
//$_SESSION["logged_in"] = $usrnam;
//echo "Connection Success";
$find_emp = "SELECT * FROM `employee_table` WHERE `Emp Name`='$usrnam' AND `Password`='$passwd'";

    $result = mysqli_query($conn, $find_emp);
    if ($result) {
        # code...
        $found = mysqli_num_rows($result);
        if ($found>0) {
            # code...
            header('Location:emp view.php');
        }
        if ($found==0) {
            # code... 
            //unset($result);
            //statement on utton click
            //echo '<input type="button" onclick="alert(\'NOT AN EMPLOYEE!\')"/>';
            $script = file_get_contents('myscript.js');
            echo "<script>alert('Failure.');</script>";
        }
    }

?>
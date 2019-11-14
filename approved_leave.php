<?php  
require('connector.php');
$approved = "SELECT * FROM `leave_days_report` WHERE `Status`='Pending'";
if ($complete = mysqli_query($connected, $approved)) {
	# code...
	if (mysqli_num_rows($complete)>0) {
		# code...
		$changevalues = "UPDATE `leave_days_report` SET `Status`='Approved' WHERE `Status`='Pending'";
		mysqli_query($connected, $changevalues);
		echo "Approved Successfully";
	}
//alert("Approved Successfully"); </script>
}
?>
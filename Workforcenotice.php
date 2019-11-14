<?php 
//This script is for notices sent by workforce 
$svr = "localhost";
$usr = "root";
$pas = "";
$dbnm = "flexloc";

$connector = mysqli_connect($svr,$usr,$pas,$dbnm);

$noticesent = $_POST['notice_sent'];
$notic_sender = $_POST['noticesender'];

$notice_entered = "INSERT INTO `workforce_notice`(`Sender`, `Notice_Sent`) Values ('$notic_sender', '$noticesent')";
mysqli_query($connector,$notice_entered);
echo('<script language="Javascript">opener.window.location.reload(false); window.close();</script>');
?>
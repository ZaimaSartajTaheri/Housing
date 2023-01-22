<?php
session_start();
include("../includes/config.php");
$_SESSION['hlogin']=="";
date_default_timezone_set('Asia/Dhaka');
$ldate=date( 'd-m-Y h:i:s A', time () );
mysqli_query($con,"UPDATE holog  SET logout = '$ldate' WHERE hEmail = '".$_SESSION['hlogin']."' ORDER BY id DESC LIMIT 1");
session_unset();

?>
<script language="javascript">
document.location = "../index.php";
</script>
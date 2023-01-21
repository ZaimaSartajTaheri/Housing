<?php
session_start();
include("../includes/config.php");
$_SESSION['alogin']=="";
session_unset();


?>
<script language="javascript">
document.location = "../index.php";
</script>
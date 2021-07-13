<?php
unset($_SESSION["id"]);
$_SESSION = array();
setcookie(session_name(), "", time()-1, "/");
header("location: ../admin.php");
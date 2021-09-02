<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
	include_once("../config.php");
	include_once("../" . $userPath);
	session_start();
	if (isset($user[$_POST["user-id"]]) && $user[$_POST["user-id"]] == $_POST["password"]) {
		$_SESSION["id"] = $_POST["user-id"];
		header("location: ../admin.php");
	} else {
		header("location: ../admin.php");
	}
}
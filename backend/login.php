<?php
include_once("../config.php");
session_start();
if ($user[$_POST["user-id"]] == $_POST["password"]) {
	$_SESSION["id"] = $_POST["user-id"];
	header("location: ../admin.php");
} else {
	header("location: ../admin.php");
}
<?php
session_start();
$id = $_GET["id"];
$navbar = "";
if ($_SESSION["id"] == "") {
	$id = "login";
} else {
	if ($id == "") {
		$id = "fs";
	}
	$navbar = file_get_contents("page/navbar.php");
	$navbar = str_replace("[UserID]", $_SESSION["id"], $navbar);
	if ($id == "fs") {
		$navbar = str_replace("[FSActive]", " active", $navbar);
		$navbar = str_replace("[VersionActive]", "", $navbar);
	}
	if ($id == "version") {
		$navbar = str_replace("[FSActive]", "", $navbar);
		$navbar = str_replace("[VersionActive]", " active", $navbar);
	}
}
$output = file_get_contents("page/".$id.".php");
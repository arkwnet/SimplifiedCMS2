<?php
session_start();
$id = $_GET["id"];
$navbar = "";
if ($_SESSION["id"] == "") {
	$id = "login";
} else {
	$id = "fs";
	$navbar = file_get_contents("page/navbar.php");
	$navbar = str_replace("[UserID]", $_SESSION["id"], $navbar);
}
$output = file_get_contents("page/".$id.".php");
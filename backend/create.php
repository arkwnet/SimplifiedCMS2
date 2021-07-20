<?php
if (isset($_SERVER["HTTP_X_REQUESTED_WITH"]) && strtolower($_SERVER["HTTP_X_REQUESTED_WITH"]) == "xmlhttprequest" && $_SERVER["REQUEST_METHOD"] === "POST") {
	$file = $_POST["path"];
	if (!file_exists($file)) {
		if ($_GET["type"] == "file") {
			touch($file);
			chmod($file, 0666);
		} elseif ($_GET["type"] == "directory") {
			mkdir($file, 0777);
			chmod($file, 0777);
		}
	} else {
		echo("EXIST");
		exit();
	}
}
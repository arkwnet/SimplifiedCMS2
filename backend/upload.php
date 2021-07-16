<?php
if (isset($_SERVER["HTTP_X_REQUESTED_WITH"]) && strtolower($_SERVER["HTTP_X_REQUESTED_WITH"]) == "xmlhttprequest" && $_SERVER["REQUEST_METHOD"] === "POST") {
	$directory = urldecode($_GET["path"]);
	$directory = ".." . $directory;
	chmod($directory, 0666);
	$filePathTemp  = $_FILES["file"]["tmp_name"];
	$filePath = $directory . $_FILES["file"]["name"];
	$result = move_uploaded_file($filePathTemp, $filePath);
	if ($result === false) {
		echo "NG";
	}
}
<?php
$directory = urldecode($_GET["path"]);
$directory = ".." . $directory;
chmod($directory, 0666);
$filePathTemp  = $_FILES["file"]["tmp_name"];
$filePath = $directory . $_FILES["file"]["name"];
$result = move_uploaded_file($filePathTemp, $filePath);
if ($result === false) {
	echo "NG";
}
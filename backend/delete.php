<?php
if (isset($_SERVER["HTTP_X_REQUESTED_WITH"]) && strtolower($_SERVER["HTTP_X_REQUESTED_WITH"]) == "xmlhttprequest" && $_SERVER["REQUEST_METHOD"] === "POST") {
	$file = $_POST["path"];
	if ($_GET["type"] == "file") {
		unlink($file);
	} elseif ($_GET["type"] == "directory") {
		removeDirectory($file);
	}
}

function removeDirectory($path) {
	$list = scandir($path);
	$length = count($list);
	for ($i=0; $i < $length; $i++) {
		if ($list[$i] != "." && $list[$i] != "..") {
			if (is_dir($path . "/" . $list[$i])) {
				removeDirectory($path . "/" . $list[$i]);
			}else{
				unlink($path . "/" . $list[$i]);
			}
		}
	}
	rmdir($path);
}
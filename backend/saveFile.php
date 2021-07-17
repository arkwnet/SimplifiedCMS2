<?php
if (isset($_SERVER["HTTP_X_REQUESTED_WITH"]) && strtolower($_SERVER["HTTP_X_REQUESTED_WITH"]) == "xmlhttprequest" && $_SERVER["REQUEST_METHOD"] === "POST") {
	$file = fopen($_POST["path"], "wb");
	$data = $_POST["data"];
	if ($file) {
		if (flock($file, LOCK_EX)) {
			if (fwrite($file, $data) === FALSE) {
				echo "NG";
			}
			flock($file, LOCK_UN);
		}else{
			echo "NG";
		}
	}
	fclose($fp);
}
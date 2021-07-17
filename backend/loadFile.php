<?php
if (isset($_SERVER["HTTP_X_REQUESTED_WITH"]) && strtolower($_SERVER["HTTP_X_REQUESTED_WITH"]) == "xmlhttprequest" && $_SERVER["REQUEST_METHOD"] === "POST") {
	if ($_GET["mode"] == "online") {
		readfile($_POST["url"]);
	} elseif ($_GET["mode"] == "local") {
		echo file_get_contents($_POST["url"]);
	}
}
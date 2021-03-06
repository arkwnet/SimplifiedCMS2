<?php
if (isset($_SERVER["HTTP_X_REQUESTED_WITH"]) && strtolower($_SERVER["HTTP_X_REQUESTED_WITH"]) == "xmlhttprequest" && $_SERVER["REQUEST_METHOD"] === "POST") {
	include_once("excludeFileList.php");
	$fileList = glob("../" . $_POST["path"] . "*");
	echo file_get_contents("../cmsdata/tableHeader.html");
	echo "<tbody>";
	$i = 0;
	for ($i = 0; $i < 2; $i++) {
		for ($j = 0; $j < count($fileList); $j++) {
			$fileName = htmlspecialchars(basename($fileList[$j]));
			if (in_array($fileName, $excludeFileList) == false) {
				if ($i == 0 && is_file($fileList[$j]) == false) {
					echo "<tr>";
					echo createField("ディレクトリ");
					echo createFieldWithLink($fileName, "directoryLinkEvent('" . $fileName . "')");
					echo createField("");
					echo createFieldWithLink("削除", "deleteData('" . $fileName . "', 'directory')");
					echo "</tr>";
				}
				if ($i == 1 && is_file($fileList[$j]) == true) {
					echo "<tr>";
					echo createField("ファイル");
					echo createFieldWithLink($fileName, "loadFile('" . $fileName . "')");
					echo createField(filesize($fileList[$j]));
					echo createFieldWithLink("削除", "deleteData('" . $fileName . "', 'file')");
					echo "</tr>";
				}
			}
		}
	}
	echo "</tbody>";
}

function createField($str) {
	return "<td>" . $str . "</td>";
}

function createFieldWithLink($str, $link) {
	return createField("<a href=\"javascript:" . $link . "\">" . $str . "</a>");
}
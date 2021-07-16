function moveDirectory() {
	let inputPath = $("#input_path").val();
	if (inputPath.substr(0, 1) != "/") {
		inputPath = "/" + inputPath;
	}
	if (inputPath.substr(-1, 1) != "/") {
		inputPath = inputPath + "/";
	}
	$("#input_path").val(inputPath);
	getFileList(inputPath);
}

function moveUpDirectory() {
	let inputPath = $("#input_path").val();
	inputPathArray = inputPath.split("/");
	inputPath = "/";
	for (let i = 1; i < inputPathArray.length - 2; i++) {
		inputPath = inputPath + inputPathArray[i] + "/";
	}
	$("#input_path").val(inputPath);
	moveDirectory();
}

function moveRootDirectory() {
	$("#input_path").val("");
	moveDirectory();
}

function directoryLinkEvent(dir) {
	let inputPath = $("#input_path").val();
	inputPath = inputPath + dir + "/";
	$("#input_path").val(inputPath);
	moveDirectory();
}

function getFileList(path) {
	$("#file_list").html("読み込み中。しばらくお待ち下さい...")
	$.ajax({
		type: "POST",
		url: "backend/getFileList.php",
		data: {
			"path": path
		},
		cache: false,
		success: function(data, dataType){
			$("#file_list").html(data);
		},error: function(XMLHttpRequest, textStatus, errorThrown){
			// エラー処理
		}
	});
}
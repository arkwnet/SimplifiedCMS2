let dir = "";

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

function reloadDirectory() {
	getFileList($("#input_path").val());
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
	$("#file_list").html(loadMessage);
	dir = $("#input_path").val();
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
			alert(errorMessage);
		}
	});
}

function createFile() {
	$.ajax({
		type: "POST",
		url: "backend/create.php?type=file",
		data: {
			"path": ".." + dir + $("#new_name").val()
		},
		cache: false,
		success: function(data, dataType){
			reloadDirectory();
			if (data == "EXIST") {
				alert(existMessage);
			}
			$("#new_name").val("");
		},error: function(XMLHttpRequest, textStatus, errorThrown){
			alert(errorMessage);
		}
	});
}

function createDirectory() {
	$.ajax({
		type: "POST",
		url: "backend/create.php?type=directory",
		data: {
			"path": ".." + dir + $("#new_name").val()
		},
		cache: false,
		success: function(data, dataType){
			reloadDirectory();
			if (data == "EXIST") {
				alert(existMessage);
			}
			$("#new_name").val("");
		},error: function(XMLHttpRequest, textStatus, errorThrown){
			alert(errorMessage);
		}
	});
}
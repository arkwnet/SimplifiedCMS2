function loadFile(path) {
	$("#editor_box").val(loadMessage);
	const loadPath = "../" + dir.substr(1) + path;
	$.ajax({
		type: "POST",
		url: "backend/loadFile.php?mode=local",
		data: {
			"url": loadPath
		},
		cache: false,
		success: function(data, dataType){
			$("#editor_path").val(loadPath.substr(2));
			$("#editor_box").val(data);
		},error: function(XMLHttpRequest, textStatus, errorThrown){
			alert(errorMessage);
		}
	});
}

function loadOnlineFile() {
	$("#editor_box").val(loadMessage);
	$.ajax({
		type: "POST",
		url: "backend/loadOnlineFile.php?mode=online",
		data: {
			"url": $("#online_url").val()
		},
		cache: false,
		success: function(data, dataType){
			$("#editor_box").val(data);
		},error: function(XMLHttpRequest, textStatus, errorThrown){
			alert(errorMessage);
		}
	});
}

function saveFile() {
	const savePath = ".." + $("#editor_path").val();
	$.ajax({
		type: "POST",
		url: "backend/saveFile.php",
		data: {
			"path": savePath,
			"data": $("#editor_box").val()
		},
		cache: false,
		success: function(data, dataType){
			reloadDirectory();
			if (data == "NG") {
				alert(errorMessage);
			} else {
				alert("ファイルを保存しました。");
			}
		},error: function(XMLHttpRequest, textStatus, errorThrown){
			alert(errorMessage);
		}
	});
}

function crearEditor() {
	$("#editor_path").val("");
	$("#editor_box").val("");
}
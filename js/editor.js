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
	//
}
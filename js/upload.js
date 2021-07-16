function upload() {
	const formData = new FormData($("#upload").get(0));
	$("#file_name").prop("disabled", true);
	$("#file_list").html("アップロード中。しばらくお待ち下さい...")
	const path = encodeURIComponent($("#input_path").val());
	$.ajax({
		type: "POST",
		url: "backend/upload.php?path=" + path,
		data: formData,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "html"
	}).done(function(data, textStatus, jqXHR){
		$("#file_name").prop("disabled", false);
		reloadDirectory();
		if (data == "NG") {
			alert(errorMessage);
		} else {
			$("#file_name").val("");
		}
	}).fail(function(jqXHR, textStatus, errorThrown){
		$("#file_list").prop("disabled", false);
		reloadDirectory();
		alert(errorMessage);
	});
}
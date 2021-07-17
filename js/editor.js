function openFile(path) {
	const loadPath = dir.substr(1) + path;
	$("#editor_box").load(loadPath);
}
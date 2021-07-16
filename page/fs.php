<div id="fs" class="container-fluid">
	<div class="input-group fs-path">
		<span class="input-group-text">パス :</span>
		<input type="text" class="form-control" id="input_path" value="/">
		<button class="btn btn-outline-secondary" type="button" onclick="moveUpDirectory()">../</button>
		<button class="btn btn-outline-secondary" type="button" onclick="moveRootDirectory()">/</button>
		<button class="btn btn-outline-primary" type="button" onclick="moveDirectory()">移動</button>
	</div>
	<br>
	<p><b>ファイルをアップロード</b></p>
	<form id="upload">
		<div class="input-group">
			<input type="file" class="form-control" name="file" id="file_name">
			<button class="btn btn-outline-secondary" type="button" onclick="upload()">アップロード</button>
		</div>
	</form>
	<br>
	<table class="table" id="file_list">
	</table>
</div>
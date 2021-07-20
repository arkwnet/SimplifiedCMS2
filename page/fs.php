<div id="main">
	<div id="fs" class="container-fluid">
		<div class="input-group fs-path">
			<span class="input-group-text">パス :</span>
			<input type="text" class="form-control" id="input_path" value="/" placeholder="パス">
			<button class="btn btn-outline-secondary" type="button" onclick="moveUpDirectory()">../</button>
			<button class="btn btn-outline-secondary" type="button" onclick="moveRootDirectory()">/</button>
			<button class="btn btn-outline-primary" type="button" onclick="moveDirectory()">移動</button>
		</div>
		<div class="fs-heading">ファイルをアップロード</div>
		<form id="upload">
			<div class="input-group">
				<input type="file" class="form-control" name="file" id="file_name">
				<button class="btn btn-outline-secondary" type="button" onclick="upload()">アップロード</button>
			</div>
		</form>
		<div class="fs-heading">新規作成</div>
		<form id="create">
			<div class="input-group">
				<input type="text" class="form-control" name="file" id="new_name" placeholder="ファイルまたはフォルダ名">
				<button class="btn btn-outline-secondary" type="button" onclick="createData('file')">ファイル作成</button>
				<button class="btn btn-outline-secondary" type="button" onclick="createData('directory')">フォルダ作成</button>
			</div>
		</form>
		<br>
		<table class="table" id="file_list">
		</table>
	</div>

	<div id="editor" class="container-fluid">
		<div class="input-group fs-path">
			<span class="input-group-text">ファイルパス :</span>
			<input type="text" class="form-control" id="editor_path" placeholder="ファイルパス" disabled>
			<button class="btn btn-outline-primary" type="button" onclick="saveFile()">保存</button>
		</div>
		<div class="fs-heading">指定したURLからコピー :</div>
		<form id="upload">
			<div class="input-group">
				<input type="text" class="form-control" id="online_url" placeholder="URL">
				<button class="btn btn-outline-secondary" type="button" onclick="loadOnlineFile()">コピー</button>
			</div>
		</form>
		<br>
		<div class="input-group">
			<textarea class="form-control" id="editor_box"></textarea>
		</div>
	</div>
</div>
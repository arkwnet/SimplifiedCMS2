<div id="login" class="container-fluid">
	<h2>ログイン</h2><br>
	<form action="login.php" method="post">
		<label for="user-id" class="form-label">ユーザーID</label>
		<div class="input-group mb-3">
			<input type="text" class="form-control" id="user-id" name="user-id">
		</div>
		<label for="password" class="form-label">パスワード</label>
		<div class="input-group mb-3">
			<input type="password" class="form-control" id="password" name="password" aria-describedby="basic-addon3">
		</div><br>
		<input class="btn btn-outline-primary" type="submit" value="ログイン">
	</form>
</div>
<?php
	include_once("backend/main.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Simplified CMS 2</title>
		<meta charset="utf-8">
		<meta name="robots" content="noindex, nofollow">
		<link type="text/css" rel="stylesheet" href="page/css/bootstrap.min.css">
		<link type="text/css" rel="stylesheet" href="page/css/admin.css">
		<script type="text/javascript" src="page/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="page/js/jquery.js"></script>
		<script type="text/javascript" src="page/js/main.js"></script>
		<script type="text/javascript" src="page/js/directory.js"></script>
		<script type="text/javascript" src="page/js/upload.js"></script>
		<script type="text/javascript" src="page/js/editor.js"></script>
	</head>
	<body>
		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
			<div class="container-fluid">
				<a class="navbar-brand">Simplified CMS 2</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<?php echo $navbar; ?>
			</div>
		</nav>
		<?php echo $output; ?>
	</body>
</html>
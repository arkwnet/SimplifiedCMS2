<?php
	include_once("backend/main.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Simplified CMS 2</title>
		<meta charse="utf-8">
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
		<link type="text/css" rel="stylesheet" href="css/admin.css">
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript" src="js/directory.js"></script>
		<script type="text/javascript" src="js/upload.js"></script>
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
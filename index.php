<!DOCTYPE html>
<html>
<head><!-- CDN hosted by Cachefly -->
	<script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
	<script>
	tinymce.init({
		selector:'textarea', 
		plugins: "table print preview fullpage fullscreen insertdatetime lists",
    	tools: "inserttable print code preview fullpage fullscreen insertdatetime"
    });
    </script>
	<title>Corpo Docs</title>
</head>
<body>
	<form action="index.php" method="post">
		<input type="submit">
		<textarea name="documento"><?php if (isset($_POST['documento']) and !empty($_POST['documento'])): ?>
		<?php echo $_POST['documento'] ?>
	<?php endif ?></textarea>
	</form>
	<?php if (isset($_POST['documento']) and !empty($_POST['documento'])): ?>
		<?php echo $_POST['documento'] ?>
	<?php endif ?>
</body>
</html>
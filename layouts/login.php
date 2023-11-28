<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Suendri">
	<title>Pemrograman Berbasis Web Lanjutan | Project11</title>
</head>

<body>
	<main>
		<?php
		require_once ROOT . "app/views/" . $view . ".php";
		session_destroy();
		?>
	</main>
</body>

</html>
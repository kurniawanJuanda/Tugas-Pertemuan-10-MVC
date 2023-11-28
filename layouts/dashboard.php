<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Suendri">

	<title>Sistem Informasi PLN | PBWL Project10</title>
	<link rel="stylesheet" href="<?php echo AST; ?>/datatables/datatables.min.css">
	<link rel="stylesheet" href="<?php echo AST; ?>/css/style.css">


</head>

<body>

	<aside>

		<header>
			<img src="<?php echo AST; ?>/img/b.png" class="brand">
			<div class="user">
				<?php $_SESSION['login']; ?>
			</div>
		</header>

		<nav>
			<ul>
				<li>
					<a href="<?php echo URL; ?>/dashboard">
						<img class="icon" src="<?php echo AST; ?>/img/a.png" alt=""> DASHBOARD
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/users">
						<img class="icon" src="<?php echo AST; ?>/img/a.png" alt=""> USER
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/golongan">
						<img class="icon" src="<?php echo AST; ?>/img/a.png" alt=""> GOLONGAN
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/pelanggan">
						<img class="icon" src="<?php echo AST; ?>/img/a.png" alt=""> PELANGGAN
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/dashboard/logout">
						<img class="icon" src="<?php echo AST; ?>/img/a.png" alt=""> LOGUT
					</a>
				</li>
			</ul>
		</nav>

	</aside>

	<main>
		<article>
			<?php require_once ROOT . "app/views/" . $view . ".php"; ?>
		</article>

		<footer>
			Copyright &copy; 2023 -
			<?php echo date('Y'); ?>. Designed by Juanda
		</footer>
	</main>

	<script src="<?php echo AST; ?>/datatables/datatables.min.js"></script>
	<script>
		new DataTable('#dtb', {
			info: false,
			ordering: true,
			paging: true
		});
	</script>

</body>

</html>
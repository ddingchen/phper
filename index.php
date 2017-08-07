<html>
	<header>
		<title>PHP</title>
	</header>
	<body>
		<h1>Hello, <?php echo $_GET['greet'] ?></h1>
		<h1>Hello, <?= $_GET['greet'] ?></h1>
		<h1>Hello, <?= htmlspecialchars($_GET['greet']) ?></h1>
	</body>
</html>

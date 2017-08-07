<html>
	<header>
		<title>PHP</title>
	</header>
	<body>
		<h2>TODO LIST:</h2>
		<ul>
			<?php foreach($tasks as $task): ?>
			<li><?= $task ?></li>
			<?php endforeach; ?>
		</ul>
	</body>
</html>

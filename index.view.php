<html>
	<header>
		<title>PHP</title>
	</header>
	<body>
		<h2>TODO LIST:</h2>
		<ul>
			<?php foreach($tasks as $task): ?>
			<li>
				<?php if($task['completed']): ?>
					<del><?= $task['description'] ?></del>
				<?php else: ?>
					<?= $task['description'] ?>
				<?php endif; ?>
			</li>
			<?php endforeach; ?>
		</ul>
	</body>
</html>

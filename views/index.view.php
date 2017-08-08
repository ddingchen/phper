<html>
	<header>
		<title>PHP</title>
	</header>
	<body>
		<ul>
			<li><a href="/">首页</a></li>
			<li><a href="/create">添加</a></li>
		</ul>
		<h2>待办事项：</h2>
		<ul>
			<?php foreach($tasks as $task): ?>
			<li>
				<?php if($task->completed): ?>
					<del><?= $task->description ?></del>
				<?php else: ?>
					<?= $task->description ?>
				<?php endif; ?>
			</li>
			<?php endforeach; ?>
		</ul>
	</body>
</html>

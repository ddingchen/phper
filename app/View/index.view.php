<?php require('partials/header.view.php') ?>

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

<?php require('partials/footer.view.php') ?>


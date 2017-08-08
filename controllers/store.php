<?php 

$db->insert('tasks', [
	'description' => $_REQUEST['description']
]);

header('Location: /');
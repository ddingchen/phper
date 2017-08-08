<?php 

App::get('database')->insert('tasks', [
	'description' => $_REQUEST['description']
]);

header('Location: /');
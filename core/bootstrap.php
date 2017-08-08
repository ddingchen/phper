<?php 

use Foundation\App;
use Foundation\Database\QueryBuilder;
use Foundation\Database\Connection;

App::bind('config', require('config.php'));

App::bind('database', new QueryBuilder(
	Connection::make(App::get('config')['database'])
));

function view($name, $data = [])
{
	extract($data);

	require "app/View/{$name}.view.php";
}

function redirect($path)
{
	$path = trim($path, '/');
	header("Location: /{$path}");
}
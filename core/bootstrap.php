<?php 

$config = require 'config.php';
require 'vendor/autoload.php';

$router = Router::load('routes.php');

return new QueryBuilder(
	Connection::make($config['database'])
);
<?php 

$config = require 'config.php';
require 'functions.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'Router.php';

$router = Router::load('routes.php');

return new QueryBuilder(
	Connection::make($config['database'])
);
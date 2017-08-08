<?php 

$config = require 'config.php';
require 'vendor/autoload.php';

return new QueryBuilder(
	Connection::make($config['database'])
);
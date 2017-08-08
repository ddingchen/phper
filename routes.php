<?php 

$route->get('', 'controllers/list.php');
$route->get('create', 'controllers/create.php');
$route->post('create', 'controllers/store.php');
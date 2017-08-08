<?php 

$route->get('', 'TaskController@index');
$route->get('create', 'TaskController@create');
$route->post('create', 'TaskController@store');
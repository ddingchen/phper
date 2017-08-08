<?php 

require 'Task.php';

$tasks = $db->selectAll('tasks', 'Task');
require 'index.view.php';

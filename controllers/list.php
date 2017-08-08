<?php 

require 'models/Task.php';

$tasks = $db->selectAll('tasks', 'Task');
require 'views/index.view.php';

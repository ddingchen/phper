<?php

require 'Task.php';
$db = require 'bootstrap.php';


$tasks = $db->selectAll('tasks', 'Task');
require 'index.view.php';

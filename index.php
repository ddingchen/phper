<?php

require 'Task.php';
$db = require 'bootstrap.php';


$tasks = $db->selectAll('select * from tasks', 'Task');
require 'index.view.php';

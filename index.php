<?php

$db = require 'core/bootstrap.php';

require Router::load('routes.php')
	->direct();

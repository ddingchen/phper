<?php

require 'functions.php';

try {
	$pdo = new PDO('mysql:host=127.0.0.1;dbname=phper', 'root');
} catch (PDOException $e) {
	die('不能连接到服务器！');
}

$query = $pdo->prepare('select * from tasks');
$query->execute();
$tasks = $query->fetchAll();

require 'index.view.php';

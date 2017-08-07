<?php

require 'functions.php';
require 'Task.php';

try {
	$pdo = new PDO('mysql:host=127.0.0.1;dbname=phper', 'root');
} catch (PDOException $e) {
	die('不能连接到服务器！');
}

$query = $pdo->prepare('select * from tasks');
$query->execute();
$tasks = $query->fetchAll(PDO::FETCH_CLASS, 'Task');
// $query->fetchAll(PDO::FETCH_OBJ);
// 如果不指定类对象，则会默认使用stdClass来呈现数据行

require 'index.view.php';

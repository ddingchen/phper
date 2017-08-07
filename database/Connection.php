<?php 

class Connection
{
	public static function make()
	{
		try {
			return new PDO('mysql:host=127.0.0.1;dbname=phper', 'root');
		} catch (PDOException $e) {
			die('不能连接到服务器！');
		}
	}
}
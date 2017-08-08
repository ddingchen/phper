<?php 

namespace Foundation\Database;

class Connection
{
	public static function make($config)
	{
		try {
			return new \PDO(
				$config['connection'] . ';dbname=' . $config['dbname'], 
				$config['username'],
				$config['password'],
				$config['options']
			);
		} catch (\PDOException $e) {
			die('不能连接到服务器！');
		}
	}
}
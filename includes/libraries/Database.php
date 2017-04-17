<?php

class Database {
	private static $dbName = 'php-crud';
	private static $dbHost = 'localhost';
	private static $dbUsername = 'admin';
	private static $dbPassword = 'admin';

	private static $cont = null;

	public function __construct() {
		die('Init function is not allowed');
	}

	public static function connect() {
		// one connection through whole application
		if (null == self::$cont) {
			try {
				self::$cont = new PDO("mysql:host=" . self::$dbHost . ";" . "dbname=" . self::$dbName, self::$dbUsername, self::$dbPassword);
			} catch(PDOException $e) {
				die($e->getMessage());
			}
		}

		return self::$cont;
	}

	public static function disconnect() {
		self::$cont = null;
	}
}
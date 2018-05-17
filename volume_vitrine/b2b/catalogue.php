<?php
class Database
				{
					private static $dbHost = 'localhost';
					private static $dbName = "eleve";
					private static $dbUser = "nicolas";
					private static $dbPswd = "motdepasse";
				
					private static $connection = null;
				
				public static function connect()
				{
				try
				{
					self::$connection = new PDO('mysql:host='.self::$dbHost.';dbname='.self::$dbName,self::$dbUser,self::$dbPswd);
					self::$connection->exec('SET NAMES utf8');
				}
				catch(Exception $e)
				{
					die($e->getMessage());
				}
				return self::$connection;
				}
				public static function disconnect()
				{
				self::$connection=null;
				}
				}
?>

<?php 

    //conexão mysql
	class Db{
		public static $pdo;
		public static function connect(){
			if(self::$pdo == null){
				self::$pdo = new PDO("mysql:host=localhost;dbname=teste;user=root;password=");
			}
			return self::$pdo;
		}
	}

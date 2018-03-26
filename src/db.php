<?php
	require_once("entity.php");

	class db {
		public $connection;
		#examples
		#public $users;
		#public $clients;
		
		function __construct() {
			require_once("config.php");
			$databaseServer = $config["server"];
			$database = $config["databaseName"];
			$databaseUser = $config["username"];
			$databasePassword = $config["password"];
			$this->connection = new mysqli($databaseServer, $databaseUser, $databasePassword, $database);
			#examples
			#$this->users = new entity("users", "user", $this->connection);
			#$this->clients = new entity("clients", "client", $this->connection);
		}
	}
	
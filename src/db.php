<?php
	require_once("entity.php");
	class db {
		public $connection;
		public $users;
		public $clients;
		
		function __construct() {
			$databaseServer = "127.0.0.1";
			$database = "skypushdev";
			$databaseUser = "skypush";
			$databasePassword = "skypush";
			$this->connection = new mysqli($databaseServer, $databaseUser, $databasePassword, $database);
			$this->users = new entity("users", "user", $this->connection);
			$this->clients = new entity("clients", "client", $this->connection);
		}
	}
	
<?php
	class client {
		public $id;
		public $token;
		public $createdOn;
		public $lastAccessedOn;
		
		function __construct() {
			$this->createdOn = date("Y-m-d H:i:s");
		}
	}
<?php
	class user {
		public $id;
		public $email;
		public $password;
		public $loginTries;
		public $isDisabled;
		public $createdOn;
		public $lastAccessedOn;
		
		function __construct() {
			$this->loginTries = 0;
			$this->isDisabled = 0;
			$this->createdOn = date("Y-m-d H:i:s");
		}
	}
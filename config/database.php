<?php

	class DBConnectionString {

		private $shost = "localhost";
		private $dbname = "dbmain";
		private $username = "root";
		private $password = "";

		public $dbcnn;

		public function PDOConnection() {

			$this->dbcnn = null;

			try {
				$this->conn = new PDO("mysql:host=" . $this->shost . ";dbname=" . $this->dbname, $this->username, $this->password);
				$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch(PDOException $exception) {
				echo "Database Connection error: " . $exception->getMessage();
			}

			return $this->dbcnn;

		}

	}
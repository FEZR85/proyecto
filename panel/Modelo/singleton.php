<?php

class Conexion {
	private $_connection;
	private static $_instance; //The single instance
	private $_host;
	private $_username;
	private $_password;
	private $_database;
	/*
	Get an instance of the Database
	@return Instance
	*/
	public static function getInstance() {
		if(!self::$_instance) { // If no instance then make one
			self::$_instance = new self();
		}
		return self::$_instance;
	}
	// Constructor
	function __construct() {
		require('datos_conexion.inc');
		$this->_host = $servidor;
		$this->_username = $usuario;
		$this->_password = $contrasena;
		$this->_database = $nombreBase;


		$this->_connection = new mysqli($this->_host, $this->_username,
			$this->_password, $this->_database);

		// Error handling
		if(mysqli_connect_error()) {
			trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(),
				 E_USER_ERROR);
		}
	}
	// Magic method clone is empty to prevent duplication of connection
	private function __clone() { }
	// Get mysqli connection
	public function getConnection() {
		return $this->_connection;
	}
}
?>

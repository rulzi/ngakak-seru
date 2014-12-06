<?php

namespace NgakakSeru\Database;

class Connection
{

	private $engine;
    private $host;
    private $database;
    private $user;
    private $pass;

	public function getConnection()
	{
		
		$dns = $this->engine.':dbname='.$this->database.";host=".$this->host;
		$user = $this->user;
		$password = $this->pass;

		$pdo = null;
		try {
			$pdo = new \PDO($dns, $user, $password);
			$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			echo 'Connection failed: ' . $e->getMessage();
		}
		
		return $pdo;
	}

	public function getEngine($engine){
		$this->engine = $engine;
	}
	public function getHost($host){
		$this->host = $host;
	}
	public function getDatabase($database){
		$this->database = $database;
	}
	public function getUser($user){
		$this->user = $user;
	}
	public function getPassword($pass){
		$this->pass = $pass;
	}
}

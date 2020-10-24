<?php
 include 'data.php';
class Database
{
    protected $_db;
    static $_instance;
    private function __construct() {
		try{
        $this->_db = new PDO('mysql:host=localhost;dbname=ktabe;charset=utf8mb4', 'root', '0f8ee243d9de8b17b4e51a25a928935198f074a2e5766eb2', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
		}catch(PDOException $e){
			$errorId = 6;
			require 'error.php';
			 exit;
		}
    }
    private function __clone(){}
    public static function getInstance() {
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
	public function __call ( $method, $args ) {
		if ( is_callable(array($this->_db, $method)) ) {
			return call_user_func_array(array($this->_db, $method), $args);
		}
		else {
			throw new BadMethodCallException('Undefined method Database::' . $method);
		}
	}
	public static function run($sql) {
			return parent::getInstance()->query($sql);
	}
}
?>

<?php
	session_start();
	$con=mysqli_connect("localhost","artempa6_12","artempa6_12","Cyhrw4%2");
	define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/php/admin/');
	define('SITE_PATH','http://localhost/admin-panel/');
	define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
	define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');
class PdoConnect {

	private const HOST = 'localhost';
	private const DB = 'artempa6_12';
	private const USER = 'artempa6_12';
	private const PASS = 'Cyhrw4%2';
	private const CHARSET = 'utf8';

	protected static $_instance;

	protected $DSN;
	protected $OPD;
	public $PDO;

	private function __construct() {
		
		$this->DSN = "mysql:host=" . self::HOST . ";dbname=" . self::DB . ";charset=" . self::CHARSET;

		$this->OPD = array(
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
			PDO::ATTR_EMULATE_PREPARES => false,
		);

		$this->PDO = new PDO($this->DSN, self::USER, self::PASS, $this->OPD);
	}

	public static function getInstance() {

		if (self::$_instance === null)
			self::$_instance = new self;

		return self::$_instance;
	}

	private function __clone() {}
	private function __wakeup() {}
}
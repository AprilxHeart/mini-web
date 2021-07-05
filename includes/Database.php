<?php
class Database
{
    private $dbServer = 'sql6.freesqldatabase.com';
    private $dbUser = 'sql6422234';
    private $dbPassword = 'QRLTDj9Ymk';
    private $dbName = 'sql6422234';
    protected $conn;

    public function __construct()
    {
        try {
            $dsn = "mysql:host={$this->dbServer}; dbname={$this->dbName}; charset=utf8";
            $options = array(PDO::ATTR_PERSISTENT);
            $this->conn = new PDO($dsn, $this->dbUser, $this->dbPassword, $options);
        } catch (PDOException $e) {
            echo "Connection Error: " . $e->getMessage();
        }

    }
}

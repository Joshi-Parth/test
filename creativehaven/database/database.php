<?php

class Database {
    private static $db;
    private $conn;

    private function __construct() {

        $url = "mysql://k7s5awqd77n6azmg:k1m68lag5a61x4k0@ro2padgkirvcf55m.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/kbosidshoupyzbp8";

        $dbparts = parse_url($url);

        $hostname = $dbparts['host'];
        $username = $dbparts['user'];
        $password = $dbparts['pass'];
        $database = ltrim($dbparts['path'],'/');

        $this->conn = new mysqli($hostname, $username, $password, $database);
        
        if ($this->conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        // echo "Connection was successfully established!";
    }

    function __destruct() {
        $this->conn->close();
    }

    public static function getDBConnection() {
        if (self::$db == null) {
            self::$db = new Database();
        }
        return self::$db->conn;
    }
}

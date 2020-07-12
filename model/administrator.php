<?php
require_once __DIR__.'/../config/database.php';

class Administrator {

    /* table fields */
    public $id;
    public $name;
    public $surname;
    public $username;
    public $email;
    public $password;

    /* set default value with constructor */
    function __construct()
    {
        $this->id = 0;
        $this->name = "";
        $this->surname = "";
        $this->username = "";
        $this->email = "";
        $this->password = "";
    }

    public function connect()
    {
        $db = Database::getInstance();
        return $db;
    }

    /* login check */
    public function checkLogin($values) {
        $controller = $this->connect();
        $sql = "SELECT id, username, password FROM admin WHERE username = ? OR email = ? ;";
        $type = 'ss';
        $result = $controller->arrayParamRecord($sql, $values, $type);
        return $result;
    }

}
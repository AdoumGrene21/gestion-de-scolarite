<?php

namespace Database;

use PDO;

class DBConnection
{

    private $bdname;
    private $host;
    private $username;
    private $password;
    private $pdo;

    public function __construct(string $bdname, string $host, string $username, string $password)
    {
        $this->bdname = $bdname;
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
    }

    public function getPDO(): PDO
    {
        return $this->pdo ??   $this->pdo =  new PDO(
            "mysql:dbname={$this->bdname}; host={$this->host}",
            $this->username,
            $this->password,
            array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET CHARACTER SET UTF8'
            )
        );
    }
}

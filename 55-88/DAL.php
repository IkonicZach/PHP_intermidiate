<?php
abstract class DAL{
    protected $db;
    protected $host;
    protected $name;
    protected $user;
    protected $password;

    public function __construct($host, $name, $user, $pass)
    {
        $this->host = $host;
        $this->name = $name;
        $this->user = $user;
        $this->password = $pass;
    }
    abstract public function connect();

    abstract public function disconnect();
    
    abstract public function fetchData($table, $modifier);
}

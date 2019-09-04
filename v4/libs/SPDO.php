<?php

class SPDO extends \PDO
{
    private static $instance = null;

    public function __construct()
    {
        $config = SConfig::singleton();
        $dsn = $config->get('db_dsn');
        $username = $config->get('db_username');
        $password = $config->get('db_password');

        parent::__construct($dsn, $username, $password);
    }

    public static function singleton()
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

}
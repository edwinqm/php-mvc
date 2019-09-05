<?php

namespace app\v5\libs;

class SConfig
{
    private $vars;
    private static $instance;

    public function __construct()
    {
        $this->vars = [];
    }

    public function set($name, $value)
    {
        if (!isset($this->vars[$name])) {
            $this->vars[$name] = $value;
        }
    }

    public function get($name)
    {
        if (isset($this->vars[$name])) {
            return $this->vars[$name];
        }
    }

    public static function singleton()
    {
        if (!isset(self::$instance)) {
            $c = __CLASS__;
            self::$instance = new $c;
        }
        return self::$instance;
    }
}
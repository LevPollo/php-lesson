<?php

class Config {
    private static $instance;
    private array $applicationCfg; // я не понял нужен статик тут или нет

    private function __construct() {
        $this->applicationCfg = [
            "volume" => "70",
            "color" => "252, 186, 3",
            "memory" => "2.3",
            "id" => "134.17.86.79",
            "online" => "4",
            "idk" => "0",
        ];
    }
    // проверка на наличие созданного класса
    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new Config();
        }
        return self::$instance;
    }
    //гетер
    public function getCfg($key)
    {
        if (isset($this->applicationCfg[$key]))
        {
            return $this->applicationCfg[$key];
        }
        return null;
    }
    //сетер
    public function setCfg($key, $value) {
        $this->applicationCfg[$key] = $value;
    }
}

$config = Config::getInstance();
print_r($config->getCfg("volume"));
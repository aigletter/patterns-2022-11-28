<?php

namespace patterns\Singleton;

class Db
{
    protected $connection;

    private static $instance;

    private function __construct()
    {
        $this->connection = $this->connect();
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function query()
    {
        // TODO
        return [];
    }

    public function get()
    {
        return [];
    }

    protected function connect()
    {
        // Устанавливает соединение с БД
        return 'Connected';
    }
}
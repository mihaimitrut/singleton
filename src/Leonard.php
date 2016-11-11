<?php

class Leonard
{
    /**
     * @var Singleton $instance
     */
    private static $instance;

    /**
     * Protected constructor to prevent new instance
     *
     * Leonard constructor.
     */
    protected function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new self;
        }

        return self::$instance;
    }
}
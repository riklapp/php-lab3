<?php

namespace App;

class MagicClass
{
    private $data = [];

    public function __construct()
    {
        echo "Вызван метод __construct()\n";
    }

    public function __destruct()
    {
        echo "Вызван метод __destruct()\n";
    }

    public function __get($name)
    {
        echo "Вызван метод __get() с параметром: {$name}\n";
        return $this->data[$name] ?? null;
    }

    public function __set($name, $value)
    {
        echo "Вызван метод __set() с параметрами: {$name} = {$value}\n";
        $this->data[$name] = $value;
    }

    public function __isset($name)
    {
        echo "Вызван метод __isset() с параметром: {$name}\n";
        return isset($this->data[$name]);
    }

    public function __unset($name)
    {
        echo "Вызван метод __unset() с параметром: {$name}\n";
        unset($this->data[$name]);
    }

    public function __call($name, $arguments)
    {
        echo "Вызван метод __call() с параметрами: метод={$name}, аргументы=" . 
             implode(', ', $arguments) . "\n";
    }

    public static function __callStatic($name, $arguments)
    {
        echo "Вызван метод __callStatic() с параметрами: метод={$name}, аргументы=" . 
             implode(', ', $arguments) . "\n";
    }

    public function __sleep()
    {
        echo "Вызван метод __sleep()\n";
        return ['data'];
    }

    public function __wakeup()
    {
        echo "Вызван метод __wakeup()\n";
    }

    public function __toString()
    {
        echo "Вызван метод __toString()\n";
        return "Это объект MagicClass";
    }

    public function __invoke($param)
    {
        echo "Вызван метод __invoke() с параметром: {$param}\n";
    }

    public function __clone()
    {
        echo "Вызван метод __clone()\n";
    }

    public function __debugInfo()
    {
        echo "Вызван метод __debugInfo()\n";
        return ['data' => $this->data, 'info' => 'Debug info'];
    }
}

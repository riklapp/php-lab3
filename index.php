<?php
spl_autoload_register(function ($className) {
    $baseDir = __DIR__ . '/src/';
    $file = $baseDir . str_replace('\\', '/', $className) . '.php';
    
    if (file_exists($file)) {
        require $file;
    }
});

echo "=== Лабораторная работа №3 по PHP ===\n\n";
require 'vendor/autoload.php';

echo "=== Демонстрация магических методов ===\n\n";

// 1. __construct
echo "1. Создание объекта:\n";
$obj = new App\MagicClass();
echo "\n";

// 2. __set
echo "2. Установка свойства:\n";
$obj->magicProperty = 'test value';
echo "\n";

// 3. __get
echo "3. Получение свойства:\n";
$value = $obj->magicProperty;
echo "\n";

// 4. __isset
echo "4. Проверка свойства:\n";
$exists = isset($obj->magicProperty);
echo "\n";

// 5. __unset
echo "5. Удаление свойства:\n";
unset($obj->magicProperty);
echo "\n";

// 6. __call
echo "6. Вызов несуществующего метода:\n";
$obj->magicMethod('param1', 'param2');
echo "\n";

// 7. __callStatic
echo "7. Вызов несуществующего статического метода:\n";
App\MagicClass::staticMagicMethod('static param');
echo "\n";

// 8. __toString
echo "8. Преобразование в строку:\n";
echo $obj . "\n";
echo "\n";

// 9. __invoke
echo "9. Вызов объекта как функции:\n";
$obj('invoke parameter');
echo "\n";

// 10. __clone
echo "10. Клонирование объекта:\n";
$clone = clone $obj;
echo "\n";

// 11. __debugInfo
echo "11. Отладочная информация:\n";
var_dump($obj);
echo "\n";

// 12. __sleep и __wakeup (сериализация)
echo "12. Сериализация:\n";
$serialized = serialize($obj);
$unserialized = unserialize($serialized);
echo "\n";

echo "=== Конец демонстрации ===\n";

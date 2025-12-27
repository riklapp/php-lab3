<?php

require 'vendor/autoload.php';

echo "=== Лабораторная работа №3 по PHP ===\n\n";

echo "=== Часть 1: Демонстрация магических методов ===\n\n";

// Демонстрация магических методов
$obj = new App\MagicClass();

// __set
$obj->magicProperty = 'test value';

// __get
$value = $obj->magicProperty;

// __isset
$exists = isset($obj->magicProperty);

// __unset
unset($obj->magicProperty);

// __call
$obj->magicMethod('param1', 'param2');

// __callStatic
App\MagicClass::staticMagicMethod('static param');

// __toString
echo $obj . "\n";

// __invoke
$obj('invoke parameter');

// __clone
$clone = clone $obj;

// __debugInfo
var_dump($obj);

// __sleep и __wakeup
$serialized = serialize($obj);
$unserialized = unserialize($serialized);

echo "\n=== Часть 2: Геометрические классы ===\n\n";

// a. Точка с произвольными координатами T1
$T1 = new App\Point(3, 4);
echo "a. Создана точка T1: {$T1}\n";

// b. Произвольный вектор V1
$V1 = new App\Vector(2, 3);
echo "b. Создан вектор V1: {$V1}\n";

// c. Нулевой вектор V2
$V2 = new App\Vector(0, 0);
echo "c. Создан нулевой вектор V2: {$V2}\n";

// d. Вектор V3, перпендикулярный V1
$V3 = App\Vector::createPerpendicular($V1);
echo "d. Создан вектор V3 (перпендикулярный V1): {$V3}\n\n";

// 4. Находим и печатаем длину каждого вектора
echo "4. Длины векторов:\n";
echo "   Длина V1: " . number_format($V1->length(), 2) . "\n";
echo "   Длина V2: " . number_format($V2->length(), 2) . "\n";
echo "   Длина V3: " . number_format($V3->length(), 2) . "\n\n";

// 5. Проверяем что вектор V3 и V1 перпендикулярны
echo "5. Проверка перпендикулярности:\n";
if ($V3->isPerpendicularTo($V1)) {
    echo "   ✓ Вектор V3 перпендикулярен V1\n";
} else {
    echo "   ✗ Вектор V3 НЕ перпендикулярен V1\n";
}

// Проверка нулевого вектора
echo "   V2 является нулевым вектором: " . ($V2->isZero() ? 'Да' : 'Нет') . "\n\n";

// 6. Переносим точку T1 на вектор V1
echo "6. Перенос точки T1 на вектор V1:\n";
echo "   До переноса: {$T1}\n";
$T1->moveByVector($V1);
echo "   После переноса: {$T1}\n\n";

// Дополнительно: демонстрация перемещения по осям
echo "7. Дополнительно: перемещение точки по осям:\n";
$point2 = new App\Point(1, 1);
echo "   Исходная точка: {$point2}\n";
$point2->moveX(5);
echo "   После moveX(5): {$point2}\n";
$point2->moveY(-3);
echo "   После moveY(-3): {$point2}\n\n";

echo "=== Лабораторная работа выполнена! ===\n";

// Вызов деструкторов
unset($obj);
unset($clone);
unset($unserialized);

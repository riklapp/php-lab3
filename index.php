<?php
require 'vendor/autoload.php';
use App\Point;
use App\Vector;

// Создаем объекты
$T1 = new Point(3, 4);
$V1 = new Vector(3, 4);
$V2 = new Vector(0, 0);
$V3 = $V1->getPerpendicular();

echo "Точка T1: {$T1}<br>";
echo "Вектор V1: {$V1}<br>";
echo "Вектор V2: {$V2}<br>";
echo "Вектор V3: {$V3}<br><br>";

echo "Длины векторов:<br>";
echo "V1: " . number_format($V1->length(), 2) . "<br>";
echo "V2: " . number_format($V2->length(), 2) . "<br>";
echo "V3: " . number_format($V3->length(), 2) . "<br><br>";

echo "Перпендикулярность V1 и V3: " . 
    ($V1->isPerpendicularTo($V3) ? "ДА" : "НЕТ") . "<br><br>";

echo "Перенос точки T1 на вектор V1:<br>";
echo "Было: {$T1}<br>";
$T1->move($V1->getX(), $V1->getY());
echo "Стало: {$T1}<br>";




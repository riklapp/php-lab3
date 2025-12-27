<?php

namespace App;

class Vector
{
    private float $x;
    private float $y;

    public function __construct(float $x = 0, float $y = 0)
    {
        $this->x = $x;
        $this->y = $y;
    }

    // Длина вектора
    public function length(): float
    {
        return sqrt($this->x * $this->x + $this->y * $this->y);
    }

    // Проверка на нулевой вектор
    public function isZero(): bool
    {
        return $this->x == 0 && $this->y == 0;
    }

    // Проверка на перпендикулярность другому вектору
    public function isPerpendicularTo(Vector $other): bool
    {
        // Два вектора перпендикулярны, если их скалярное произведение равно 0
        $dotProduct = $this->x * $other->getX() + $this->y * $other->getY();
        return abs($dotProduct) < 0.0001; // Учет погрешности вычислений
    }

    public function getX(): float
    {
        return $this->x;
    }

    public function getY(): float
    {
        return $this->y;
    }

    // Создание перпендикулярного вектора
    public static function createPerpendicular(Vector $vector): Vector
    {
        // Для вектора (x, y) перпендикулярным будет (-y, x)
        return new Vector(-$vector->getY(), $vector->getX());
    }

    public function __toString(): string
    {
        return sprintf("Vector(%.2f, %.2f)", $this->x, $this->y);
    }
}

<?php

namespace App;

class Point
{
    private float $x;
    private float $y;

    public function __construct(float $x = 0, float $y = 0)
    {
        $this->x = $x;
        $this->y = $y;
    }

    // Перенос точки по оси X
    public function moveX(float $distance): void
    {
        $this->x += $distance;
    }

    // Перенос точки по оси Y
    public function moveY(float $distance): void
    {
        $this->y += $distance;
    }

    // Перенос точки на вектор
    public function moveByVector(Vector $vector): void
    {
        $this->x += $vector->getX();
        $this->y += $vector->getY();
    }

    public function getX(): float
    {
        return $this->x;
    }

    public function getY(): float
    {
        return $this->y;
    }

    public function __toString(): string
    {
        return sprintf("Point(%.2f, %.2f)", $this->x, $this->y);
    }
}

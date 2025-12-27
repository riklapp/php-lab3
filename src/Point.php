<?php
namespace App;

class Point {
    private $x;
    private $y;

    public function __construct(float $x = 0, float $y = 0) {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX(): float {
        return $this->x;
    }

    public function getY(): float {
        return $this->y;
    }

    public function move(float $deltaX, float $deltaY): void {
        $this->x += $deltaX;
        $this->y += $deltaY;
    }

    public function __toString(): string {
        return "Point({$this->x}, {$this->y})";
    }
}
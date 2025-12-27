<?php
namespace App;

class Vector {
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

    public function length(): float {
        return sqrt($this->x * $this->x + $this->y * $this->y);
    }

    public function isZero(): bool {
        return $this->x == 0 && $this->y == 0;
    }

    public function isPerpendicularTo(Vector $other): bool {
        $dotProduct = $this->x * $other->getX() + $this->y * $other->getY();
        return abs($dotProduct) < 0.0001;
    }

    public function getPerpendicular(): Vector {
        return new Vector(-$this->y, $this->x);
    }

    public function __toString(): string {
        return "Vector({$this->x}, {$this->y})";
    }
}

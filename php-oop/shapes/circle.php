<?php

declare(strict_types=1);

class Circle
{
    const float PI = M_PI;

    private float $radius;

    public function __construct(float $radius)
    {
        if ($radius > 0) $this->radius = $radius;
    }

    public function __toString(): string
    {
        $area = $this->getArea();
        $circumference = $this->getCircumference();
        $diameter = $this->getDiameter();

        return <<<TEXT
        Area: $area
        Circumference: $circumference
        Diameter: $diameter
        Radius: $this->radius
        
        TEXT;
    }

    public function getArea(): float
    {
        return self::PI * $this->radius ** 2;
    }

    public function getCircumference(): float
    {
        return 2 * self::PI * $this->radius;
    }

    public function getDiameter(): float
    {
        return $this->radius * 2;
    }

    public function setRadius(float $radius): void
    {
        if ($radius > 0) $this->radius = $radius;
    }
}

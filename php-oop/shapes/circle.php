<?php

declare(strict_types=1);

class Circle
{
    const float PI = M_PI;

    private float $area;
    private float $circumference;
    private float $diameter;
    private float $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
        $this->setValues($radius);
    }

    private function setValues(float $radius): void
    {
        $this->area = self::PI * $radius ** 2;
        $this->circumference = 2 * self::PI * $radius;
        $this->diameter = $radius * 2;
    }

    public function __toString(): string
    {
        return <<<TEXT
        Area: $this->area
        Circumference: $this->circumference
        Diameter: $this->diameter
        Radius: $this->radius
        
        TEXT;
    }

    public function setRadius(float $radius): void
    {
        $this->radius = $radius;
        self::setValues($radius);
    }
}

$circle = new Circle(10);
echo $circle;

$circle->setRadius(20);
echo $circle;

<?php

declare(strict_types=1);

class Rectangle
{
    private float $height;
    private float $width;

    public function __construct(float $height, float $width)
    {
        if ($height > 0 && $width > 0) {
            $this->width = $width;
            $this->height = $height;
        }
    }

    public function __toString(): string
    {
        $area = $this->getArea();

        return <<<TEXT
        Area: $area
        Height: $this->height
        Width: $this->width
        
        TEXT;
    }

    private function getArea(): float
    {
        return $this->width * $this->height;
    }

    public function setHeight(float $height): void
    {
        if ($height > 0) $this->height = $height;
    }

    public function setWidth(float $width): void
    {
        if ($width > 0) $this->width = $width;
    }
}

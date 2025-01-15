<?php

declare(strict_types=1);

class Rectangle
{
    private float $area;
    private float $height;
    private float $width;

    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
        $this->setArea();
    }

    public function __toString(): string
    {
        return <<<TEXT
        Area: $this->area
        Height: $this->height
        Width: $this->width
        
        TEXT;
    }

    private function setArea(): void
    {
        $this->area = $this->width * $this->height;
    }

    public function setHeight(float $height): void
    {
        $this->height = $height;
        $this->setArea();
    }

    public function setWidth(float $width): void
    {
        $this->width = $width;
        $this->setArea();
    }
}

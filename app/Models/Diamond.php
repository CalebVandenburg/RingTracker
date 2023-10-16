<?php

namespace App\Models;
use App\Models\Enums;


class Diamond
{
    public int $id;
    public string $cut;
    public string $color;
    public string $clarity;
    public float $carat;
    public float $price;
    public string $shape;
    public string $lab;
    public string $previewImageURL;
    public bool $isRecommended;
}


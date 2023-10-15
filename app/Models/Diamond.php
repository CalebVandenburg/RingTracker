<?php

namespace App\Models;
use App\Models\Enums;


class Diamond
{
    public float $carat;
    public float $price;
    public Enums\Shape $shape;
    public Enums\Lab $lab;
}


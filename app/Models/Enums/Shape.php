<?php
namespace App\Models\Enums;
/*
numbers are weird because of arare carats site and are ordered to reflect the way the site shows them
*/
enum Shape: int {
    case Round = 1;
    case Oval = 6;
    case Cushion = 10;
    case Emerald = 4;
    case Princess = 2;
    case Radiant = 8;
    case Pear = 5;
    case Marquise = 3;
    case Asscher = 9;
    case Heart = 7;
};

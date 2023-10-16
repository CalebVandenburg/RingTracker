<?php
namespace App\Models\Enums;
/*
numbers are weird because of arare carats site and are ordered to reflect the way the site shows them
*/
enum Clarity: int {
    case SI2 = 8;
    case SI1 = 7;
    case VS2 = 6;
    case VS1 = 5;
    case VVS2 = 4;
    case VVS1 = 3;
    case IF = 2;
    case FL = 1;
};
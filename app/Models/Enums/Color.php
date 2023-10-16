<?php
namespace App\Models\Enums;
/*
numbers are weird because of arare carats site and are ordered to reflect the way the site shows them
*/
enum Color: int {
    case K = 8;
    case J = 7;
    case I = 6;
    case H = 5;
    case G = 4;
    case F = 3;
    case E = 2;
    case D = 1;
};
<?php
namespace App\Models\Enums;
/*
numbers are weird because of arare carats site and are ordered to reflect the way the site shows them
*/
enum Clarity: int {
    case GIA = 0;
    case GCAL = 5;
    case IGI = 2;
};
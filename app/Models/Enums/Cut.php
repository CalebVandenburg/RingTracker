<?php
namespace App\Models\Enums;
/*
numbers are weird because of arare carats site and are ordered to reflect the way the site shows them
*/
enum Cut: int {
    case Not_Good = 4;
    case Good = 3;
    case Very_Good = 2;
    case Excellent = 1;
    //seems that rare carat maybe gives this value to low quality dimaonds with a really good cut
    case Rare_Carat_Excellent = 0;
    case Rare_Carat_Ideal = -1;
};
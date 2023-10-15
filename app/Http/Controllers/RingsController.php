<?php

namespace App\Http\Controllers;

use App\Models\Ring;
use App\Models\Diamond;
use App\Models\Enums;
use App\Models\Enums\Lab;
use App\Models\Enums\Shape;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class RingsController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function GetRareCaratDiamonds($caratMinimum = 0, $caratMaximum = 5) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://webapi.rarecarat.com/diamonds2');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
        ]);
        curl_setopt($ch, CURLOPT_POSTFIELDS, '
        {
            "diamond": {
                "caratMin": 0.28,
                "caratMax": 35,
                "certificateLabs": [
                    0,
                    5,
                    2
                ],
                "clarityMin": 1,
                "clarityMax": 8,
                "colorMin": 1,
                "colorMax": 7,
                "crownAngleMin": 23,
                "crownAngleMax": 40,
                "cutMin": -1,
                "cutMax": 3,
                "dealScoreRatings": [],
                "depthPercentageMin": 0,
                "depthPercentageMax": 100,
                "fluorescenceMin": 0,
                "fluorescenceMax": 4,
                "girdleThicknessPercentageMin": 1.5,
                "girdleThicknessPercentageMax": 7,
                "girdleThicknessMin": 1,
                "girdleThicknessMax": 8,
                "heightMin": 2,
                "heightMax": 12,
                "lengthToWidthRatioMin": 1,
                "lengthToWidthRatioMax": 2.75,
                "lengthMin": 3,
                "lengthMax": 20,
                "hasMedia": false,
                "pairSearch": false,
                "pavilionAngleMin": 38,
                "pavilionAngleMax": 43,
                "polishMin": 1,
                "polishMax": 3,
                "pricePerCaratMin": 0,
                "pricePerCaratMax": 50000,
                "priceMin": 350,
                "priceMax": 4000000,
                "qualityScoreRankings": [],
                "shapes": [
                    1
                ],
                "shippingDays": -1,
                "symmetryMin": 0,
                "symmetryMax": 3,
                "tableWidthPercentageMin": 0,
                "tableWidthPercentageMax": 100,
                "isLabGrown": true,
                "widthMin": 3,
                "widthMax": 20
            },
            "retailer": {
                "distance": 75,
                "postalCode": null,
                "localRetailers": [],
                "retailers": [],
                "showOnline": true,
                "showLocal": true,
                "features": []
            },
            "setting": {
                "metals": [],
                "priceMax": 1000000,
                "priceMin": 0,
                "styles": []
            }
        }        ');
        $response = curl_exec($ch);
        curl_close($ch);
        $responseAsObject = json_decode($response, true);
        $diamondsArray = $responseAsObject['diamonds'];
        $diamonds = array();
        foreach($diamondsArray as $diamond) {
            $myDiamond = new Diamond;
            $myDiamond->carat = $diamond["carat"];
            $lab = Lab::from(intval($diamond["certificateLab"]));
            $myDiamond->lab = $lab;
            $myDiamond->price = $diamond["price"];
            $shape = Shape::from(intval($diamond["shape"]));
            $myDiamond->shape = $shape;
            array_push($diamonds, $myDiamond);

        }
        return json_encode($diamonds);
    }
    public function GetRings(Request $request) {
        $data = $this->GetRareCaratDiamonds(0,4);
        return response($data, 200);
    }
}
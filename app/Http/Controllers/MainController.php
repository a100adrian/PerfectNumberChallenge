<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Services\AliquotSumCalculator;
use Laravel\Lumen\Routing\Controller as BaseController;

class MainController extends BaseController
{
    public function indexAction($number): string
    {
        if(is_numeric($number) && intval($number) > 0){
            $aliquotSumCalculator = new AliquotSumCalculator();
            return response()
                ->json($aliquotSumCalculator->check(intval($number)));
        }

        return response()->json("Bad Request", 400);
    }
}

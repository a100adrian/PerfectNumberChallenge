<?php

namespace App\Services;

class AliquotSumCalculator implements AliquotSumCalculatorInterface
{

    public function check(int $n): array
    {
        $sum = 0;

        for($i = 1; $i <= $n/2; $i++){
            if($n % $i == 0){
                $sum += $i;
            }
        }

        if($sum == $n){
            return [
                "$n is" => "Perfect",
                "The aliquot sum is" => "$sum"
            ];
        }
        elseif ($sum > $n){
            return [
                "$n is" => "Abundant",
                "The aliquot sum is" => "$sum"
            ];
        }

        return [
            "$n is" => "Deficient",
            "The aliquot sum is" => "$sum"
        ];
    }
}

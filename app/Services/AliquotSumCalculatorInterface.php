<?php

namespace App\Services;

interface AliquotSumCalculatorInterface
{
    public function check(int $n): array;
}

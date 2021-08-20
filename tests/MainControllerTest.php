<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

use App\Services\AliquotSumCalculator;

class MainControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_main_index_is_rendered()
    {
        $response = $this->get('/api/utils/number-category/4');
        $response->assertResponseStatus(200);
    }

    public function test_AliquotSumCalculator_is_perfect()
    {
        $n = 6;

        $expected = [
            "$n is" => "Perfect",
            "The aliquot sum is" => "$n"
        ];

        $subject = new AliquotSumCalculator();
        $this->assertEquals($subject->check($n), $expected);
    }

    public function test_AliquotSumCalculator_is_deficient()
    {
        $n = 8;

        $expected = [
            "$n is" => "Deficient",
            "The aliquot sum is" => "7"
        ];

        $subject = new AliquotSumCalculator();
        $this->assertEquals($subject->check($n), $expected);
    }

    public function test_AliquotSumCalculator_is_abundant()
    {
        $n = 12;

        $expected = [
            "$n is" => "Abundant",
            "The aliquot sum is" => "16"
        ];

        $subject = new AliquotSumCalculator();
        $this->assertEquals($subject->check($n), $expected);
    }

}

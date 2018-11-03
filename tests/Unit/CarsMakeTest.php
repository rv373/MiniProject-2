<?php

namespace Tests\Unit;

use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarsMakeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $carTps = array("ford", "honda", "toyota");
        $car = Car::inRandomOrder()->first();
        echo $car->make;
        $this->assertContains($car->make,$carTps);
    }
}

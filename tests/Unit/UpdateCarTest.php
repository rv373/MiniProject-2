<?php

namespace Tests\Unit;

use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB as DB;
use App\User;

class UpdateCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUpdateCar()
    {

        DB::table('cars')->where('make', 'Honda')->update(array('year'=> 2000));
        $car = Car::where('make','Honda')->first();
        var_dump($car->year);

        echo $car->name;
        $this->assertEquals("2000", $car->year, "Update CAR Success");

    }
}


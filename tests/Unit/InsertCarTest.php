<?php

namespace Tests\Unit;

use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB as DB;
use App\User;

class InsertCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertCar()
    {

        DB::table('cars')->insert(
            array('make' => 'Honda', 'model' => 'CRV', 'year' => 2018)
        );
        $car = Car::where('make','Honda')->first();
        var_dump($car->model);

        echo $car->make;
        $this->assertEquals("Honda", $car->make, "Created Car Successfully");

//        $this->assertEquals(50, $users, "DB Seeder Count Test Success");

    }
}


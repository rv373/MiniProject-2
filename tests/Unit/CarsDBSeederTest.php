<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB as DB;
use App\Car;

class CarsDBSeederTest extends TestCase
{

    public function testCarsDBSeeder()
    {

        $cars = DB::table('cars')->count();
        echo $cars;
        $this->assertEquals(50, $cars, "Cars DB Seeder Count Test Success");

    }
}


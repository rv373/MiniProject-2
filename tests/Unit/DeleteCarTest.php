<?php

namespace Tests\Unit;

use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB as DB;
use App\User;

class DeleteCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDeleteCar()
    {
        DB::table('cars')->where('make', 'Honda')->delete();
        $car = Car::where('make','Honda')->first();

        echo $car;
        $this->assertNull($car,"Delete Car Success");

    }
}

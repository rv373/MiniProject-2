<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB as DB;
use App\User;

class DBSeederTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDBSeeder()
    {

        $users = DB::table('users')->count();
        echo $users;
        $this->assertEquals(50, $users, "DB Seeder Count Test Success");

    }
}


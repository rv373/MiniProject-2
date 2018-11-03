<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB as DB;
use App\User;

class DeleteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUpdateUser()
    {
        DB::table('users')->where('name', 'Steve Smith')->delete();
        $user = User::where('name','Steve Smith')->first();

        echo $user;
        $this->assertNull($user,"Delete Success");

    }
}

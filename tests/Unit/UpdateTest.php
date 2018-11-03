<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB as DB;
use App\User;

class UpdateTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUpdateUser()
    {
        DB::table('users')->where('name', 'Keith William')->update(array('name'=>'Steve Smith'));
        $user = User::where('name','Steve Smith')->first();
        var_dump($user->name);

        echo $user->name;
        $this->assertEquals("Steve Smith", $user->name, "Update Success");

    }
}

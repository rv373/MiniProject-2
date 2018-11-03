<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = new User(["suzy kaun", "suzy@yahoo.com","secret"]);
        $userData = array(
            'name'  =>  'John Doe1',
            'email'     =>  'jdoe1@njit.com',
            'password'  =>  'J0doe'

        );
        $user = new User($userData);
        $user->save();

        $this->assertEquals(7, $user->id, "Inserting Success");

    }
}

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
    public function testCreateUser()
    {
        //$user = new User(["suzy kaun", "suzy@yahoo.com","secret"]);
        $userData = array(
            'name'  =>  'Keith William',
            'email'     =>  'kwilliam@njit.edu',
            'password'  =>  'kwill'

        );
        $user = new User($userData);
        $user->save();

        $user = User::latest()->first();
        echo $user->name;
        $this->assertEquals("Keith William", $user->name, "Inserting Success");

    }
}

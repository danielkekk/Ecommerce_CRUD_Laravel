<?php

namespace Tests\Feature;

//use Illuminate\Foundation\Testing\RefreshDatabase;
//use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/users');

        $response->assertStatus(200);
    }

    /**
     * Creating a user with wrong email
     *
     * @return void
     */
    public function test_create_user_with_wrong_email()
    {
        $user = [
            'name' => Str::random(20),
            'email' => Str::random(20).'@gmail.com',
            'password' => Hash::make('-')
        ];

        $response = $this->post('/users', $user);

        $response->assertStatus(302);
    }

    /**
     * Update a user with wrong email
     *
     * @return void
     */
    public function test_update_one_user()
    {
        $user = User::create([
            'name' => Str::random(20),
            'email' => Str::random(20).'@gmail.com',
            'password' => Hash::make('-')
        ]);
        $test_endpoint = '/users/'.$user->id;

        $updated_user = [
            'id' => $user->id,
            'name' => 'UPDATED_USER',
            'email' => Str::random(20).'@gmail.com',
            'password' => Hash::make('-')
        ];

        $response = $this->put($test_endpoint, $updated_user);

        $response->assertStatus(302);
    }

    /**
     * Get a user
     *
     * @return void
     */
    public function test_get_one_user()
    {
        $user = User::create([
            'name' => Str::random(20),
            'email' => Str::random(20).'@gmail.com',
            'password' => Hash::make('-')
        ]);
        $test_endpoint = '/users/'.$user->id.'/edit';

        $response = $this->get($test_endpoint);

        $response->assertStatus(200);
    }

    /**
     * Deleting a user
     *
     * @return void
     */
    public function test_delete_one_user()
    {
        $user = User::create([
            'name' => Str::random(20),
            'email' => Str::random(20).'@gmail.com',
            'password' => Hash::make('-')
        ]);
        $test_endpoint = '/users/'.$user->id;

        $response = $this->delete($test_endpoint);

        $response->assertStatus(302);
    }
}

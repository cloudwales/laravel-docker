<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_show_posts()
    {
        $users = User::factory()
            ->count(5)
            ->hasPosts(2)
            ->create();

        $this->assertDatabaseCount('users', 5);
    }
}

<?php

namespace ZenCoreSpA\Authentication\Tests\Feature;

use ZenCoreSpA\Authentication\Models\User;
use Illuminate\Foundation\Testing\Concerns\InteractsWithViews;
use ZenCoreSpA\Authentication\Tests\TestCase;

class LogoutTest extends TestCase
{
    use InteractsWithViews;

    public function testPostLogout()
    {
        $user = User::factory()->create();

        $this->actingAs($user)
            ->post(route('auth.logout'))
            ->assertStatus(302)
            ->assertRedirect(route('auth.login'))
            ->assertSessionHas('message', __('Unauthenticated'))
        ;
    }
}
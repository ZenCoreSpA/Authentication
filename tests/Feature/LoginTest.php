<?php

namespace ZenCoreSpA\Authentication\Tests\Feature;

use ZenCoreSpA\Authentication\Models\User;
use Illuminate\Foundation\Testing\Concerns\InteractsWithViews;
use ZenCoreSpA\Authentication\Tests\TestCase;

class LoginTest extends TestCase
{
    use InteractsWithViews;

    public function testGetLogin()
    {
        $this->get(route('auth.login'))
            ->assertStatus(200)
            ->assertSee('Attempt');
    }

    public function testPostLogin()
    {
        $user = User::factory()->create();

        $this->post(route('auth.login'), [
            'email' => $user->email,
            'password' => 'password',
        ])
            ->assertStatus(302)
            ->assertRedirect(route('auth.dashboard'))
            ->assertSessionHas('message', __('Authenticated'))
        ;
    }

    public function testPostLoginUnauthorized()
    {
        $user = User::factory()->create();

        $this->post(route('auth.login'), [
            'email' => $user->email,
            'password' => 'incorrect',
        ])
            ->assertStatus(302)
            ->assertRedirect(route('auth.login'))
            ->assertSessionHas('message', __('Unauthorized'));
    }
}
<?php

use App\Models\User;

test('auth screen can be rendered', function () {
    $response = $this->get('/auth');

    $response->assertStatus(200);
});

test('users can authenticate using the auth screen', function () {
    $user = User::factory()->create();

    $response = $this->post('/auth', [
        'email' => $user->email,
        'password' => 'password',
    ]);

    $this->assertAuthenticated();
    $response->assertRedirect(route('dashboard', absolute: false));
});

test('users can not authenticate with invalid password', function () {
    $user = User::factory()->create();

    $this->post('/auth', [
        'email' => $user->email,
        'password' => 'wrong-password',
    ]);

    $this->assertGuest();
});

test('users can logout', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->post('/logout');

    $this->assertGuest();
    $response->assertRedirect('/');
});

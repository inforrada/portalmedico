<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\RefreshDatabase;


test('validates the User model', function () {
    // Arrange
    $user = User::factory()->create();
    
    $userData = [
        'name' => 'David',
        'email' => 'david@pruebas.com',
        'password' => \Illuminate\Support\Facades\Hash::make('12345678'),
    ];

    // Act
    $user = User::create($userData);

    // Assert
    expect($user)->toBeInstanceOf(User::class);
    expect($user->name)->toBe('David');
    expect($user->email)->toBe('david@pruebas.com');
    // Puedes agregar más aserciones según las propiedades y relaciones del modelo
})->uses(RefreshDatabase::class);


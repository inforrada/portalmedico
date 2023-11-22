<?php

use Mockery;
use App\Models\User;
use App\Models\Patient;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\RefreshDatabase;


test('validates the User model', function () {
    // Arrange
    $user = \App\Models\User::factory()->create();
    
    $userData = [
        'name' => 'David',
        'email' => 'david1@pruebas.com',
        'password' => \Illuminate\Support\Facades\Hash::make('12345678'),
    ]; 

    // Act
  //   $user = User::create($userData);

    // Assert
    expect($user)->toBeInstanceOf(User::class);
    
    expect($userData)->toHaveKey('name');
   // expect($user->name)->toBe('David');
  //  expect($user->email)->toBe('david@pruebas.com');
 
})->uses(RefreshDatabase::class);

it ('prueba de un mock', function () {
    $mock = Mockery::mock(Patient::class);
    
    $mock->shouldReceive('doctors')->once()->andReturn();
    $mock->shouldReceive('doctors')->times(7)->andReturnFalse();

    $servicio = app(Unservicio::class);
    $stub = Mockery::mock($servicio);
    $stub->shouldReceive('mifuncionalidad')->once()->andReturnFalse();

    $intRes = $stub->mifuncionalidad ();

    expect ($intRes)->toBe ('algo');
    
    Mockery::close();

})

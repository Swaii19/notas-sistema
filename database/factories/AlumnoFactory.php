<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Alumno;

$factory->define(Alumno::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'apellido' => 'aleatorio',
        'fecha_nacimiento' => '26/01/2002',
        'direccion'=> 'UNADECA',
        'genero' => 'M',
        'telefono' => '7763653635',
        'email' => $faker->unique()->safeEmail,
        'cursos' => 'aleatorio',
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
    ];
});

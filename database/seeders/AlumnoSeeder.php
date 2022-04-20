<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Alumno;
class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Alumno::class,20)->create();
         
    }
}

<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\books;
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(books::class,20)->create();
       
    }
}

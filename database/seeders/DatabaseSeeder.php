<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    public function run(): void
    {
       // se declara un ARRAY que llamará a los archivos SEEDERS y estos 
		    // a su vez ejecutarán lo que tienen declarado
           /*$this->call([
                UserSeeder::class,
                ComputerSeeder::class,
            ]);*/
            User::factory(10)->create();

    }
}

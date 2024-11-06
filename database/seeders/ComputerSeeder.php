<?php

namespace Database\Seeders;
use App\Models\Computer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComputerSeeder extends Seeder
{
    public function run(): void
    {
        /*$computer1 = new Computer();
        $computer1->model ='Legion 16x';
        $computer1->mark ='Lenovo';
        $computer1->size =16;
        $computer1->published_at =now();  //uso de helper NOW
        $computer1->is_active =true;
        $computer1->save();

        $computer2 = new Computer();
        $computer2->model ='Envy 15';
        $computer2->mark ='HP';
        $computer2->size =15;
        $computer2->published_at ='2014-05-18 17:00:11';
        $computer2->is_active =false;
        $computer2->save();

        $computer3 = new Computer();
        $computer3->model ='Vaio';
        $computer3->mark ='Sony';
        $computer3->size =15;
        $computer3->published_at ='2010-08-05 09:00:11';
        $computer3->is_active =false;
        $computer3->save();*/
        Computer::factory(10)->create();
    }
}

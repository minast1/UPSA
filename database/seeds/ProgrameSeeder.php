<?php

use App\Programe;
use Illuminate\Database\Seeder;

class ProgrameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Programe::class, 8)->create();
    }
}
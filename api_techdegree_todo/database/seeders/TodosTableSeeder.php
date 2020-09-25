<?php

namespace Database\Seeders;
use App\Models\Todo;

use Illuminate\Database\Seeder;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Todo::factory()
        ->times(10)
        ->create();
    }
}

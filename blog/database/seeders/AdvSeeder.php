<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Adv;

class AdvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Adv::factory()->count(10)->create();
    }
}

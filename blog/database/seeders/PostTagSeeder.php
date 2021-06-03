<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PostTag;

class PostTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostTag::factory()->count(10)->create();
    }
}

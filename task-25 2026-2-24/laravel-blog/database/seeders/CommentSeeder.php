<?php

namespace Database\Seeders;

use App\Models\Comment as ModelsComment;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ModelsComment::factory(1000)->create();
    }
}

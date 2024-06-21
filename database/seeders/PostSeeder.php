<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           DB::table('posts')->insert([
                   'category_id' => 1,
                   'user_id'=>1,
                   'title' => '命名の心得',
                   'body' => '命名はデータを基準に考える',
                   'created_at' => new DateTime(),
                   'updated_at' => new DateTime(),
                   'deleted_at' => new DateTime()
            ]);
    }
}

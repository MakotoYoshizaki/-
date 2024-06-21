<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('categories')->insert([
                'name' => 'timeline',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('categories')->insert([
                'name' => 'visual',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('categories')->insert([
                'name' => 'mm',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('categories')->insert([
                'name' => 'groove',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('categories')->insert([
                'name' => 'onatsu',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('categories')->insert([
                'name' => 'onsyoku',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('categories')->insert([
                'name' => 'onka',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('categories')->insert([
                'name' => 'tempokan',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('categories')->insert([
                'name' => 'mental',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('categories')->insert([
                'name' => 'management',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('categories')->insert([
                'name' => 'form',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('categories')->insert([
                'name' => 'chops',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('categories')->insert([
                'name' => 'listining',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('categories')->insert([
                'name' => 'url',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('categories')->insert([
                'name' => 'datsuryoku',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('categories')->insert([
                'name' => 'chiebukuro',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        
    }
}

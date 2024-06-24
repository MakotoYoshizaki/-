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
                'name' => 'グルーヴ',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('categories')->insert([
                'name' => '音圧',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('categories')->insert([
                'name' => '音色',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('categories')->insert([
                'name' => '音価',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('categories')->insert([
                'name' => 'テンポ感',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('categories')->insert([
                'name' => 'メンタル',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('categories')->insert([
                'name' => 'マネジメント',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('categories')->insert([
                'name' => 'フォーム',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('categories')->insert([
                'name' => 'チョップス',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('categories')->insert([
                'name' => 'リスニング',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('categories')->insert([
                'name' => 'URL',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('categories')->insert([
                'name' => '脱力',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('categories')->insert([
                'name' => '知恵袋',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        
    }
}

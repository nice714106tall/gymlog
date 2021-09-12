<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class newsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<20; $i++){
            DB::table('news')->insert([
                'title' => 'これは題名です。' . Str::random(20),
                'article' => 'これは本文です。' . Str::random(80) . '本文終わり。',
                'created_at' => now()
            ]);
        }
    }
}

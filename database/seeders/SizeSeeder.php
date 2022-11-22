<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sizes')->insert([
            [
                'size' => 'S'
            ],
            [
                'size' => 'M'
            ],
            [
                'size' => 'L'
            ],
            [
                'size' => 'SL'
            ],
            [
                'size' => 'XL'
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('infos')->insert([
            [
                'adress' => '28 Green Tower, rue du temple,
                Bruxelles, Belgique',
                'phone' => '0032488282476',
                'email' => 'karim.krayem@gmail.com',
            ],
        ]);
    }
}

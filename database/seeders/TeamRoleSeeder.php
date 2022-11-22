<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeamRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('team_roles')->insert([
            [
                'role' => 'chairman'
            ],
            [
                'role' => 'chief marketing'
            ],
            [
                'role' => 'fashion designer'
            ],
            [
                'role' => 'graphic design'
            ],
        ]);
    }
}

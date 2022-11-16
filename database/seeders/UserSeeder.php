<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [

                    'name' => 'karim',
                    'email' => 'admin@admin.com',
                    'password' => Hash::make('admin@admin.com'),
                    'role_id' => 1,
                    'src' => 'a'
                ],
                [

                    'name' => 'kokoWeb',
                    'email' => 'web@web.com',
                    'password' => Hash::make('web@web.com'),
                    'role_id' => 2,
                    'src' => 'a'
                ],
                [

                    'name' => 'kokoUser',
                    'email' => 'user@user.com',
                    'password' => Hash::make('user@user.com'),
                    'role_id' => 3,
                    'src' => 'a'
                ],
                [

                    'name' => 'User2',
                    'email' => 'user2@User2.com',
                    'password' => Hash::make('User2@User2.com'),
                    'role_id' => 3,
                    'src' => 'a'
                ],
                [

                    'name' => 'KokoRedacteur',
                    'email' => 'kokoRedacteurd@KokoRedacteur.com',
                    'password' => Hash::make('kokoRedacteurd@KokoRedacteur.com'),
                    'role_id' => 4,
                    'src' => 'a'
                ],
            ]
        );
    }
}

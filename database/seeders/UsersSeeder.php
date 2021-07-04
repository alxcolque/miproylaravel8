<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Alec',
                'email' => 'admin@admin',
                'password' => Hash::make('asdfghjklñ'),
                'role' => '1',
                'urlimage' => 'user.png',
            ],
            [
                'name' => 'Moder',
                'email' => 'moder@moder',
                'password' => Hash::make('asdfghjklñ'),
                'role' => '2',
                'urlimage' => 'user.png',
            ],
            [
                'name' => 'User',
                'email' => 'user@user',
                'password' => Hash::make('asdfghjklñ'),
                'role' => '3',
                'urlimage' => 'user.png',
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}

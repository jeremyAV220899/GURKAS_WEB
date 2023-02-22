<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'Juan Ubillus',
                'email' => 'juan.ubillusr@gmail.com',
                'password' => Hash::make('123'),
            ],
            [
                'name' => 'Jeremy Apaico',
                'email' => 'jeremy232129@gmail.com',
                'password' => Hash::make('123'),
            ]
        ];
        User::insert($users);
    }
}

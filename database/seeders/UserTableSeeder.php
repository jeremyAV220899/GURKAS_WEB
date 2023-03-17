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
                'dni' => '71269685',
                'estado_id' => 1,
                'personal_id' => 1,
                'email' => 'juan.ubillusr@gmail.com',
                'password' => Hash::make('123'),
            ],
            [
                'name' => 'Jeremy Josue',
                'dni' => '71385575',
                'estado_id' => 1,
                'personal_id' => 2,
                'email' => 'jeremy232129@gmail.com',
                'password' => Hash::make('123'),
            ]
        ];
        User::insert($users);
    }
}

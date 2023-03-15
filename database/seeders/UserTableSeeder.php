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
                'dni' => '123',
                'idestado' => 1,
                'email' => 'juan.ubillusr@gmail.com',
                'password' => Hash::make('123'),
            ],
            [
                'name' => 'Jeremy Apaico',
                'dni' => '71385575',
                'idestado' => 1,
                'email' => 'jeremy232129@gmail.com',
                'password' => Hash::make('123'),
            ],
            [
                'name' => 'Andy Carreño',
                'dni' => '1234',
                'idestado' => 1,
                'email' => 'acarreno@gmail.com',
                'password' => Hash::make('403668363'),
            ]
        ];
        User::insert($users);
    }
}

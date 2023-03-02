<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserTableSeeder::class,
            NacionalidadesTableSeeder::class,
            HorasTableSeeder::class,
            TurnosTableSeeder::class,
            EstadosTableSeeder::class,
            EmpresasTableSeeder::class,
            
        ]);
    }
}

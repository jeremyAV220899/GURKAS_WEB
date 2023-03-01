<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserTableSeeder::class,
            GenerosTableSeeder::class,
            NacionalidadesTableSeeder::class,
            DocumentosTableSeeder::class,
            BrevetesTableSeeder::class,
            HorasTableSeeder::class,
            TurnosTableSeeder::class,
            EstadosTableSeeder::class,
            EmpresasTableSeeder::class,
            
        ]);
    }
}

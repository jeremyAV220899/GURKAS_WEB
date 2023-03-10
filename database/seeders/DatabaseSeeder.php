<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserTableSeeder::class,
            PuestoTableSeeder::class,
            SituacionTableSeeder::class,
            ContratoTableSeeder::class,
            TallaTableSeeder::class,
            BreveteTableSeeder::class,
            DocumentoTableSeeder::class,
            GeneroTableSeeder::class,
            NacionalidadTableSeeder::class,
            HoraTableSeeder::class,
            EstadoTableSeeder::class,
            EmpresaTableSeeder::class,
            TurnoTableSeeder::class,
            GradoTableSeeder::class,
            ArmadoTableSeeder::class,
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Diplomado;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Diplomado::create([
            'nombre_persona' => 'Juan Perez',
            'ci' => '123',
            'estado' => 'activo',
            'numero_carton' => 1,
            'programa' => 'Programa 1',
            'gestion_inicio' => 2021,
            'gestion_fin' => 2022,
            'tipo' => 'tipo 1',
            'mencion' => 'mencion 1',
            'horas_academicas' => 100,
            'creditos' => 100,
            'fecha_ingreso' => '2021-01-01',
        ]);
        // Generar 5 registros de prueba sin factory
        Diplomado::create([
            'nombre_persona' => 'Maria Perez',
            'ci' => '456',
            'estado' => 'activo',
            'numero_carton' => 2,
            'programa' => 'Programa 2',
            'gestion_inicio' => 2021,
            'gestion_fin' => 2022,
            'tipo' => 'tipo 2',
            'mencion' => 'mencion 2',
            'horas_academicas' => 100,
            'creditos' => 100,
            'fecha_ingreso' => '2021-01-01',
        ]);
        Diplomado::create([
            'nombre_persona' => 'Pedro Perez',
            'ci' => '789',
            'estado' => 'activo',
            'numero_carton' => 3,
            'programa' => 'Programa 3',
            'gestion_inicio' => 2021,
            'gestion_fin' => 2022,
            'tipo' => 'tipo 3',
            'mencion' => 'mencion 3',
            'horas_academicas' => 100,
            'creditos' => 100,
            'fecha_ingreso' => '2021-01-01',
        ]);
        Diplomado::create([
            'nombre_persona' => 'Carlos Perez',
            'ci' => '101',
            'estado' => 'activo',
            'numero_carton' => 4,
            'programa' => 'Programa 4',
            'gestion_inicio' => 2021,
            'gestion_fin' => 2022,
            'tipo' => 'tipo 4',
            'mencion' => 'mencion 4',
            'horas_academicas' => 100,
            'creditos' => 100,
            'fecha_ingreso' => '2021-01-01',
        ]);
    }
}

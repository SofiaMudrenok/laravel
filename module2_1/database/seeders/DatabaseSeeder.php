<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Student::create([
            'name' => 'Олейник П.А.',
            'speciality' => 'СА',
            'course' => 3,
        ]);

        Student::create([
            'name' => 'Панов О.О.',
            'speciality' => 'СА',
            'course' => 2,
        ]);

        // Додаткові записи

        Student::create([
            'name' => 'Шевчук П.П.',
            'speciality' => 'СА',
            'course' => 1,
        ]);


    }
}

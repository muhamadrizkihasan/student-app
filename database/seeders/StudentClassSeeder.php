<?php

namespace Database\Seeders;

use App\Models\StudentClass;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classes = [
            [
                'name' => 'XI PPLG 1',
                'slug' => 'xi-pplg-1',
            ],
            [
                'name' => 'XI PPLG 2',
                'slug' => 'xi-pplg-2',
            ],
            [
                'name' => 'XI PPLG 3',
                'slug' => 'xi-pplg-3',
            ],
        ];

        foreach ($classes as $studentClass) {
            $class = new StudentClass();

            $class->name = $studentClass['name'];
            $class->slug = $studentClass['slug'];

            $class->save();
        }
    }
}

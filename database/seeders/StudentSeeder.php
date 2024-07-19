<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use Illuminate\Support\Facades\Schema;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Student::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            ['name' => 'Donny', 'gender' => 'L', 'NIS' => '123456', 'class_id' => 1],
            ['name' => 'Denny', 'gender' => 'L', 'NIS' => '123455', 'class_id' => 2],
            ['name' => 'Sani', 'gender' => 'P', 'NIS' => '123454', 'class_id' => 3],
            ['name' => 'Dannang', 'gender' => 'L', 'NIS' => '123453', 'class_id' => 4],
        ];

        foreach ($data as $value) {
            Student::insert([
                'name' => $value['name'],
                'gender' => $value['gender'],
                'NIS' => $value['NIS'],
                'class_id' => $value['class_id'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

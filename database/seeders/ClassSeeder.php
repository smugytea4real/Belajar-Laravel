<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ClassRoom;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        ClassRoom::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            ['name' => 'XII RPL 1'],
            ['name' => 'XII RPL 2'],
            ['name' => 'XII RPL 3'],
            ['name' => 'XII TKJ 1'],
        ];
        
        foreach ($data as $value) {
            ClassRoom::insert([
                'name' => $value['name'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

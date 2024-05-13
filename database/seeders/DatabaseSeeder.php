<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // for ($i = 0; $i < 100; $i++) {
        //     DB::table('projects')->insert([
        //         'project_category_id' => rand(1, 4),
        //         'name' => 'Project ' . rand(1, 100),
        //         'client' => 'Client ' . rand(1, 100),
        //         'description' => 'Description ' . rand(1, 100),
        //         'floor' => 'Floor ' . rand(1, 100),
        //         'scope_of_work' => 'Scope of work ' . rand(1, 100),
        //         'image' => 'default.png',
        //         'status' => ['ONGOING', 'COMPLETED'][rand(0, 1)],
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ]);
        // }

        $this->call(UserSeeder::class);
    }
}

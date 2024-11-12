<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use PHPUnit\Framework\Attributes\Group;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $departments =[
            ['id' => 1, 'code' => '22201'],
            ['id' => 2, 'code' => '26201'],
            ['id' => 3, 'code' => '55201'],
        ];

        for ($i = 0; $i < 50; $i++) {
            $department = $departments[array_rand($departments)];
            $entry_years = rand(2018, 2024);
            $nidns = DB::table('lecturers')->pluck('nidn')->toArray();
            $npms = substr($department['code'], 0, 5) . substr($entry_years, -2). rand(1, 190);

            DB::table('lecturers')->insert([
                'npm' => $npms,
                'fullname' => $faker->name,
                'year_entry' => rand(2018, 2024),
                'group' => $faker->randomElement(['A', 'B', 'C', 'D', 'NR']),
                'nidn' => $faker->randomElement($nidns),
                'department_id' => rand(1,3),
            ]);
        }
    }

}

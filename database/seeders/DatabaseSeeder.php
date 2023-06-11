<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Employee;
use App\Models\Overtime;
use App\Models\Reference;
use App\Models\Setting;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Employee::create([
            "name" => "Andi Anugrah",
            "gaji" => 3000000
        ]);
        Employee::create([
            "name" => "Budi Pragiwaksono",
            "gaji" => 4500000
        ]);

        Reference::create([
            "name" => "Salary/173",
            "expression" => "(salary/173) * overtime_duration_total"
        ]);
        Reference::create([
            "name" => "Fixed",
            "expression" => "10000 * overtime_duration_total"
        ]);

        Setting::create([
            "key" => 1
        ]);
        Overtime::create([
            "employee_id" => 1,
            "time_start" => "18:00:00",
            "time_end" => "22:00:00"
        ]);
        Overtime::create([
            "employee_id" => 2,
            "time_start" => "20:00:00",
            "time_end" => "22:00:00"
        ]);
    }
}

<?php

use App\Employee;
use App\Location;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Employee::class, 100)
            -> make()
            -> each(function($emp) {

            $loc = Location::inRandomOrder() -> first();
            $emp -> location() -> associate($loc);

            $emp -> save();
        });
    }
}

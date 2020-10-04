<?php

use App\Employee;
use App\Task;

use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Task::class, 200)
            -> create()
            -> each(function($tas) {

            $emps = Employee::inRandomOrder()
                -> take(rand(5, 10))
                -> get();

            $tas -> employees() -> attach($emps);
            
        });
    }
}

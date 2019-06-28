<?php

use Illuminate\Database\Seeder;
use App\Employee;
class EmployessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::create([
            'name' => 'Mohammed Jabr' ,
            'password' => Hash::make('password'),
            'phone_number' => '0597453839',
            'DoB' =>'1998-01-01',
            'address' => 'Alburij',
            'salary' => 5000,
            'work_days' => 'sat,sunday,monday',
            'remember_token' => str_random(10),
        ]);
    }
}

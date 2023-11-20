<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $employees = [
            ['Name' => 'Dang Minh Duc', 'Email' => 'DMD1412@gmail.com', 'Phone' => '0987654321', 'Address' => 'Ha Dong'],
            ['Name' => 'Pham Minh Tan', 'Email' => 'NATMP@gmail.com', 'Phone' => '0864297531', 'Address' => 'Hai Phong'],
            ['Name' => 'Tang Tuan Nghia', 'Email' => 'nghia@gmail.com', 'Phone' => '0123456789', 'Address' => 'Long Bien'],
            ['Name' => 'Vo Quoc Thang', 'Email' => 'thang@gmail.com', 'Phone' => '0135792468', 'Address' => 'Phu Tho'],
        ];

        foreach( $employees as $employee){
            DB::table('employees')->insert($employee);
        }
    }
}

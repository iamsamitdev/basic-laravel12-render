<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            [
                'fullname' => 'John Doe',
                'gender' => 'Male',
                'email' => 'john@email.com',
                'tel' => '0812345678',
                'age' => 30,
                'address' => '123 Main St, New York, NY',
                'avatar' => 'john.jpg',
                'status' => 1
            ],
            [
                'fullname' => 'Jane Doe',
                'gender' => 'Female',
                'email' => 'jane@email.com',
                'tel' => '0987654321',
                'age' => 25,
                'address' => '456 Main St, New York, NY',
                'avatar' => 'jane.jpg',
                'status' => 1
            ],
            [
                'fullname' => 'Michael Smith',
                'gender' => 'Male',
                'email' => 'michel@email.com',
                'tel' => '0812345678',
                'age' => 35,
                'address' => '789 Main St, New York, NY',
                'avatar' => 'michael.jpg',
                'status' => 1
            ],
            [
                'fullname' => 'สาวิตรี สุขสวัสดิ์',
                'gender' => 'Female',
                'email' => 'sawitree@email.com',
                'tel' => '0987654321',
                'age' => 28,
                'address' => '101 ลาดพร้าว สะพานสูง กรุงเทพฯ',
                'avatar' => 'sawitree.jpg',
                'status' => 1
            ],
            [
                'fullname' => 'สมชาย ใจดี',
                'gender' => 'Male',
                'email' => 'somchai@email.com',
                'tel' => '0812345678',
                'age' => 40,
                'address' => '202 ลาดพร้าว สะพานสูง กรุงเทพฯ',
                'avatar' => 'somchai.jpg',
                'status' => 1
            ]
        ]);
    }
}

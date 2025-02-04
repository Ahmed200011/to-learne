<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['name' => 'John', 'email' => 'admin1@admin', 'password' => 'admin1'],
            ['name' => 'Doe', 'email' => 'admin2@admin', 'password' => 'admin2'],
            ['name' => 'Jane', 'email' => 'admin3@admin', 'password' => 'admin3'],
            ['name' => 'Doe', 'email' => 'admin4@admin', 'password' => 'admin4'],
        ];
        foreach ($users as  $user) {
            # code...
            DB::table('users')->insert([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => $user['password'],
            ]);
        }
    }
}

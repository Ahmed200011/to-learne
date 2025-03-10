<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BranchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names=['ahmed','mohamed','ali','khaled','nader'];
        foreach ($names as $name) {
            # code...
            DB::table('branches')->insert(['name'=>$name]);
        }
    }
}

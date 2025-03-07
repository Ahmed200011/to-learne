<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pro=[['name'=>'product1','code'=>'1234','description'=>'description1','status'=>'active'],
        ['name'=>'product2','code'=>'12345','description'=>'description2','status'=>'inactive'],
        ['name'=>'product3','code'=>'8888','description'=>'description3','status'=>'active']];
        foreach ($pro as $value) {
            DB::table('products')->insert([
                'name' => $value['name'],
                'code' =>$value['code'] ,
                'description' =>$value['description'] ,
                'status' =>$value['status'] ,
            ]);
        }
    }
}

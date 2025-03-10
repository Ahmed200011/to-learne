<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $news = [
            ['name' => 'Greenwave: Nations Unite to Combat Climate Crisis1111', 'description' => "Cairo, Egypt  February 3, 2025  In a world that is increasingly driven by technological advancements, recent breakthroughs in artificial intelligence (AI) are poised to revolutionize various sectors, from healthcare and education to transportation and entertainment. Leading researchers and industry experts unveiled groundbreaking developments at the 2025 Global AI Summit held in Cairo this week."],
            ['name' => 'Greenwave: Nations Unite to Combat Climate Crisis2222', 'description' => 'Cairo, Egypt  February 3, 2025  In a world that is increasingly driven by technological advancements, recent breakthroughs in artificial intelligence (AI) are poised to revolutionize various sectors, from healthcare and education to transportation and entertainment. Leading researchers and industry experts unveiled groundbreaking developments at the 2025 Global AI Summit held in Cairo this week.'],
            ['name' => 'Greenwave: Nations Unite to Combat Climate Crisis3333', 'description' => 'Cairo, Egypt  February 3, 2025 – In a world that is increasingly driven by technological advancements, recent breakthroughs in artificial intelligence (AI) are poised to revolutionize various sectors, from healthcare and education to transportation and entertainment. Leading researchers and industry experts unveiled groundbreaking developments at the 2025 Global AI Summit held in Cairo this week.']
        ];
        foreach ($news as $value) {
            DB::table('news')->insert([
                'name' => $value['name'],
                'description' =>$value['description'] ,
            ]);
        }
    }
}

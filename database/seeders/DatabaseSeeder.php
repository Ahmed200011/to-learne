<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User_Profile;
use App\Models\UserProfile;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // $this->call(UserSeeder::class);
        // $this->call(BranchesSeeder::class);
        // $this->call(NewsSeeder::class);
        // $this->call(CategorySeeder::class);
        // Task::factory(100)->create();

        // User::factory(10)->create()
        //     ->each(function ($user) {
        //         Project::factory(9)->create(['user_id' => $user->id])
        //             ->each(function ($project) {
        //                 Task::factory(15)->create(['project_id' => $project->id]);
        //             });
        //     });
        User::factory(10000)->create();
        // User::factory(10)->create()->each(function (User $user) {
        //     UserProfile::factory(1)->create(['user_id' => $user->id]);
        // });

        Category::factory(10)->create()->each(function ($category) {
                Product::factory(2)->create();
                Category::factory(2)->create(['parent_category_id' => $category->id]);
            });
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

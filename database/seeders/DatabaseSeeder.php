<?php
namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UserListSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\CourseModuleSeeder;
use Database\Seeders\CourseSectionSeeder;
use Database\Seeders\CourseMaterialSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            UserListSeeder::class,
            UserSeeder::class,
            CourseSeeder::class,
            CourseModuleSeeder::class,
            CourseSectionSeeder::class,
            CourseMaterialSeeder::class,
        ]);
    }
}

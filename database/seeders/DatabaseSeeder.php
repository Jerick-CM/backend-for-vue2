<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // PostTableSeeder::class,
            UsersTableSeeder::class,
            // Roles_UsersTableSeeder::class,
            // RolesTableSeeder::class,
            // StaffTableSeeder::class,
            // ProductTableSeeder::class,
            // TagSeeder::class,
            // VideoSeeder::class,
            // TaggableTableSeeder::class,
            // MessageoftheDayTableSeeder::class,
            // BlogTableSeeder::class,
            // EarthRemindersTableSeeder::class,
        ]);
    }
}

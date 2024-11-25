<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            AppDatabaseSeeder::class,
            RolesDatabaseSeeder::class,
            SettingsDatabaseSeeder::class,
            UserDatabaseSeeder::class,
            RoomSeeder::class,
            SubjectSeeder::class,
            TeacherSeeder::class,
            TimetableSeeder::class,
        ]);
    }
}

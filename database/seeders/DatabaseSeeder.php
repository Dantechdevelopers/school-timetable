<?php

namespace Database\Seeders;

use App\Models\Subject;
use App\Models\Teacher;
use App\Models\User;
use App\Models\Room;
use App\Models\Timetable;



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

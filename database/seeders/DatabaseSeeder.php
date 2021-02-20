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
        // \App\Models\Admin::factory(10)->create();
    $this->call([
        LanguageSeeder::class,
        SubjectSeeder::class,
        SubfieldSeeder::class,
        ChapterSeeder::class,
        UnitSeeder::class,
        UserSeeder::class,
        TestQuestionSeeder::class,
        TestOptionSeeder::class,
        CommentSeeder::class,
//        UserSessionSeeder::class,
        UserSubjectSeeder::class,
        UserExamSeeder::class,
        UserTestSeeder::class,
        UserTestAnswerSeeder::class,
        UserSettingSeeder::class,
        UniversitySeeder::class,
        FacultySeeder::class,
        FacultyTestResultSeeder::class,
    ]);
    }
}

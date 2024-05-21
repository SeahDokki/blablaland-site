<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as Faker;
use App\Models\Forum\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $categories = Category::all();

        $this->command->getOutput()->progressStart($categories->count());

        foreach ($categories as $category) {
            foreach ($category->sections as $section) {
                for ($a = 0; $a <= 5; $a++) {
                    $userSection = User::all()->random();
                    $topic = $section->topics()->create([
                        'name' => $faker->text(25),
                        'pinned' => $faker->randomElement([0,1]),
                        'locked' => $faker->randomElement([0,1]),
                        'user_id' => $userSection->id,
                        'section_id' => $section->id
                    ]);
                    $topic->posts()->create([
                        'content' => $faker->text(),
                        'user_id' => $userSection->id,
                        'topic_id' => $topic->id
                    ]);
                    for ($i = 0; $i <= 20; $i++) {
                        $userPost = User::all()->random();
                        $topic->posts()->create([
                            'content' => $faker->text(500),
                            'user_id' => $userPost->id,
                            'topic_id' => $topic->id
                        ]);
                        $topic->update(['updated_at' => now()]);
                    }
                }
            }
            $this->command->getOutput()->progressAdvance();
        }

        $this->command->getOutput()->progressFinish();
    }
}

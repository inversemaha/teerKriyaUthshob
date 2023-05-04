<?php

namespace Database\Seeders;

use App\Models\McqQuiz;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class McqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        /*        McqQuiz::create([
                    'question_title' => "২০১৯ - ২০ সালে বিপিএলে ব্যাটিং করতে গিয়ে কোন দলের বিপক্ষে আন্দ্রে রাসেল পিচের ওপর পড়ে গেলেন? ",
                    'option_one' => "চট্টগ্রাম চ্যালেন্জার্স ",
                    'option_two' => "কুমিল্লা ওয়ারিয়র্স",
                    'option_three' => "ঢাকা প্লাটুন ",
                    'option_four' => "খুলনা টাইগার্স",
                    'option_five' => $faker->word(20),
                    'option_six' => $faker->word(20),
                    'is_publish' => true,
                ]);*/


        McqQuiz::create([
            'question_title' => "What is your favorite food?",
            'option_one' => "Biriyani",
            'option_two' => "kacchi",
            'option_three' => "Burger",
            'option_four' => "Pizza",
            'is_publish' => true,
        ]);

        McqQuiz::create([
            'question_title' => "Which one is your favorite Band ?",
            'option_one' => "Warfaze",
            'option_two' => "Dolchut",
            'option_three' => "Nagar Baul",
            'option_four' => "Souls",
            'is_publish' => true,
        ]);

        McqQuiz::create([
            'question_title' => "What is your favorite color?",
            'option_one' => "Red",
            'option_two' => "Black",
            'option_three' => "Yellow",
            'option_four' => "Green",
            'is_publish' => true,
        ]);

        McqQuiz::create([
            'question_title' => "Which one is your favorite City?",
            'option_one' => "Cox's Bazar",
            'option_two' => "Rajshahi",
            'option_three' => "Sylhet",
            'option_four' => "Chittagong",
            'is_publish' => true,
        ]);

        McqQuiz::create([
            'question_title' => "Who is your favorite actor?",
            'option_one' => "Hero Alom",
            'option_two' => "Jayed Khan",
            'option_three' => "Siyam Ahmed",
            'option_four' => "Arefin Shuvo",
            'is_publish' => true,
        ]);

        McqQuiz::create([
            'question_title' => "Who is your favorite actress?",
            'option_one' => "Opu Biswas",
            'option_two' => "Purnima",
            'option_three' => "Shabnur",
            'option_four' => "Shabana",
            'is_publish' => true,
        ]);


        /*      for ($i = 1; $i <= 3; $i++) {
                  McqQuiz::create([
                      'question_title' => $faker->title(),
                      'option_one' => $faker->word(20),
                      'option_two' => $faker->word(20),
                      'option_three' => $faker->word(20),
                      'option_four' => $faker->word(20),
                      'is_publish' => true,

                  ]);
              }*/

    }
}

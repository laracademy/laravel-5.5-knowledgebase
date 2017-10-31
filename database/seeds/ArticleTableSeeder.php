<?php

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        foreach(range(1, 10) as $number) {
            // select a category
            $category = DB::table('categories')->inRandomOrder()->first();

            // insert into articles
            $id = DB::table('articles')->insertGetId([
                'title' => $faker->words(rand(1, 10), true),
                'content' => $faker->realText(rand(200, 300)),
            ]);

            // link
            DB::table('article_category')->insert([
                'category_id' => $category->id,
                'article_id' => $id,
            ]);
        }
    }
}

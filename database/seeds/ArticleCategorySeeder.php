<?php

use Illuminate\Database\Seeder;

class ArticleCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articleCategories = [

            [
                'name' => 'Github-Package',
                'description' => 'Github code package',
                'created_at' => date('Y-m-d 00:00:00'),
                'updated_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'name' => 'Blog',
                'description' => 'Blog post ',
                'created_at' => date('Y-m-d 00:00:00'),
                'updated_at' => date('Y-m-d 00:00:00'),
            ],

        ];

        foreach ($articleCategories as $category) {
            App\ArticleCategory::create($category);
        }
    }
}

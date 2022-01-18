<?php

use App\Models\Blog;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {


        for ($i=0; $i < 20; $i++) { 
            $_blog = new Blog();
            $_blog->image = $faker->imageUrl();
            $_blog->title = $faker->country();
            $_blog->sub_title = $faker->text(30);
            $_blog->author = $faker->name();
            $_blog->post_text = $faker->paragraph(1);
            $_blog->published = $faker->date('2021-01-17', 'now');
            $_blog->save();
        }





        /* $blogs = [
            [
                'image' => 'https://picsum.photos/id/1022/400/300',
                'title' => 'Aurora Borealis',
                'sub_title' => 'Discover this incredible phenomenon',
                'author' => 'Luca M.',
                'post_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem et perferendis atque quos. Corrupti, facere et, dolorum asperiores nostrum vero similique cum optio, praesentium dolor voluptatem? Beatae nostrum quibusdam sunt!',
                'published' => '2021-01-17',
            ],
            [
                'image' => 'https://picsum.photos/id/1011/400/300',
                'title' => 'Romantic lake',
                'sub_title' => 'Romantic sailing to the lake',
                'author' => 'Luca M.',
                'post_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem et perferendis atque quos. Corrupti, facere et, dolorum asperiores nostrum vero similique cum optio, praesentium dolor voluptatem? Beatae nostrum quibusdam sunt!',
                'published' => '2021-01-17',
            ],
            [
                'image' => 'https://picsum.photos/id/1000/400/300',
                'title' => 'Les Alpes',
                'sub_title' => 'Skiing in the french Alps',
                'author' => 'Luca M.',
                'post_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem et perferendis atque quos. Corrupti, facere et, dolorum asperiores nostrum vero similique cum optio, praesentium dolor voluptatem? Beatae nostrum quibusdam sunt!',
                'published' => '2021-01-17',
            ],
            [
                'image' => 'https://picsum.photos/id/1016/400/300',
                'title' => 'Grand Canyon',
                'sub_title' => 'Grand Canyon: Spectacle of nature',
                'author' => 'Luca M.',
                'post_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem et perferendis atque quos. Corrupti, facere et, dolorum asperiores nostrum vero similique cum optio, praesentium dolor voluptatem? Beatae nostrum quibusdam sunt!',
                'published' => '2021-01-17',
            ],
            ]; */


        /* foreach ($blogs as $blog) {
            $_blog = new Blog();
            $_blog->image = $blog['image'];
            $_blog->title = $blog['title'];
            $_blog->sub_title = $blog['sub_title'];
            $_blog->author = $blog['author'];
            $_blog->post_text = $blog['post_text'];
            $_blog->published = $blog['published'];
            $_blog->save();
        } */


    }
}


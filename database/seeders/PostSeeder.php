<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Factories\PostFactory;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Factoryクラスで定義した内容にもとづいてダミーデータを生成し、Postテーブルに追加する
        Post::factory()->count(5)->create();
    }
}

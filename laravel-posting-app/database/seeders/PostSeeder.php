<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // PostFactoryクラスで定義した内容に基づいてダミーデータを5つ作成し、postsテーブルに追加する
        Post::factory()->count(5)->create();
    }
}

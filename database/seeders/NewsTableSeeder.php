<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news')->insert([
            [
                'id' => 1,
                'created_at' => '2024-09-16 20:17:39',
                'updated_at' => '2024-09-16 20:17:39',
                'title' => 'Breaking News: Local Event',
                'content' => 'The content of the news article goes here. It can be quite lengthy and include details about the event.',
                'cover_image_path' => 'path/to/cover_image.jpg',
                'summary' => 'Local event details',
                'author_id' => 1,
                'tags' => json_encode(['local', 'event', 'breaking']),  // Convert JSON string to an array
                'views_count' => 120,
            ],
            [
                'id' => 2,
                'created_at' => '2024-09-16 20:18:27',
                'updated_at' => '2024-09-16 20:18:27',
                'title' => 'New Policy Changes Announced',
                'content' => 'Detailed information about the new policy changes that have been announced by the local government.',
                'cover_image_path' => 'news.png',
                'summary' => 'Summary of the new policy changes',
                'author_id' => 2,
                'tags' => json_encode(['policy', 'government', 'announcement']),
                'views_count' => 75,
            ],
            [
                'id' => 3,
                'created_at' => '2024-09-16 20:19:04',
                'updated_at' => '2024-09-16 20:19:04',
                'title' => 'Technology Conference Highlights',
                'content' => 'An overview of the key highlights and announcements from the recent technology conference.',
                'cover_image_path' => 'news.png',
                'summary' => 'Highlights from the tech conference',
                'author_id' => 3,
                'tags' => json_encode(['technology', 'conference', 'highlights']),
                'views_count' => 200,
            ],
        ]);        
    }
}

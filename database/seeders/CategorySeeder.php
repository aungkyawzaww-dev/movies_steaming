<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            "Action",
            "Adventure",
            "Animation",
            "Biography",
            "Comedy",
            "Crime",
            "Drama",
            "Family",
            "Fantasy",
            "History",
            "Horror",
            "Music",
            "Mystery",
            "Romance",
            "Science Fiction"
        ];

        foreach( $datas as $data) {
            Category::create([
                "slug" => Str::slug($data),
                "name" => $data
            ]);
        }
    }
}

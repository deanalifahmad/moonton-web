<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = [
            [
                'name' => 'Parasite',
                'slug' => 'parasite',
                'category' => 'Comedy',
                'video_url' => 'https://www.youtube.com/watch?v=5xH0HfJHsaY',
                'thumbnail' => 'https://i.ytimg.com/vi/5xH0HfJHsaY/maxresdefault.jpg',
                'rating' => 4.5,
                'is_featured' => 0,
            ],
            [
                'name' => 'The Godfather',
                'slug' => 'the-godfather',
                'category' => 'Crime',
                'video_url' => 'https://www.youtube.com/watch?v=sY1S34973zA',
                'thumbnail' => 'https://i.ytimg.com/vi/sY1S34973zA/maxresdefault.jpg',
                'rating' => 4.2,
                'is_featured' => 0,
            ],
            [
                'name' => 'The Dark Knight',
                'slug' => 'the-dark-knight',
                'category' => 'Action',
                'video_url' => 'https://www.youtube.com/watch?v=EXeTwQWrcwY',
                'thumbnail' => 'https://i.ytimg.com/vi/EXeTwQWrcwY/maxresdefault.jpg',
                'rating' => 4.0,
                'is_featured' => 0,
            ],
            [
                'name' => 'Avengers: Endgame',
                'slug' => 'avengers-endgame',
                'category' => 'Action',
                'video_url' => 'https://www.youtube.com/watch?v=TcMBFSGVi1c',
                'thumbnail' => 'https://i.ytimg.com/vi/TcMBFSGVi1c/maxresdefault.jpg',
                'rating' => 3.9,
                'is_featured' => 1,
            ],
            [
                'name' => 'Avengers: Infinity War',
                'slug' => 'avengers-infinity-war',
                'category' => 'Action',
                'video_url' => 'https://www.youtube.com/watch?v=6ZfuNTqbHE8',
                'thumbnail' => 'https://i.ytimg.com/vi/6ZfuNTqbHE8/maxresdefault.jpg',
                'rating' => 3.9,
                'is_featured' => 1,
            ],
            [
                'name' => 'Fast & Furious 7',
                'slug' => 'fast-furious-7',
                'category' => 'Action',
                'video_url' => 'https://www.youtube.com/watch?v=Skpu5HaVkOc',
                'thumbnail' => 'https://i.ytimg.com/vi/Skpu5HaVkOc/maxresdefault.jpg',
                'rating' => 3.8,
                'is_featured' => 0,
            ],
            [
                'name' => 'Zootopia',
                'slug' => 'zootopia',
                'category' => 'Animation',
                'video_url' => 'https://www.youtube.com/watch?v=jWM0ct-OLsM',
                'thumbnail' => 'https://i.ytimg.com/vi/jWM0ct-OLsM/maxresdefault.jpg',
                'rating' => 3.8,
                'is_featured' => 1,
            ],
            [
                'name' => 'Deadpool 2',
                'slug' => 'deadpool-2',
                'category' => 'Action',
                'video_url' => 'https://www.youtube.com/watch?v=D86RtevtfrA',
                'thumbnail' => 'https://i.ytimg.com/vi/D86RtevtfrA/maxresdefault.jpg',
                'rating' => 3.7,
                'is_featured' => 1,
            ],
            [
                'name' => 'Avengers: Age of Ultron',
                'slug' => 'avengers-age-of-ultron',
                'category' => 'Action',
                'video_url' => 'https://www.youtube.com/watch?v=tmeOjFno6Do',
                'thumbnail' => 'https://i.ytimg.com/vi/tmeOjFno6Do/maxresdefault.jpg',
                'rating' => 3.7,
                'is_featured' => 0,
            ],
            [
                'name' => 'Spirited Away',
                'slug' => 'spirited-away',
                'category' => 'Animation',
                'video_url' => 'https://www.youtube.com/watch?v=ByXuk9QqQkk',
                'thumbnail' => 'https://i.ytimg.com/vi/ByXuk9QqQkk/maxresdefault.jpg',
                'rating' => 3.6,
                'is_featured' => 1,
            ],
            [
                'name' => 'Forrest Gump',
                'slug' => 'forrest-gump',
                'category' => 'Drama',
                'video_url' => 'https://www.youtube.com/watch?v=bLvqoHBptjg',
                'thumbnail' => 'https://i.ytimg.com/vi/bLvqoHBptjg/maxresdefault.jpg',
                'rating' => 3.8,
                'is_featured' => 1,
            ]
        ];

        Movie::insert($movies);
    }
}

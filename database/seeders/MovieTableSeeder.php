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
                'name' => 'The Shawshank Redemption',
                'slug' => 'the-shawshank-redemption',
                'category' => 'Drama',
                'video_url' => 'https://www.youtube.com/watch?v=6hB3S9bIaco',
                'thumbnail' => 'https://i.ytimg.com/vi/6hB3S9bIaco/maxresdefault.jpg',
                'rating' => 9.3,
                'is_featured' => 1,
            ],
            [
                'name' => 'The Godfather',
                'slug' => 'the-godfather',
                'category' => 'Crime',
                'video_url' => 'https://www.youtube.com/watch?v=sY1S34973zA',
                'thumbnail' => 'https://i.ytimg.com/vi/sY1S34973zA/maxresdefault.jpg',
                'rating' => 9.2,
                'is_featured' => 1,
            ],
            [
                'name' => 'The Dark Knight',
                'slug' => 'the-dark-knight',
                'category' => 'Action',
                'video_url' => 'https://www.youtube.com/watch?v=EXeTwQWrcwY',
                'thumbnail' => 'https://i.ytimg.com/vi/EXeTwQWrcwY/maxresdefault.jpg',
                'rating' => 9.0,
                'is_featured' => 1,
            ],
            [
                'name' => 'The Godfather: Part II',
                'slug' => 'the-godfather-part-ii',
                'category' => 'Crime',
                'video_url' => 'https://www.youtube.com/watch?v=qJr9QBCJ9gk',
                'thumbnail' => 'https://i.ytimg.com/vi/qJr9QBCJ9gk/maxresdefault.jpg',
                'rating' => 9.0,
                'is_featured' => 1,
            ],
            [
                'name' => 'The Lord of the Rings: The Return of the King',
                'slug' => 'the-lord-of-the-rings-the-return-of-the-king',
                'category' => 'Adventure',
                'video_url' => 'https://www.youtube.com/watch?v=r5X-hFf6Bwo',
                'thumbnail' => 'https://i.ytimg.com/vi/r5X-hFf6Bwo/maxresdefault.jpg',
                'rating' => 8.9,
                'is_featured' => 0,
            ],
            [
                'name' => 'Pulp Fiction',
                'slug' => 'pulp-fiction',
                'category' => 'Crime',
                'video_url' => 'https://www.youtube.com/watch?v=s7EdQ4FqbhY',
                'thumbnail' => 'https://i.ytimg.com/vi/s7EdQ4FqbhY/maxresdefault.jpg',
                'rating' => 8.9,
                'is_featured' => 0,
            ],
            [
                'name' => 'Death Note',
                'slug' => 'death-note',
                'category' => 'Mystery',
                'video_url' => 'https://www.youtube.com/watch?v=5m9pOYkQj2E',
                'thumbnail' => 'https://i.ytimg.com/vi/5m9pOYkQj2E/maxresdefault.jpg',
                'rating' => 8.8,
                'is_featured' => 0,
            ],
            [
                'name' => 'The Good, the Bad and the Ugly',
                'slug' => 'the-good-the-bad-and-the-ugly',
                'category' => 'Western',
                'video_url' => 'https://www.youtube.com/watch?v=WCN5JJY_wiA',
                'thumbnail' => 'https://i.ytimg.com/vi/WCN5JJY_wiA/maxresdefault.jpg',
                'rating' => 8.9,
                'is_featured' => 0,
            ],
            [
                'name' => 'Fight Club',
                'slug' => 'fight-club',
                'category' => 'Drama',
                'video_url' => 'https://www.youtube.com/watch?v=SUXWAEX2jlg',
                'thumbnail' => 'https://i.ytimg.com/vi/SUXWAEX2jlg/maxresdefault.jpg',
                'rating' => 8.8,
                'is_featured' => 0,
            ],
            [
                'name' => 'Spirited Away',
                'slug' => 'spirited-away',
                'category' => 'Animation',
                'video_url' => 'https://www.youtube.com/watch?v=ByXuk9QqQkk',
                'thumbnail' => 'https://i.ytimg.com/vi/ByXuk9QqQkk/maxresdefault.jpg',
                'rating' => 8.6,
                'is_featured' => 0,
            ],
            [
                'name' => 'Forrest Gump',
                'slug' => 'forrest-gump',
                'category' => 'Drama',
                'video_url' => 'https://www.youtube.com/watch?v=bLvqoHBptjg',
                'thumbnail' => 'https://i.ytimg.com/vi/bLvqoHBptjg/maxresdefault.jpg',
                'rating' => 8.8,
                'is_featured' => 1,
            ]
        ];

        Movie::insert($movies);
    }
}

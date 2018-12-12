<?php

use Illuminate\Database\Seeder;
use App\Genre;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->delete();
        $genres= [
          'Science Fiction',
          'Satire',
          'Drama',
          'Action and Adventure',
          'Romance',
          'Mistery',
          'Horror',
          'Self Help',
          'Health',
          'Guide',
          'Travel',
          'Children\'s',
          'Religion and Spirituality',
          'Science',
          'History',
          'Math',
          'Anthology',
          'Poetry',
          'Encyclopedias',
          'Dictionaries',
          'Comics',
          'Art',
          'Cookbooks',
          'Diaries',
          'Journals',
          'Series',
          'Biographies',
          'Fantasy'
        ];
        foreach ($genres as $genre) {
          Genre::create(array(
            'name' => $genre
          ));
        }
    }
}

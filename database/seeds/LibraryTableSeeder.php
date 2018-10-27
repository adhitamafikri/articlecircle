<?php

use Illuminate\Database\Seeder;
use App\Library;
use App\Article;

class LibraryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Articles for library
    	$article1 = Article::find(1);
    	$article2 = Article::find(4);
    	$article3 = Article::find(8);
    	$article4 = Article::find(5);

    	// library for Adhitama
        $lib = new Library();
        $lib->user_id = 1;
        $lib->name = 'Daily';
        $lib->cover_image = '/library covers/science1.jpg';
        $lib->description = 'Readings of Science topics';
        $lib->save();
        $lib->articles()->attach($article1);

        // library for Bellanoche
        $lib = new Library();
        $lib->user_id = 2;
        $lib->name = 'My Lifestyle';
        $lib->cover_image = '/library covers/lifestyle2.jpg';
        $lib->description = 'Good readings for better lifestyle';
        $lib->save();
        $lib->articles()->attach($article3);

        $lib = new Library();
        $lib->user_id = 2;
        $lib->name = 'Todays Tech';
        $lib->cover_image = '/library covers/tech1.jpg';
        $lib->description = 'Good readings for you to keep up with latest tech';
        $lib->save();
        $lib->articles()->attach($article2);
        $lib->articles()->attach($article4);
    }
}

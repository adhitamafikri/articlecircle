<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat = new Category();
        $cat->name = 'Science';
        $cat->color = 'DodgerBlue';
        $cat->save();

        $cat = new Category();
        $cat->name = 'Technology';
        $cat->color = 'Teal';
        $cat->save();

        $cat = new Category();
        $cat->name = 'Lifestyle';
        $cat->color = 'YellowGreen';
        $cat->save();

        $cat = new Category();
        $cat->name = 'Entertainment';
        $cat->color = 'FireBrick';
        $cat->save();
    }
}

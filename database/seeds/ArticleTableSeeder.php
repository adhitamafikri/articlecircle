<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Article;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Science Article
        $article_sci = new Article();
        $article_sci->category_id = 1;
        $article_sci->title = 'Scientists Have Discovered a New Kind of Particle';
        $article_sci->brief_description = 'After a couple months of research on the Large Hadron Collider, a New Kind of Extraterestrial Particle is Finally Discovered';
        $article_sci->article_body = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
		$article_sci->article_image = 'https://futurism.com/wp-content/uploads/2013/09/quantum-mechanics.jpg';
        $article_sci->save();

        $article_sci = new Article();
        $article_sci->category_id = 1;
        $article_sci->title = 'Scientists Have Discovered a New Kind of Particle';
        $article_sci->brief_description = 'After a couple months of research on the Large Hadron Collider, a New Kind of Extraterestrial Particle is Finally Discovered';
        $article_sci->article_body = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        $article_sci->article_image = 'https://futurism.com/wp-content/uploads/2013/09/quantum-mechanics.jpg';
		$article_sci->save();

        $article_sci = new Article();
        $article_sci->category_id = 1;
        $article_sci->title = 'Scientists Have Discovered a New Kind of Particle';
        $article_sci->brief_description = 'After a couple months of research on the Large Hadron Collider, a New Kind of Extraterestrial Particle is Finally Discovered';
        $article_sci->article_body = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
		$article_sci->article_image = 'https://futurism.com/wp-content/uploads/2013/09/quantum-mechanics.jpg';
        $article_sci->save();

        // Technology Article
        $article_tech = new Article();
        $article_tech->category_id = 2;
        $article_tech->title = 'Tesla Model S is The Most Eccentric Electric Roadster To Date';
        $article_tech->brief_description = 'Elon Musk released his newest roadster Tesla Model S';
        $article_tech->article_body = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
		$article_tech->article_image = 'https://www.tesla.com/tesla_theme/assets/img/models/v1.0/slideshow/Red_Bay-1440.jpg?20171005';
        $article_tech->save();

        $article_tech = new Article();
        $article_tech->category_id = 2;
        $article_tech->title = 'Tesla Model S is The Most Eccentric Electric Roadster To Date';
        $article_tech->brief_description = 'Elon Musk released his newest roadster Tesla Model S';
        $article_tech->article_body = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
		$article_tech->article_image = 'https://www.tesla.com/tesla_theme/assets/img/models/v1.0/slideshow/Red_Bay-1440.jpg?20171005';
        $article_tech->save();

        $article_tech = new Article();
        $article_tech->category_id = 2;
        $article_tech->title = 'Tesla Model S is The Most Eccentric Electric Roadster To Date';
        $article_tech->brief_description = 'Elon Musk released his newest roadster Tesla Model S';
        $article_tech->article_body = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
		$article_tech->article_image = 'https://www.tesla.com/tesla_theme/assets/img/models/v1.0/slideshow/Red_Bay-1440.jpg?20171005';
        $article_tech->save();

        // Lifestyle articles
        $article_life = new Article();
        $article_life->category_id = 3;
        $article_life->title = 'Healthier Body With Aerobic Exercises';
        $article_life->brief_description = 'Routinely doing aerobic exerices every week will make you healthier';
        $article_life->article_body = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        $article_life->article_image = 'http://running.competitor.com/files/2013/12/shutterstock_150981047.jpg';
        $article_life->save();

        $article_life = new Article();
        $article_life->category_id = 3;
        $article_life->title = 'Healthier Body With Aerobic Exercises';
        $article_life->brief_description = 'Routinely doing aerobic exerices every week will make you healthier';
        $article_life->article_body = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        $article_life->article_image = 'http://running.competitor.com/files/2013/12/shutterstock_150981047.jpg';
        $article_life->save();

        $article_life = new Article();
        $article_life->category_id = 3;
        $article_life->title = 'Healthier Body With Aerobic Exercises';
        $article_life->brief_description = 'Routinely doing aerobic exerices every week will make you healthier';
        $article_life->article_body = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        $article_life->article_image = 'http://running.competitor.com/files/2013/12/shutterstock_150981047.jpg';
        $article_life->save();
    }
}

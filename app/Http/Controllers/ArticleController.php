<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;
use App\Library;
use App\User;
use App\ScrapedArticle;
use DB;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
	// First page of website
    public function index(){        
        //variables
    	$sci_articles  = Category::where('name', 'Science')->first()->scraped->take(3);
    	$tech_articles = Category::where('name', 'Technology')->first()->scraped->take(3);
        $life_articles = Category::where('name', 'Lifestyle')->first()->scraped->take(3);
    	
    	return view('homepage', compact('sci_articles', 'tech_articles', 'life_articles'));
    }

    // Show article
    public function show($article_id){
    	// $article = Article::find($article_id);
    	$article = Article::find($article_id);

    	return view('show', compact('article'));
    }

    // Show article from scraped content
    public function showScraped($article_id){
        $article = ScrapedArticle::find($article_id);

        return view('showscraped', compact('article'));
    }

}

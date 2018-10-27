<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Article;
use App\ScrapedArticle;

class CategoryController extends Controller
{
    // Get all Articles from all categories
    public function categories(){
        // variables
        $count = 1;
        // get all available categories to put into sidebar
        $categories = Category::all();
        // get all articles with every categories when user first open categories page
        $articles = Article::distinct('category_id')->get();

        // get all scraped articles
        $scrapeds = ScrapedArticle::all();
        $shuffled = $scrapeds->shuffle();
        $scraped_articles = $shuffled->all();
        
        // dd($articles);
        return view('categories', compact('count', 'categories', 'articles', 'scraped_articles'));
    }

    // Get all Articles from one category
    public function category($category_id){
        // variables
        $count = 1;
        // get all available categories to put into sidebar
        $categories = Category::all();
        // get all articles from corressponding category
        $articles = Category::find($category_id)->articles()->simplePaginate(9);

        // get all articles from corressponding category
        $scraped_articles = Category::find($category_id)->scraped()->simplePaginate(9);

        return view('categories', compact('count', 'categories', 'articles', 'scraped_articles'));
    }
}

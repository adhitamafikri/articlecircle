<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library;
use App\Category;
use App\Article;
use App\User;
use App\ScrapedArticle;
use Illuminate\Support\Facades\Auth;

class LibraryController extends Controller
{
    public function createLibrary(Request $request){
        // create the library
        Library::create([
            'user_id' => $request->input('user_id'),
            'name' => $request->input('library_name'),
            'description' => $request->input('library_description'),
            'cover_image' => $request->input('radio_cover'),
        ]);

        // retrieve libraries
        $libraries = User::find(Auth::user()->id)->libraries;

        return view ('dashboard', compact('libraries'));
    }

    // get a library and its articles
    public function getLibrary($library_id){
        // retrieve all articles from this library
        $library = Library::find($library_id);
        $articles = $library->articles;
        $scraped_articles = $library->scraped;

        return view ('library', compact('articles', 'library', 'scraped_articles'));
    }

    // Add an Article to a Library
    public function addToLibrary($library_id, $article_id){
        // variables
        $count = 1;
        
        // get the corressponding library first
        $library = Library::find($library_id);
        // get the article to add to the library
        $article = Article::find($article_id);
        // attach the article to the Library
        $library->articles()->attach($article);

        // get all available categories to put into sidebar
        $categories = Category::all();
        // get all articles with every categories when user first open categories page
        $articles = Article::simplePaginate(9);
        // get all scraped articles
        $scrapeds = ScrapedArticle::all();
        $shuffled = $scrapeds->shuffle();
        $scraped_articles = $shuffled->all();

        // dd($articles);
        // return redirect()->route('categories')->with(compact('count', 'categories', 'articles', 'scraped_articles'));
        return redirect()->back();
    }

    // Add a Scraped Article to a Library
    public function addScrapedToLibrary($library_id, $article_id){
        // variables
        $count = 1;
        
        // get the corressponding library first
        $library = Library::find($library_id);
        // get the article to add to the library
        $article = ScrapedArticle::find($article_id);
        // attach the article to the Library
        $library->scraped()->attach($article);

        // get all available categories to put into sidebar
        $categories = Category::all();
        // get all articles with every categories when user first open categories page
        $articles = Article::simplePaginate(9);
        // get all scraped articles
        $scrapeds = ScrapedArticle::all();
        $shuffled = $scrapeds->shuffle();
        $scraped_articles = $shuffled->all();
        
        // dd($articles);
        // return redirect()->route('categories')->with(compact('count', 'categories', 'articles', 'scraped_articles'));
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Article;

class AdminController extends Controller
{
    public function index(){
    	$categories = Category::all();
    	return view('admin.dashboard', compact('categories'));
    }

    public function getArticles($category_id){
    	$articles = Category::find($category_id)->articles;
    	return view('admin.articles', compact('articles'));
    }
}

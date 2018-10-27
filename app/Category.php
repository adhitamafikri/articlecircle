<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = ['category_name', 'article_id'];

    public function articles(){
    	return $this->hasMany(Article::class);
    }

    public function scraped(){
    	return $this->hasMany(ScrapedArticle::class);
    }
}

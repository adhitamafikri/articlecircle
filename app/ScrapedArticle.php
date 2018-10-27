<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScrapedArticle extends Model
{
    protected $fillable = ['category_id', 'title', 'brief_description', 'article_body', 'article_image', 'source'];

    public function category(){
    	return $this->belongsTo(Category::class);
    }

    public function library(){
    	return $this->belongsToMany(Library::class);
    }
}

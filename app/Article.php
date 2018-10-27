<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = ['category_id', 'title', 'brief_description', 'article_body', 'article_image'];

    // category of this article
    public function category(){
    	return $this->belongsTo(Category::class);
    }

    // Owner/author of this article
    public function users(){
    	return $this->belongsTo(User::class);
    }

    // Libraries containing this article
    public function libraries(){
    	return $this->belongsToMany(Article::class);
    }
}

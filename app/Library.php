<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    protected $fillable = ['user_id', 'name', 'description', 'cover_image'];

    // the owner of library
    public function user(){
    	return $this->belongsTo(User::class);
    }

    // articles in this library
    public function articles(){
    	return $this->belongsToMany(Article::class);
    }

    public function scraped(){
    	return $this->belongsToMany(ScrapedArticle::class);
    }
}

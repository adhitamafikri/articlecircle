<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Article;
use App\ScrapedArticle;

class ScrapedArticleController extends Controller
{
    public function index(){
    	$categories = Category::all();
    	return view('admin.scrape', compact('categories'));
    }

    public function scrapeScience(){
        $article_title = '';
    	$science 	= Category::where('name', 'Science')->first();
        // Grab articles For Technology
        // Create DOM from URL or File
        $html       = str_get_html(file_get_contents("http://www.sciencealert.com/space"));
        // how many times will we find
        $i          = 2;
        foreach($html->find("div.article-container-height") as $element){
            if($i > 7) break;
            $specific   = $html->find("div.article-container-".$i."-odd");
            $detail     = $specific[0]->find("a", 0);
            $imgs       = $specific[0]->find("img", 0);
            $img        = $imgs->src;
            $url        = $detail->href;
            // get the url for the articles cover image and link to full article
            $img_url    = "http://www.sciencealert.com" . $img;
            $link_url   = "http://www.sciencealert.com" . $url;
            
            // get article title
            foreach($specific[0]->find("div.titletext") as $elem){
                $article_title = $elem->find("a", 0);
            }

            // go inside the link to scrape article body
            $new_html = str_get_html(file_get_contents($link_url));
            foreach($new_html->find("div.article-mainbody-container") as $elem){
            	$article_body = ($elem->find("div.article-fulltext", 0));
            }

            // get article body

            // store the image url, link url, title, and body into collection
            $article = new ScrapedArticle();
            $article->category_id = $science->id;
            $article->title = $article_title->plaintext;
            $article->brief_description = $article_title->plaintext;
            $article->article_body = $article_body;
            $article->article_image = $img_url;
            $article->source = 'Science Alert';
            $article->save();
            
            $i++;
        }
        return redirect('admin/scrape');
    }

    public function scrapeTech(){
        $article_title = '';
        $tech    = Category::where('name', 'Technology')->first();
        // Grab articles For Technology
        // Create DOM from URL or File
        $html       = str_get_html(file_get_contents("http://www.sciencealert.com/tech"));
        // how many times will we find
        $i          = 2;
        foreach($html->find("div.article-container-height") as $element){
            if($i > 7) break;
            $specific   = $html->find("div.article-container-".$i."-odd");
            $detail     = $specific[0]->find("a", 0);
            $imgs       = $specific[0]->find("img", 0);
            $img        = $imgs->src;
            $url        = $detail->href;
            // get the url for the articles cover image and link to full article
            $img_url    = "http://www.sciencealert.com" . $img;
            $link_url   = "http://www.sciencealert.com" . $url;
            
            // get article title
            foreach($specific[0]->find("div.titletext") as $elem){
                $article_title = $elem->find("a", 0);
            }

            // go inside the link to scrape article body
            $new_html = str_get_html(file_get_contents($link_url));
            foreach($new_html->find("div.article-mainbody-container") as $elem){
                $article_body = ($elem->find("div.article-fulltext", 0));
            }

            // get article body

            // store the image url, link url, title, and body into collection
            $article = new ScrapedArticle();
            $article->category_id = $tech->id;
            $article->title = $article_title->plaintext;
            $article->brief_description = $article_title->plaintext;
            $article->article_body = $article_body;
            $article->article_image = $img_url;
            $article->source = 'Science Alert';
            $article->save();
            
            $i++;
        }
        return redirect('admin/scrape');
    }

    public function scrapeLifestyle(){
        $article_title = '';
        $life       = Category::where('name', 'Lifestyle')->first();
        // Grab articles For Technology
        // Create DOM from URL or File
        $html       = str_get_html(file_get_contents("http://www.seventeen.com/life/"));
        // how many times will we find
        $i          = 0;
        foreach($html->find("div.full-item") as $element){
            if($i == 6) break;
            $detail     = $element->find("a", 0);
            $imgs       = $element->find("img", 0);
            $img        = $imgs->src;
            $url        = $detail->href;
            // get the url for the articles cover image and link to full article
            $img_url    = str_replace("data:image/gif;base64,", "x", $img);
            $link_url   = "http://www.seventeen.com" . $url;
            
            // get article title
            foreach($element->find("div.full-item-content") as $elem){
                $article_title = $elem->find("a", 0);
            }

            // go inside the link to scrape article body
            $new_html = str_get_html(file_get_contents($link_url));
            foreach($new_html->find("div.standard-body") as $elem){
                $article_body = ($elem->find("div.standard-body-content", 0));
            }

            // store the image url, link url, title, and body into collection
            $article = new ScrapedArticle();
            $article->category_id = $life->id;
            $article->title = $article_title->plaintext;
            $article->brief_description = $article_title->plaintext;
            $article->article_body = $article_body;
            $article->article_image = 'https://orig00.deviantart.net/f7c4/f/2015/030/b/7/_minflat__default_windows_8_1_wallpaper__4k__by_dakoder-d7j7i5a.jpg';
            $article->source = 'Seventeen';
            $article->save();
            
            $i++;
        }
        return redirect('/admin/scrape');
    }

    public function scrape($category_id){
    	if($category_id == 1) $this->scrapeScience();
        if($category_id == 2) $this->scrapeTech();
        if($category_id == 3) $this->scrapeLifestyle();
    }
}

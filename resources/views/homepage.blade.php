@extends ('layouts.homepage')
@section ('content')
<!-- content -->
<div id="container">
    <div id="main" class="container-fluid">
        <!-- big homepage content -->
        <div class="container-fluid" style="height: 500px;">
            <div class="row" style="height: 100%;">
                <div class="col-md-6 article-thumbnail-left">
                    <div class="article-category" style="width: 30%; text-align: center;">
                        <h4 class="article-category-text" style="padding: 3%;">Science</h4>
                    </div>
                </div>
                <div class="container-fluid" style="height: 100%;">
                    <div class="row" style="height: 100%;">
                         <div class="col-md-6 article-thumbnail-right atr1">
                            <div class="article-category" style="width: 30%; text-align: center;">
                                <h4 class="article-category-text" style="padding: 3%;">Technology</h4>
                            </div>
                        </div>
                        <div class="col-md-6 article-thumbnail-right atr2">
                            <div class="article-category" style="width: 30%; text-align: center;">
                                <h4 class="article-category-text" style="padding: 3%;">Science</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Top Picks -->
        <div class="container-fluid" style="width: 95%;">
            <h1>Top Picks</h1>
            <br><br>

            <!-- Science Articles Picks -->
            <div class="article-category-{{$sci_articles->first()->category->name}}" style="width: 15%; text-align: center; margin-bottom: 2%;">
                <h5 class="article-category-text">Science</h5>
            </div>
            <div class="container-fluid article-panel-holder">
                @foreach($sci_articles as $article)
                <a href="{{ route('show scraped', ['article_id' => $article->id]) }}" class="container-fluid article-panel article-panel-{{$article->category->name}}">
                    <div class="container-fluid article-image" style="background: url('{{$article->article_image}}') no-repeat center; background-size: 140%;">
                    </div>
                    <div class="container-fluid article-header">
                         <h4><strong>{{$article->title}}</strong></h4>
                         <i>By {{$article->source}}</i>
                    </div>
                   
                   <div class="container-fluid article-description" style="margin-top: 4%;">
                        <p>{{$article->brief_description}}</p>
                    </div> 
                </a>
                @endforeach
            </div>

            <!-- Tech Articles Picks -->
            <div class="article-category-{{$tech_articles->first()->category->name}}" style="width: 15%; text-align: center; margin-bottom: 2%;">
                <h5 class="article-category-text">Technology</h5>
            </div>
            <div class="container-fluid article-panel-holder">
                @foreach($tech_articles as $article)
                <a href="{{ route('show scraped', ['article_id' => $article->id]) }}" class="container-fluid article-panel article-panel-{{$article->category->name}}">
                    <div class="container-fluid article-image" style="background: url('{{$article->article_image}}') no-repeat center; background-size: 140%;">
                    </div>
                    <div class="container-fluid article-header">
                         <h4><strong>{{$article->title}}</strong></h4>
                         <i>By {{$article->source}}</i>
                    </div>
                   
                    <div class="container-fluid article-description" style="margin-top: 4%;">
                        <p>{{$article->brief_description}}f</p>
                    </div> 
                </a>
                @endforeach
            </div>

            <!-- Lifestyle Articles Picks -->
            <div class="article-category-{{$life_articles->first()->category->name}}" style="width: 15%; text-align: center; margin-bottom: 2%;">
                <h5 class="article-category-text">Lifestyle</h5>
            </div>
            <div class="container-fluid article-panel-holder">
                @foreach($life_articles as $article)
                <a href="{{ route('show scraped', ['article_id' => $article->id]) }}" class="container-fluid  article-panel article-panel-{{$article->category->name}}">
                    <div class="container-fluid article-image" style="background: url('{{$article->article_image}}') no-repeat center; background-size: 140%;">
                    </div>
                    <div class="container-fluid article-header">
                         <h4><strong>{{$article->title}}</strong></h4>
                         <i>By {{$article->source}}</i>
                    </div>
                   
                    <div class="container-fluid article-description" style="margin-top: 4%;">
                        <p>{{$article->brief_description}}f</p>
                    </div> 
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
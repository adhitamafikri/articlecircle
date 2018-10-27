@extends('admin.layouts.articles')

@section('content')
<div id="container">
    <div id="main" class="container-fluid">
    	<div class="jumbotron cover-image" style="height: 400px; background: linear-gradient(-140deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 1)), url('https://lidenz.ru/wp-content/uploads/2015/04/376152628_249e3630c0_o.jpg') no-repeat center; background-size: cover;">
            <h2 style="color: white;">Hello, {{Auth::user()->name}}</h2>
        </div>
        <!-- Div containing all articles -->
	    <div class="container-fluid" style="display: flex; justify-content: space-around; flex-wrap: wrap; height: auto;">         
	    	@foreach ($articles as $article)
	    		<a href="/categories/show/{{$article->id}}" class="container-fluid article-panel article-panel-{{$article->category->name}}" style="width: 30%; border-bottom: 5px solid {{$article->category->color}}; padding: 0; box-shadow: 8px 8px 10px rgba(0, 0, 0, 0.4); height: 450px; margin-bottom: 3%;">
                    <div class="container-fluid article-image" style="background: url('{{$article->article_image}}') no-repeat center; background-size: 140%; height: 250px;">
                    </div>
                    <div class="container-fluid article-header">
                         <h4><strong>{{$article->title}}</strong></h4>
                         <i>By Adhitama F, {{ date('Y-M-d') }}</i>
                    </div>
                   
                    <div class="container-fluid article-description" style="margin-top: 4%;">
                        <p>{{$article->brief_description}}f</p>
                    </div> 
                </a>
	    	@endforeach
	    </div>
    </div>
</div>

@endsection

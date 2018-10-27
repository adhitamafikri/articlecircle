@extends ('layouts.library')

@section ('content')
<div id="container">
	<div id="main" class="container-fluid">
		<div class="jumbotron library-cover" style="background: linear-gradient(-120deg, rgba(0, 0, 0, 0.0), rgba(0, 0, 0, 0.85)), url('{{ $library->cover_image }}') no-repeat center; background-size: cover; background-attachment: fixed;">
			<h1 class="library-t">``{{$library->name}}``</h1>
			<h2 class="library-description"><i>{{$library->description}}</i></h2>
		</div>
		@foreach ($articles as $article)
		<div class="container">
			<h1>{{$article->title}}</h1>
			<i>{{$article->brief_description}}</i>
			<p>{{$article->article_body}}</p>
		</div>
		@endforeach
		@foreach ($scraped_articles as $article)
		<div class="container">
			<h1>{{$article->title}}</h1>
			<i>{{$article->brief_description}}</i>
			<p>{{$article->article_body}}</p>
		</div>
		@endforeach
	</div>
</div>
@endsection
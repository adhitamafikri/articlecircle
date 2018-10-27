@extends ('layouts.show')

@section ('content')
<div id="container">
	<div id="main" class="container-fluid">
		<!-- Big Cover image -->
		<div class="container-fluid article-image-big" style="background: linear-gradient(-120deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 1)), url('{{$article->article_image}}') no-repeat center; background-size: 140%;">
			<!-- Contains Title, date, and author -->
			<div class="container-fluid article-detail-holder">
				<div class="article-category article-category-{{$article->category->name}}">
		            <h5 class="article-category-text" style="padding: 3%;">Technology</h5>
		        </div>
				<strong class="article-show-title">{{$article->title}}</strong>
				<h5 class="article-show-detail"><i>by {{$article->source}}</i></h5>
			</div>
		</div>
		
		<!-- Description / Trivia -->
		<div class="container article-description-holder">
			<h3>In Brief</h3>
			<div class="line-border"></div>
			<h4><i>Test</i></h4>
		</div>

		<!-- Article Body -->
		<div class="container article-body-holder">
			<p class="article-show-body">{!!$article->article_body!!}</p>
		</div>
	</div>
</div>
@endsection
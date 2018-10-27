@extends ('layouts.categories')

@section ('content')
<div id="container" style="display: flex; justify-content: space-between;">
	<div id="main" class="container-fluid">
		<!-- a container that contains sidebar and articles -->
		<div class="container-fluid sidebar-article-holder">

			<!-- Sidebar -->
			<div class="container-fluid sidebar">
				<a href="{{ url('categories') }}"><h2>All Categories</h2></a>
				@foreach ($categories as $category)
				<div class="category-link" style="border-right: 5px solid {{ $category->color }}">
					<a href="{{ url('categories', ['category_id' => $category->id]) }}">{{ $category->name }}</a>
				</div>
				@endforeach
			</div>

			<!-- Div contains all articles from selected category -->
			<div class="container-fluid articles-holder">
				<!-- Articles From Article Circle -->
				@foreach ($articles as $article)
				<!--  each article has its own holder  -->
				@if ($count % 2 != 0)
				<div class="container-fluid article-panel-holder aph-left" style="border-left: 7px solid {{ $article->category->color }}">
					<a href="{{ route('show', ['article_id' => $article->id]) }}" class="container-fluid" style="padding: 0;">
						<div class="container-fluid article-link-panel" style="background: linear-gradient(-120deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.85)), url('{{$article->article_image}}') no-repeat center; background-size: 120%;">
							<!-- a div contains title, author -->
							<div class="container-fluid article-detail-holder">
								<h3>{{ $article->title }}</h3>
								<i>By Article Circle</i>
							</div>
						</div>
					</a>
					<!-- Available actions for this article -->
					@include ('misc.action', ['class' => 'aah-right'])
				</div>
				@elseif ($count % 2 == 0)
				<div class="container-fluid article-panel-holder aph-right" style="border-right: 7px solid {{ $article->category->color }};">
					<a href="{{ route('show', ['article_id' => $article->id]) }}" class="container-fluid" style="padding: 0;">
						<div class="container-fluid article-link-panel" style="background: linear-gradient(-120deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.85)), url('{{$article->article_image}}') no-repeat center; background-size: 120%;">
							<!-- a div contains title, author -->
							<div class="container-fluid article-detail-holder">
								<h3>{{ $article->title }}</h3>
								<i>By Article Circle</i>
							</div>
						</div>
					</a>
					<!-- Available actions for this article -->
					@include ('misc.action', ['class' => 'aah-left'])
				</div>
				@endif
				<p hidden>{{$count++}}</p>

				<!-- Modal div for adding article to library -->
				@if(Auth::guest())
					@include ('modals.authorize')
				@else
					@include ('modals.add to library', ['libraries' => Auth::user()->libraries, 'article_id' => $article->id])
				@endif
				@endforeach

				<!-- Scraped Articles -->
				@foreach ($scraped_articles as $article)
				<!--  each article has its own holder  -->
				@if ($count % 2 != 0)
				<div class="container-fluid article-panel-holder aph-left" style="border-left: 7px solid {{ $article->category->color }}">
					<a href="{{ route('show scraped', ['article_id' => $article->id]) }}" class="container-fluid" style="padding: 0;">
						<div class="container-fluid article-link-panel" style="background: linear-gradient(-120deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.85)), url('{{$article->article_image}}') no-repeat center; background-size: 120%;">
							<!-- a div contains title, author -->
							<div class="container-fluid article-detail-holder">
								<h3>{{ $article->title }}</h3>
								<i>By {{$article->source}}</i>
							</div>
						</div>
					</a>
					<!-- Available actions for this article -->
					@include ('misc.scraped action', ['class' => 'aah-right'])
				</div>
				@elseif ($count % 2 == 0)
				<div class="container-fluid article-panel-holder aph-right" style="border-right: 7px solid {{ $article->category->color }};">
					<a href="{{ route('show scraped', ['article_id' => $article->id]) }}" class="container-fluid" style="padding: 0;">
						<div class="container-fluid article-link-panel" style="background: linear-gradient(-120deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.85)), url('{{$article->article_image}}') no-repeat center; background-size: 120%;">
							<!-- a div contains title, author -->
							<div class="container-fluid article-detail-holder">
								<h3>{{ $article->title }}</h3>
								<i>By {{$article->source}}</i>
							</div>
						</div>
					</a>
					<!-- Available actions for this article -->
					@include ('misc.scraped action', ['class' => 'aah-left'])
				</div>
				@endif
				<p hidden>{{$count++}}</p>

				<!-- Modal div for adding article to library -->
				@if(Auth::guest())
					@include ('modals.authorize')
				@else
					@include ('modals.scraped to library', ['libraries' => Auth::user()->libraries, 'article_id' => $article->id])
				@endif
				@endforeach
			</div>
		</div>
		
	</div>
</div>
@endsection
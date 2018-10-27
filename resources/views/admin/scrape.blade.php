@extends('admin.layouts.scrape')

@section('content')
<div id="container">
    <div id="main" class="container-fluid">
        <div class="jumbotron cover-image" style="height: 400px; background: linear-gradient(-140deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 1)), url('/admin images/scrape.jpg') no-repeat center; background-size: cover;">
            <h2 style="color: white;">Hello, {{Auth::user()->name}}</h2>
            <h5><i style="color: white;">Click one of the categories below to scrape articles from other website</i></h5>
        </div>
        <!-- Div containing all options -->
	    <div class="container-fluid" style="display: flex; justify-content: space-around; flex-wrap: wrap; height: auto;">
	    	@foreach ($categories as $category)
	    		<a href="/admin/scrape/{{$category->id}}" class="container-fluid category-panel" style="background-color: {{$category->color}}; width: 30%; margin-bottom: 3%; box-shadow: 8px 8px 10px rgba(0, 0, 0, 0.4);">
	    			<h2>{{$category->name}}</h2>
	    		</a>
	    	@endforeach
	    </div>
    </div>
</div>

@endsection

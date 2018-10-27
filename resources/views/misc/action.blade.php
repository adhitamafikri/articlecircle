<div class="container-fluid article-action-holder {{ $class }}">
	@if (Auth::guest())
	<i class="btn action-add" type="button" data-toggle="modal" data-target="#authorize">
		<span class="glyphicon glyphicon-plus"></span>
	</i>
	@else
	<i class="btn action-add" type="button" data-toggle="modal" data-target="#add-{{ $article->id }}-to-library">
		<span class="glyphicon glyphicon-plus"></span>
	</i>
	@endif
	<img src="{{ asset('/icons/facebook.png') }}" style=" height: 20%;">
	<img src="{{ asset('/icons/twitter.png') }}" style=" height: 20%;">
</div>
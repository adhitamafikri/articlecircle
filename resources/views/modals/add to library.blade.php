<div id="add-{{ $article->id }}-to-library" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add To Your Library</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid article-library-holder">
          @if (count($libraries) == 0)
            <h1>Its lonely in here, create a library to save this article :)</h1>
          @else
            @foreach ($libraries as $library)
              <a href="{{ route('article to library', ['library_id' => $library->id, 'article_id' => $article_id]) }}" class="container article-library-link" style="background: linear-gradient(-100deg, rgba(0, 0, 0, 0.0), rgba(0, 0, 0, 0.6)), url('{{$library->cover_image}}') no-repeat center; background-size: 140%;">
                  <i class="article-library-title">{{$library->name}}</i>
              </a>
            @endforeach
          @endif
        </div>
      </div>

      <!-- Modal Footer -->
      <div class="modal-footer">
        <a href="{{ url('dashboard ')}}" class="btn">Create New Library</a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
      
    </div>
  </div>
</div>
  <div id="new-library" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Create New Library</h4>
      </div>
      <div class="modal-body">
        <!-- Form opening -->
        <form class="" role="form" enctype="multipart/form-data" method="post" action="{{ route('new library') }}">
          {{ csrf_field() }}
          <!-- Library name -->
          <p>Library Name</p>
          <div class="form-group{{ $errors->has('library_name') ? ' has-error' : '' }}">    
            <center><input id="library-name" type="text" class="form-control" name="library_name" placeholder="Library Name"></center>

            @if ($errors->has('library_name'))
            <center><span class="help-block">
              <strong>{{ $errors->first('library_name') }}</strong>
            </span></center>
            @endif  
          </div>
          <!-- Library Description -->
          <p>Library Description</p>
          <div class="form-group{{ $errors->has('library_description') ? ' has-error' : '' }}">    
            <center><input id="library-description" type="text" class="form-control" name="library_description" placeholder="Library Description"></center>

            @if ($errors->has('llibrary_description'))
            <center><span class="help-block">
              <strong>{{ $errors->first('library_description') }}</strong>
            </span></center>
            @endif  
          </div>
          <!-- hidden input for user_id -->
          <input id="user-id" type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}">

          <!-- select cover image for library -->
          <p>Select Cover Image</p>
          <div class="form-group{{ $errors->has('radio_cover') ? ' has-error' : '' }}">
            <div class="container-fluid cover-image-holder">
              <div class="container-fluid cover-image-select" style="background: url('/library covers/tech1.jpg') no-repeat center; background-size: 100%;">
                <input type="radio" class="form-control" name="radio_cover" value="/library covers/tech1.jpg">
              </div>
              <div class="container-fluid cover-image-select" style="background: url('/library covers/lifestyle1.jpg') no-repeat center; background-size: 100%;">
                <input type="radio" class="form-control" name="radio_cover" value="/library covers/lifestyle1.jpg">
              </div>
              <div class="container-fluid cover-image-select" style="background: url('/library covers/lifestyle2.jpg') no-repeat center; background-size: 100%;">
                <input type="radio" class="form-control" name="radio_cover" value="/library covers/lifestyle2.jpg">
              </div>
              <div class="container-fluid cover-image-select" style="background: url('/library covers/science1.jpg') no-repeat center; background-size: 100%;">
                <input type="radio" class="form-control" name="radio_cover" value="/library covers/science1.jpg">
              </div>
            </div>
            @if ($errors->has('radio_cover'))
              <center><span class="help-block">
                <strong>{{ $errors->first('radio_cover') }}</strong>
              </span></center>
            @endif
          </div>
      </div>

      <!-- Modal Footer -->
      <div class="modal-footer">
        <input type="submit" class="btn" name="submit" value="Create">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
      </form><!-- End of Form -->
    </div>
  </div>
</div>
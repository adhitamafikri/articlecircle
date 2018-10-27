<div id="authorize" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">You Need To Be Logged In</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid" style="height: 200px; display: flex; justify-content: space-between; flex-wrap: wrap; overflow: auto;">
          <a href="{{ route('login') }}"><h1>Login First</h1></a>
          <a href="{{ route('register') }}"><h1>Register</h1></a>
        </div>
      </div>

      <!-- Modal Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
      
    </div>
  </div>
</div>
<div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="LoginModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="LoginModal">Login To Blog World</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="handle_login.php" method="post" >
      <div class="modal-body">
          <div class="form-group">
            <label for="loginEmail">Username</label>
            <input type="text" class="form-control" id="loginEmail" name="loginEmail" aria-describedby="emailHelp" placeholder="Enter Username">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
          <div class="form-group">
            <label for="loginPass">Password</label>
            <input type="password" class="form-control" id="loginPass" name="loginPass" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary my-2">Login</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>
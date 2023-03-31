<div class="modal fade" id="SignUpModal" tabindex="-1" role="dialog" aria-labelledby="SignUpModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="SignUpModal">Register Your Blog World Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="./handle_signup.php" method="post">
      <div class="modal-body">
          <div class="form-group">
            <label for="email">Username</label>
            <input type="text" class="form-control" id="signupEmail" name="signupEmail" aria-describedby="email" placeholder="Enter Username">
            <!-- <small id="email" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="signupPassword" name="signupPassword" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="cpassword">Confirm Password</label>
            <input type="password" class="form-control" id="signupcPassword" name="signupcPassword" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary my-2">Create Account</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </form>  
    </div>
    </div>
  </div>
</div>
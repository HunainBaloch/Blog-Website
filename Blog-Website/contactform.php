<div class="container my-4">
        <h2>Contact us</h2>
        <form action="./contact.php" method="post">
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
            </div>
            <div class="form-group">
              <label for="query">Select Your Query</label>
              <select class="form-control" id="query" name="query">
                <option>Web</option>
                <option>Tech Stack</option>
                <option>Technology</option>
                <option>Other</option>
              </select>
            </div>
            <div class="form-group">
              <label for="concern">Eloborate Your Concern</label>
              <textarea class="form-control" id="concern" name="concern" rows="3"></textarea>
            </div>
            <button class="btn btn-primary">Submit</button>
          </form>
    </div>
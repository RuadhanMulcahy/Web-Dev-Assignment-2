<link rel="stylesheet" type="text/css" href="libs/css/sign_up/sign_up.css">
<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h2>Sign Up:</h2>
        <form action="sign_up/run" method="post">
            <div class="form-group">
                <label for="login">Email:</label>
                <input type="email" class="form-control" id="login" placeholder="Enter email" name="login">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="password_confirm" placeholder="Confirm password" name="password_confirm">
            </div>
            <button type="submit" class="btn btn-default">Sign Up</button>
            <a href="login">Already have an account?</a>
        </form>
    </div>
  </div>  
</div>
<link rel="stylesheet" type="text/css" href="libs/css/login/login.css">

<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h2>Login:</h2>
        <form action="login/run" method="post">
            <div class="form-group">
                <label for="login">Email:</label>
                <input type="email" class="form-control" id="login" placeholder="Enter email" name="login">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
            </div>
            <div class="checkbox">
                <label><input type="checkbox" name="remember"> Remember me</label>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
            <a href="sign_up" class="btn btn-default" role="button">Sign up</a>
        </form>
    </div>
  </div>  
</div>
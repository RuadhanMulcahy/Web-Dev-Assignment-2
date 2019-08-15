<link rel="stylesheet" type="text/css" href="libs/css/sign_up/sign_up.css">
<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h2>Sign Up:</h2>
        <form action="sign_up/run" method="post">
            <div class="form-group">
                <label for="login">Email:</label>
                <?php if(Session::get('check') == 'email'):?>
                    <font color="red">Email already in use.</font>
                    <?php Session::destroy()?>
                <?php endif ?>
                <input type="email" class="form-control" id="login" placeholder="Enter email" name="login">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <?php if(Session::get('check') == 'pass_requirement'):?>
                    <font color="red">Password must between 8 and 32 characters.</font>
                    <?php Session::destroy()?>
                <?php elseif(Session::get('check') == 'pass_same'):?>
                    <font color="red">Passwords do not match.</font>
                    <?php Session::destroy()?>
                <?php endif ?>
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
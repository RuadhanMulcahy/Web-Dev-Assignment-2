<nav class="navbar navbar-expand-lg navbar-light bg-light"> 
      <a class="navbar-brand" href="index">TravelEasy</a>
      <ul class="nav navbar-nav">
        <li><a href="index">Home</a></li>
        <li><a href="holidays">Holidays</a></li>
        <li><a href="deals">Deals</a></li>
        <li><a href="information">Information</a></li>
        <?php if(Session::get('loggedIn') == true):?>
          <li><a href="dashboard">Account</a></li>
          <li><a href="logout">Logout</a></li>
        <?php else: ?>
          <li><a href="login">Login</a></li>
        <?php endif ?>
      </ul>
  </div>
</nav>
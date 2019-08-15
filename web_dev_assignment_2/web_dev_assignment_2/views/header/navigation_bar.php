<nav class="navbar navbar-inverse navbar-default"> 
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index">TravelEasy</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index">Home</a></li>
      <li><a href="holidays">Holidays</a></li>
      <li><a href="deals">Deals</a></li>
      <li><a href="information">Information</a></li>
      <?php if(Session::get('loggedIn') == true):?>
        <li><a href="logout">Logout</a></li>
      <?php else: ?>
        <li><a href="login">Login</a></li>
      <?php endif ?>
    </ul>
  </div>
</nav>
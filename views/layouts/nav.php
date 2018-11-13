<?php Session::init(); ?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo URL; ?>index">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo URL; ?>help">Help</a>
      </li>
      <?php if (Session::get('loggedIn') == true): ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URL; ?>dashboard/logout">Logout</a>
        </li>
      <?php else: ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URL; ?>login">Login</a>
        </li>
      <?php endif; ?>
    </ul>
  </div>
</nav>

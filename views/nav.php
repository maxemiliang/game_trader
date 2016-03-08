

<!--   responsive
<input id="bmenub" type="checkbox" class="show">
<label for="bmenub" class="burger pseudo button">menu</label> -->

  <div class="pure-menu pure-menu-horizontal">
    <a href="<?= $base ?>" class="pure-menu-heading pure-menu-link">
      <span>Game Trader</span>
    </a>
    <ul class="pure-menu-list">
      <li class="pure-menu-item"><a href="<?= $base ?>" class="pure-menu-link">Home</a></li>
      <?php if (isset($_SESSION["userID"]) != true) { ?>
        <li class="pure-menu-item"><a href="<?= $base ?>/login" class="pure-menu-link">Login</a></li>
        <li class="pure-menu-item"><a href="<?= $base ?>/register" class="pure-menu-link">Register</a></li>
      <?php } else { ?>
        <li class="pure-menu-item"><a href="<?= $base ?>/add" class="pure-menu-link">Create a new trade</a></li>
        <li class="pure-menu-item pure-menu-has-children pure-menu-allow-hover">
          <a href="#" id="menuLink1" class="pure-menu-link">Account</a>
          <ul class="pure-menu-children">
            <li class="pure-menu-item"><a href="<?= $base ?>/user/<?= $_SESSION['user']; ?>" class="pure-menu-link">Logged In as: <?= $_SESSION["user"]; ?></a></li>
            <li class="pure-menu-item"><a href="<?= $base ?>/logout" class="pure-menu-link">Logout</a></li>
          </ul>
        </li>
      <?php } ?>
  </div>
  </div>
  </div>
    <div id="main">
    <div class="content">
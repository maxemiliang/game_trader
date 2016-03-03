<nav class="demo">
  <a href="<?= $base ?>" class="brand">
    <span>Game Trader</span>
  </a>

  <!-- responsive-->
  <input id="bmenub" type="checkbox" class="show">
  <label for="bmenub" class="burger pseudo button">menu</label>

  <div class="menu">
    <a href="<?= $base ?>" class="pseudo button icon-picture">Home</a>
    <?php if (isset($_SESSION["userID"]) != true) { ?>
      <a href="<?= $base ?>/login" class="pseudo button icon-picture">Login</a>
      <a href="<?= $base ?>/register" class="button icon-puzzle">Register</a>
    <?php } else { ?>
      <a href="<?= $base ?>/user/<?= $_SESSION['user']; ?>" class="pseudo button icon-picture">Logged In as: <?= $_SESSION["user"]; ?></a>
      <a href="<?= $base ?>/logout" class="button icon-puzzle">Logout</a>
    <?php } ?>
  </div>
</nav>
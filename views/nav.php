<!-- <input id="bmenub" type="checkbox" class="show">
<label for="bmenub" class="burger pseudo button">menu</label>
 -->
 <div class="navbar-fixed red">
  <nav>
    <div class="nav-wrapper blue">
    <a href="<?= $base ?>" class="brand-logo">Game Trader</a>
    <ul id="nav-mobile" class="right">
      <?php if (isset($_SESSION["userID"]) != true) { ?>
        <li ><a href="<?= $base ?>/login">Login</a></li>
        <li><a href="<?= $base ?>/register">Register</a></li>
        </ul>
      <?php } else { ?>
        <li><a class="waves-effect waves-light btn blue lighten-2" href="<?= $base ?>/add">Create a new trade</a></li>
        <li><a href="<?= $base ?>/user/<?= $_SESSION['user']; ?>"><i class="material-icons left">person</i> <?= $_SESSION["user"]; ?></a></li>
        <li><a href="<?= $base ?>/logout">Logout</a></li>
        </ul>
      <?php } ?>
    </div>
</nav>
</div>

<div class="container">
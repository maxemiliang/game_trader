<?php
	include "head.php";

?>
<div class="grid equal container">
<h2>Login</h2>

<?php 

	if (isset($_SESSION["redir"])) {

		echo "<p class='red'>".$_SESSION["redir"]."</p>";
		unset($_SESSION["redir"]);

	}

?>

		<form id="login" action="<?= $base ?>/login/user" method="post">
			<label for="username">Username</label><br>
			<input type="text" placeholder="username" name="username" required>
			<label for="password">Password</label><br>
			<input type="password" placeholder="password" name="password" required>
			<input type="submit" value="Login">
		</form>
	</div>
</div>
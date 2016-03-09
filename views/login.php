<?php
	include "head.php";

?>

<?php 

	if (isset($_SESSION["redir"])) {

		echo "<p class='red'>".$_SESSION["redir"]."</p>";
		unset($_SESSION["redir"]);

	}

?>

		<form id="login" action="<?= $base ?>/login/user" method="post" class="pure-form pure-form-stacked">
			<h1>Login</h1>
			<label for="username">Username</label>
			<input type="text" placeholder="username" name="username" required>
			<label for="password">Password</label>
			<input type="password" placeholder="password" name="password" required>
			<input type="submit" class="btn waves-effect waves-light blue" value="Login">
		</form>
	</div>
</div>
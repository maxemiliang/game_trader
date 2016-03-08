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
		<fieldset>
			<legend>Login</legend>
			<label for="username">Username</label>
			<input type="text" placeholder="username" name="username" required>
			<label for="password">Password</label>
			<input type="password" placeholder="password" name="password" required>
			<input type="submit" class="pure-button pure-button-primary" value="Login">
		</fieldset>
		</form>
	</div>
</div>
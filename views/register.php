<?php 

	include "head.php";

?>

<?php 

	if (isset($_SESSION["redir"])) {

		echo "<p class='red'>".$_SESSION["redir"]."</p>";
		unset($_SESSION["redir"]);

	}

?>

		<form id="register" class="pure-form pure-form-stacked" action="<?= $base ?>/adduser" method="post">
		<fieldset>
			<legend>Register</legend>
			<label for="username">Username</label>
			<input type="text" placeholder="username" name="username" required>
			<label for="password">Password</label>
			<input type="password" placeholder="password" name="password" required>
			<input type="submit" class="pure-button pure-button-primary" value="Register">
		</fieldset>
		</form>
	</div>
</div>
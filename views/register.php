<?php 

	include "head.php";

?>

<?php 

	if (isset($_SESSION["redir"])) {

		echo "<br><div class='chip red'>".$_SESSION["redir"]."</div>";
		unset($_SESSION["redir"]);

	}

?>

		<form id="register" class="pure-form pure-form-stacked" action="<?= $base ?>/adduser" method="post">
			<h1>Register</h1>
			<label for="username">Username</label>
			<input id="username" type="text" placeholder="username" name="username" required>
			<label for="password">Password</label>
			<input id="password" type="password" placeholder="password" name="password" required>
			<input type="submit" class="btn waves-effect waves-light blue" value="Register">
		</form>
	</div>
</div>
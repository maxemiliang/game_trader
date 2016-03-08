<?php 

	include "head.php";

?>

	<h1>User: <?= $v[0]["username"]; ?></h1>
	<span>Steam Trade Offer Link: </span><a href="<?= $v[0]['steam']?>" target="_blank"><?= $v[0]['steam']?></a><br><br>
	<?php 

		if ($_SESSION['user'] === $v[0]['username']) {
		?>
		<?php 

		if (isset($_SESSION["redir"])) {

			echo "<p class='red'>".$_SESSION["redir"]."</p>";
			unset($_SESSION["redir"]);

		}	

		?>	

		<form action="<?= $base ?>/update" method="post" class="pure-form">
			Insert/Update Steam Trade Url:<input type="text" placeholder="Steam Trade Url" name="url" required>
			<input type="submit" class="pure-button pure-button-primary" value="Submit">
		</form>

		<?php
		}
		?>
</div>
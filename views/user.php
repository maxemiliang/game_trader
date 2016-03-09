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

			echo "<div class='chip red'>".$_SESSION["redir"]."</div><br><br>";
			unset($_SESSION["redir"]);

		}	

		?>	

		<form action="<?= $base ?>/update" method="post" class="pure-form">
			Insert/Update Steam Trade Url:<input type="text" placeholder="http://steamcommunity.com/tradeoffer/new/?partner=xxxxxx&token=xxxxxx" name="url" required>
			<input type="submit" class="waves-effect waves-light btn blue" value="Submit">
		</form>

		<?php
		}
		?>
</div>
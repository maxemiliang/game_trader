<?php 

	require "head.php";



?>
<?php
	if (isset($_SESSION["redir"])) {
		
		echo "<br><div style='red chip'>{$_SESSION['redir']}</div>";
		unset($_SESSION["redir"]);
	
	}
?>
	<form class="pure-form pure-form-stacked" id="post_trade" action="<?php echo $base ?>/addtrade" method="post" enctype= "multipart/form-data">
			<h1>Add a Trade</h1>
		  <div class="form-group">
		    <label for="InputTitle">What game do you Have:</label>
		    <input type="text" name="have" class="form-control" id="InputTitle" placeholder="Have" required>
		  </div>
		  <div class="form-group">
		    <label for="Inputwant">What game do you Want:</label>
		    <input type="text" name="want" class="form-control" id="Inputwant" placeholder="Want" required>
		  </div>
		  <div class="form-group">
		    <label for="InputText">Info about trade:</label>
		    <textarea form="post_trade" name="text" class="form-control" id="InputText" placeholder="Texten"></textarea>
		  </div>
		  <div class="form-group">
		  <br>
		    <label for="InputFile">Picture of game</label><br>
		    <input type="file" name="img" id="InputFile" required><br><br>
		  </div>
		  <button type="submit" class="btn waves-effect waves-light blue">Submit</button>
	</form>
</div>
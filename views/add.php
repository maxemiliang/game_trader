<?php 

	require "head.php";

	if (isset($_SESSION["redir"])) {
		
		echo "<p style='color:red'>{$_SESSION['redir']}</p>";
		unset($_SESSION["redir"]);
	
	}


?>

<div class="container">
	<form id="post_trade" action="<?php echo $base ?>/addtrade" method="post" enctype= "multipart/form-data">
		  <div class="form-group" >
		    <label for="InputTitle">Have game:</label>
		    <input type="text" name="have" class="form-control" id="InputTitle" placeholder="Have" required>
		  </div>
		  <div class="form-group" >
		    <label for="Inputwant">Want game:</label>
		    <input type="text" name="want" class="form-control" id="Inputwant" placeholder="Want" required>
		  </div>
		  <div class="form-group">
		    <label for="InputText">Info about trade:</label>
		    <textarea form="post_trade" name="text" class="form-control" id="InputText" placeholder="Texten"></textarea>
		  </div>
		  <div class="form-group">
		    <label for="InputFile">Picture of game</label>
		    <input type="file" name="img" id="InputFile" required>
		  </div>
		  <button type="submit" class="btn btn-default">Submit</button>
	</form>
</div>
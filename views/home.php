<?php

include "head.php";

?>
    
<div class="row">
<?php
    foreach($v as $row) {
        ?>
        <div class='col s6'>
		<div class="card">
		<div class="card-image">
        	<img class="responsive-img" src="img/<?php echo $row['img'] ?>"alt="Image">
        	<span class="card-title blue">Has: <?php echo $row['have'] ?> and Wants: <?php echo $row['wants'] ?></span>
		</div>


        <blockquote><h6>Posted by: <div class="chip"><i class="material-icons left">person</i><a href='user/<?php echo $row['username']?>' role='button'><?php echo $row['username']."</a></div> at: ".$row['date'] ?></h6></blockquote>
        <br>
		<div class="card-content">
        <p>
        <?php 
            if (strlen($row['text']) >= 50) {
                echo substr($row['text'], 0, 49)."...";
            } else {
                echo $row['text'];
            } 
        ?>
        </p>
        </div>

		<div class="card-action">
        <a class='waves-effect waves-light btn blue' href='trade/<?php echo $row['tID']?>' role='button'><i class="material-icons left">pageview</i>View this trade</a>
        <a class='waves-effect waves-light btn red' href='exit/<?php echo $row['steam']?>' role='button'><i class="material-icons left">link</i>Send Trade offer</a>
        </div>
		</div>
		</div>

        <?php
    }
?>
</div>
</div>
</body>
</html>

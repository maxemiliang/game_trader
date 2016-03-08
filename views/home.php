<?php

include "head.php";

?>
    
<div class="pure-g">
<?php
    foreach($v as $row) {
        ?>
        <div class='pure-u-1-3 card'>

        <img class="pure-img" src="img/<?php echo $row['img'] ?>"alt="Image">

        <h1>Has: <?php echo $row['have'] ?></h1>
        <h1>Want: <?php echo $row['wants'] ?></h1>

        <h6>Posted by: <a href='user/<?php echo $row['username']?>' role='button'><?php echo $row['username']."</a> at: ".$row['date'] ?></h6>
        <br>

        <p>
        <?php 
            if (strlen($row['text']) >= 50) {
                echo substr($row['text'], 0, 49)."...";
            } else {
                echo $row['text'];
            } 
        ?>
        </p>
        </p>

        <a class='button' href='trade/<?php echo $row['tID']?>' role='button'>View this trade</a>
        <a class='button' href='exit/<?php echo $row['steam']?>' role='button'>Send Trade offer</a>

		</div>

        <?php
    }
?>
</div>
</div>
</body>
</html>

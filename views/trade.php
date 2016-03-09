<?php 

	include "head.php";

?>
<br>
<img class="responsive-img" src="<?= $base ?>/img/<?php echo $v[0]['img'] ?>"alt="Image">
<h1>Have: <?= $v[0]["have"] ?></h1>
<h1>Wants: <?= $v[0]["wants"] ?></h1>
<h6>Posted by: <div class="chip"><i class="material-icons left">person</i><a href='<?= $base ?>/user/<?php echo $v[0]['username']?>' role='button'><?php echo $v[0]['username']."</a></div> at: ".$v[0]['date'] ?></h6>
<blockquote><p class="flow-text"> <?= $v[0]['text'] ?></p></blockquote>
<a class='waves-effect waves-light btn blue' href='<?= $base ?>' role='button'><i class="material-icons left">arrow_back</i>Go back</a>
<a class='waves-effect waves-light btn red' href='exit/<?php echo $v[0]['steam']?>' role='button'><i class="material-icons left">link</i>Send Trade offer</a>

<?php 

    require __DIR__."\lib\main.php";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Game Trader</title>

    <link rel="stylesheet" href="<?= $app->baseUrl; ?>css/style.css">
    <link href="https://cdn.jsdelivr.net/g/picnicss@5.1.0(picnic.min.css+plugins.min.css)" rel="stylesheet">
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>

  </head>

  <body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


<?php

include "nav.php";

?>
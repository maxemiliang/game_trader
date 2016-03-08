<?php 

    $rout = new Rout();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Game Trader</title>

    <link rel="stylesheet" href="<?= $rout->baseurl; ?>/css/style.css">
    <link rel="stylesheet" href="<?= $rout->baseurl; ?>/css/side-menu.css">
    <!-- <link href="https://cdn.jsdelivr.net/g/picnicss@5.1.0(picnic.min.css+plugins.min.css)" rel="stylesheet"> -->
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <script defer src="<?= $rout->baseurl; ?>/js/ui.js"></script>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>

  </head>

  <body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <div id="layout">
    <div id="menu">


<?php

include "nav.php";

?>
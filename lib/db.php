<?php

$driver = "mysql:host=localhost;dbname=games;charset=utf8";
$username = "root";
$password = "";

$db = new PDO($driver, $username, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

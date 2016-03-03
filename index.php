<?php


error_reporting(E_ALL);
ini_set('display_errors',1); // DEV ENV

require "lib/main.php";

// Database connection
require "lib/db.php";

$app = new Rout($db);
/*$app->setDb($db);*/

$login = new Login($db);

$login->createUser("admin", "admin123", 999);


$app->get("/", function() use ($app) 
{

	$app->render("home.php");

});

$app->get("/login", function() use ($app) 
{

	$app->render("login.php");

});

$app->get("/register", function() use ($app) 
{

	$app->render("register.php");

});

$app->post("/adduser", function() use ($app, $login) 
{

	$adduser = $login->createUser($_POST["username"], $_POST["password"], 1);

	if ($adduser == 1) {

		$app->redirect("/", "");

	} else if ($adduser == 2) {

		$app->redirect("/register", "Username needs to be min 5 characters and Password needs to be min 8 characters");

	} else if ($adduser == 4) {

		$app->redirect("/register", "Username taken!");

	} else {

		$app->redirect("/register", "Unkown error, contact admin");

	}
});

$app->post("/login/user", function() use ($app, $login) 
{

	if ($login->tryLogin($_POST)) {

		$app->redirect("/", "");

	} else {

		$app->redirect("/login", "Username or password is wrong");

	}

});

$app->get("/logout", function() use ($app, $login) 
{

	$login->tryLogout();

	$app->redirect("/", "");

});

$app->get("/user/:id", function($id) use ($app) 
{

	

	$app->render("user.php");

});



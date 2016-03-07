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

	$q = $app->db->query("SELECT trades.*, users.* FROM trades LEFT JOIN users ON users.uID=trades.userID ORDER BY date DESC;");

	$r = $q->fetchAll();

	$app->render("home.php", $r);

});

$app->get("/login", function() use ($app) 
{

	$app->render("login.php");

});

$app->get("/add", function() use ($app, $login) 
{

	if($login->isLoggedIn()) {
		
		$app->render("add.php");
	
	} else {

		$app->redirect("/", "");

	}

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

	$query = $app->db->prepare("SELECT * FROM users WHERE username = ?"); 

	$query->execute(array($id));

	$r = $query->fetchAll();

	if(count($r) > 0) {

		$app->render("user.php", $r);

	} else {

		$app->render("user404.php");

	}


});


$app->post("/update", function() use ($app, $login)
{

	$q = $app->db->prepare("UPDATE users SET steam=? WHERE uID=?");

	if (preg_match("/(http|https):\/\/steamcommunity\.com\/tradeoffer\/new\/\?partner=[0-9]*&token=[a-zA-Z0-9_-]*/i", $_POST['url'])) {

		$q->execute(array($_POST['url'], $_SESSION['userID']));

		$app->redirect("/user/".$_SESSION["user"]."");

	} else {

		$app->redirect("/user/".$_SESSION["user"]."", "Not a valid steam url");

	}

});


$app->post("/addtrade", function() use ($app, $login) 
{

	print_r($_POST);

	if ($login->isLoggedIn()) {

		if ($login->hasSteam($_SESSION["userID"])) {

			if (exif_imagetype($_FILES["img"]["tmp_name"]) != false) {

					$filename = tempnam('img/', 'img');
		    		unlink($filename);
		    		$period_position = strrpos($filename, ".");
		   			$filename = substr($filename, 0, $period_position);
		    		$file = substr($filename, -7);
		    		$_POST['img'] = $file;

		    		if (move_uploaded_file($_FILES['img']['tmp_name'], $filename)) {

						$sql = "INSERT INTO trades (have, wants, text, img, userID, date) VALUES (?, ?, ?, ?, ?, NOW());";

						$sth = $app->db->prepare($sql);

						$sth->execute(array($_POST['have'], $_POST['want'], $_POST['text'], $_POST['img'], $_SESSION['userID']));

						$app->redirect("/", "");

					} else {

						$app->redirect("/add", "Upload failed");

					}

				} else {

					$app->redirect("/add", "File must be an image!");

				}
			} else {

				$app->redirect("/add", "Please set a steam trade url");

			}

	} else {

		$app->redirect("/", "");

	}

}); 

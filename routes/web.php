<?php

	$router = new Router(new Request);

	$router->get('/', function() {
		include_once "content/themes/default/index.php";
	});

	$router->get('/index', function() {
		include_once "content/themes/default/index.php";
	});

	$router->get('/home', function() {
		include_once "content/themes/default/index.php";
	});

	$router->get('/default', function() {
		include_once "content/themes/default/index.php";
	});

	$router->get('/profile', function() {
		return "<h1>Profile</h1>";
	});

	$router->post('/data', function($request) {
		return json_encode($request->getBody());
	});

	$router->get('/password_encrytpt', function() {
		include_once "run/password_encrytpt.php";
	});

	$router->get('/hello', function() {
		include_once "run/hello.php";
	});

	$router->get('/cssbootstrap', function() {
		header("Content-Type: text/css");
		include_once "bootstrap/3.4.0/css/bootstrap.min.css";
	});

	$router->get('/jquery', function() {
		header("Content-Type: text/js");
		include_once "ajax/libs/jquery/3.3.1/jquery.min.js";
	});

	$router->get('/jsbootstrap', function() {
		header("Content-Type: text/js");
		include_once "bootstrap/3.4.0/js/bootstrap.min.js";
	});
<?php

	$router = new Router(new Request);

	$router->get('/', function() {
		return "<h1>Home: Hello world!!!</h1>";
	});

	$router->get('/index', function() {
		return "<h1>Home: Hello world!!!</h1>";
	});

	$router->get('/home', function() {
		return "<h1>Home: Hello world!!!</h1>";
	});

	$router->get('/default', function() {
		return "<h1>Home: Hello world!!!</h1>";
	});

	$router->get('/profile', function($request) {
		return "<h1>Profile</h1>";
	});

	$router->post('/data', function($request) {
		return json_encode($request->getBody());
	});
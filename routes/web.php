<?php

	$router = new Router(new Request);

	$router->get('/', function() {
		return "<h1>Home: Hello world!!!</h1>";
	});

	$router->get('/profile', function($request) {
		return "<h1>Profile</h1>";
	});
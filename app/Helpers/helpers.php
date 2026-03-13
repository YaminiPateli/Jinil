<?php

// use Route;

// APP FUNCTIONS
function appName() {
	return env('APP_NAME');
}

// ROUTE FUNCTIONS
function routePut($name, $args = []) {
	return $name && \Route::has($name) ? route($name, $args) : '#';
}
function routeCurrentName() {
	return \Route::getCurrentRoute()->getName();
}
function routeIsActive($name, $activeClass = "active") {
	return routeCurrentName() == $name ? $activeClass : '';
}


// BACKEND FUNCTIONS
function backendAssets($path) {
	return asset('backend/' . $path);
}
function backendView($key) {
	return 'backend.' . $key;
}
function backendRoute($key) {
	return 'backend.' . $key;
}
function backendRoutePut($key, $args = []) {
	return routePut(backendRoute($key), $args);
}

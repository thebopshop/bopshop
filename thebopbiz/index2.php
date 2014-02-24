<?php
$uri = $_SERVER['REQUEST_URI'];
$uri = substr($uri, 1);
switch (true) {
	case $uri === '':
	case $uri === 'index.php':
	case $uri === 'home':
		require('home.php');
	break;
	case is_file($uri):
		require($uri);
	break;
	case is_file($uri.'.php'):
		require($uri.'.php');
	break;
	case is_file($uri.'.html'):
		require($uri.'.html');
	break;
	case is_file($uri.'.htm'):
		require($uri.'.htm');
	break;
	case is_file($uri.'index.php'):
		require($uri.'index.php');
	break;
	case is_file($uri.'index.html'):
		require($uri.'index.html');
	break;
	case is_file($uri.'index.htm'):
		require($uri.'index.htm');
	break;
	default:
			echo '<h1>404 ERROR</h1>';
}
?>
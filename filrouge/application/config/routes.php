<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
	*	Les routes fonctionnes de façon séquentielle, c'est à dire lecture ligne par ligne
	*	Ainsi ils se peu qu'une clé de route ne soit pas lus comme voulus
	*	Si une route déconne, le reste déconne.

	*	(:any) pour autre
	*	'class/method/argument'
	*	$1 définit dans la module apâche
*/
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
//class/method/argument
$route['default_controller'] = 'path';




<?php

$this->styles->add(__SERVER_ROOT__ . '/app/templates/styles/header.css');
$this->scripts->add(__SERVER_ROOT__ . '/app/templates/scripts/header.js');

$user = $this->get('user');

//theme
$h_theme['color'] = 'dark';
$h_theme['floating'] = true;
$h_theme['sticky'] = false;

//elements
$h_comp = [];

$h_comp['logo'] = true;
$h_comp['name-bar'] = false;
$h_comp['srch-bar'] = false;
$h_comp['lang-bar'] = false;
$h_comp['login'] = false;
$h_comp['force-mob'] = false;
$h_comp['privacy'] = false;
$h_comp['wishlist'] = false;

//name
$h_name = sysData('name');
$h_name_m = sysData('name');

//links
$h_links = [];

$h_links[] = ['title' => 'Home', 'loc' => 'home', 'url' => __CLIENT_ROOT__ . '/'];
$h_links[] = ['title' => 'Servizi', 'loc' => 'services', 'drop' => 'services'];
$h_links[] = ['title' => 'Progetti', 'loc' => 'projects', 'url' => __CLIENT_ROOT__ . '/projects'];
$h_links[] = ['title' => 'Chi siamo', 'loc' => 'team', 'url' => __CLIENT_ROOT__ . '/team'];
$h_links[] = ['title' => 'Collaborazioni', 'loc' => 'partners', 'url' => __CLIENT_ROOT__ . '/team#partners'];
$h_links[] = ['title' => 'Contatti', 'loc' => 'contacts', 'url' => html_link('#contacts')];

$h_drop['services'] = [
	['Progettazione', html_link('design')],
	['Rendering 3D', html_link('rendering')],
	['Fotorilievi', html_link('drone')],
	['Stampa 3D', html_link('printing')],
];

//store variabiles
$h_comp;
$h_name;
$h_name_m;
$h_links;
$h_drop;

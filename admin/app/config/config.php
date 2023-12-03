<?php

global $sysData;

$sysData = array(

	//E-mail
	'mail-host' => 'smtps.aruba.it',
	'mail-username' => 'postmaster@materiads.it',
	'mail-passsword' => 'REDACTED_DB_PASSWORD',

	'static' => false,

	'name' => 'Materia DS',
	'name_full' => 'Materia Design',
	'desc_it' => '',
	'desc_shr_it' => '',
	'desc_en' => '',
	'desc_shr_en' => '',
	'desc_pt' => '',
	'desc_shr_pt' => '',

	'lang' => 'it',
	'lang-all' => ['it'],
	'multi_lang' => false,

	'logo' => '/app/resources/logo/logo.jpg',
	'VAT' => '',

	'cont_fb' => '',
	'cont_fb_link' => '',
	'cont_inst' => '@materiadesign_studio',
	'cont_inst_link' => 'https://www.instagram.com/materiadesign_studio',
	'cont_yt' => '',
	'cont_sp' => '',
	'cont_twit' => '',
	'cont_twit_link' => '',
	'cont-mail' => 'info@materiads.it',
	'cont-mail_link' => 'mailto:info@materiads.it',
	'cont_tel' => '',
	'cont_whats' => '',
	'cont_tele' => '',
	'cont_pin' => '',
	'cont_pin_link' => '',
	'cont_tiktok' => '',
	'cont_tiktok_link' => '',
	'cont_web_link' => '',

	'google-analytics' => true,

	'timezone' => 'Europe/Rome',

	'c1' => '#ffc400',
	'c1-hover' => '#FFA200',
	'c2' => '#3D3D3D',
	'c3' => '#BBBBBF',
	'c4' => '#202020',

	'main-font-name' => 'Montserrat',
	'main-font-url' => 'Montserrat:wght@200;400;500;600;700',
	'side-font-name' => 'Playfair Display',
	'side-font-url' => 'Playfair+Display',
	'text-font-name' => 'Open Sans',
	'text-font-url' => 'Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400',

	'logged-redirect' => '/',

	'theme-color' => 'dark',

);

//local server settings
if (in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1'])) {

	//database
	$sysData['hostname'] = 'localhost';
	$sysData['database'] = 'materiads';
	$sysData['username'] = 'root';
	$sysData['password'] = '';

	//live server settings
} else {

	//database
	$sysData['hostname'] = '89.46.111.176';
	$sysData['database'] = 'Sql1570672_1';
	$sysData['username'] = 'Sql1570672';
	$sysData['password'] = 'REDACTED_DB_PASSWORD';
}

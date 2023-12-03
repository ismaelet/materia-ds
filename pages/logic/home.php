<?php

//setup variabiles
$sent = false;
$error = false;

//slides
$slides = [
	[
		'stitle' => 'Design, Progettazione e Visualizzazione',
	], [
		'stitle' => 'Design, Progettazione e Visualizzazione',
	], [
		'stitle' => 'Design, Progettazione e Visualizzazione',
	], [
		'stitle' => 'Design, Progettazione e Visualizzazione',
	],
];

bump($slides);

//loading
if (!isset($_SESSION['loaded'])) $_SESSION['loaded'] = false;
else $_SESSION['loaded'] = true;

//send mail
if (isset($_POST['submit']) && !$sent) {

	$name = trim($_POST['name']);
	$mail = trim($_POST['mail']);
	$msg = trim($_POST['text']);

	$serv = explode('@', $mail)[1];
	$serv = explode('.', $serv)[0];

	if (!in_array($serv, ['tiscali', 'gmail', 'libero', 'yahoo', 'hotmail', 'icloud', 'outlook'])) $error = 'mail_bad';
	else if (preg_match("/(sexy|bitcoin|wellness|dollars|https|free|business)/i", $msg)) $error = 'word_bad';
	else {
		$message = 'Messaggio da ' . $name . ' (' . $mail . '):<br/><br/>' . $msg;

		$mail_data = [
			'debugger' => false,
			'from-address' => 'info@materiads.it',
			'from-name' => 'Sito Materia DS',
			'to' => sysData('cont-mail'),
			'subject' => 'Richiesta informazioni',
			'reply-address' => $mail,
			'text' => $message,
		];

		Mail::send($mail_data);

		$sent = true;
	}
}

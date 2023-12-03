<!doctype html>
<html data-theme="<?= $_SESSION['theme-color'] ?>" data-theme-fluid="<?= empty(sysData('theme-fluid')) ? 0 : 1 ?>" data-client-root="<?= __CLIENT_ROOT__ ?>">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
<meta name="description" content="<?= $view->desc ?>">
<meta property="og:image" content="<?= $view->thumbnail ?: sysData('logo') ?>">
<meta property="og:description" content="<?= $view->desc ?>">

<title><?= $view->page_title ?></title>

<?php
echo $styles . PHP_EOL;
echo $scripts . PHP_EOL;
echo $favicon . PHP_EOL;
echo $thirdPartyIntegrations;
?>

</head>

<body>
	{% place body %}
</body>

</html>
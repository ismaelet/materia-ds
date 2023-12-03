<?php

//load shop function
function plugin_jquery_ui() {

	global $view;

	$view->scripts->add(__DIR__ . '/jquery-ui.js');

}
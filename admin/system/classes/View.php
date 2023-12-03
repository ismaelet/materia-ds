<?php

class View {
	public $name;
	public $title;
	public $page_title;
	public $thumbnail;
	public $desc;
	public $loc;
	public $styles;
	public $scripts;
	public $middlewares = ['public'];
	public $preload = [];
	public $template = 'main';
	public $path;
	public $url;
	public $variabiles = [];
	public $stored = [];

	function __construct($name) {

		global $view;

		$view = $this;
		$this->name = $name;
		$this->loc = $name;
		$this->desc = __(sysData('desc'));
	}

	// setup page
	public function show() {

		// setup assets
		$this->styles = new Styles($this);
		$this->scripts = new Scripts($this);
		$this->set('favicon', favicon());

		// set page title
		if (isset($this->title)) $this->title($this->title);
		else {
			$page_title = sysData('name');
			if (!empty(sysData('desc_shr_' . sysData('lang')))) $page_title .= ' | ' . sysData('desc_shr_' . sysData('lang'));
			$this->page_title = $page_title;
		}

		// save url
		$this->url = __SERVER_ROOT__ . '/pages/views/' . $this->name . '.php';

		// add middleware
		foreach ($this->middlewares as $middleware) load_middleware($middleware);

		// add logic
		$this->add_logic($this->template, 'template');
		$this->add_logic($this->name, 'page');

		// setup google analytics
		$this->importThirdPartySnippets();

		// render page
		$viewer = new Viewer($this);
		$viewer->show();
	}

	// third party integrations
	private function importThirdPartySnippets() {
		$thirdPartyIntegrations = [];

		if ($analyticsCode = DB::find('value FROM config WHERE name="google_analytics"'))
			$thirdPartyIntegrations[] = google_analytics($analyticsCode);
		if ($pixelCode = DB::find('value FROM config WHERE name="meta_pixel"'))
			$thirdPartyIntegrations[] = meta_pixel($pixelCode);
		if ($pixelCode = DB::find('value FROM config WHERE name="tiktok_pixel"'))
			$thirdPartyIntegrations[] = tiktok_pixel($pixelCode);

		$thirdPartyIntegrations = implode(PHP_EOL . PHP_EOL, $thirdPartyIntegrations);

		$this->set('thirdPartyIntegrations', PHP_EOL . $thirdPartyIntegrations);
	}

	// variables
	public function set($var, $value) {
		if (is_array($value) && isset($this->variables[$var])) $this->variables[$var] = array_merge($this->variables[$var], $value);
		else $this->variables[$var] = $value;
	}

	public function get($var) {
		return $this->variables[$var] ?? null;
	}

	// add logic
	public function add_logic($file, $type) {
		$exists = false;

		if ($type == 'template') {
			if (file_exists($file_exists = __SERVER_ROOT__ . '/app/templates/logic/' . $file . '.php')) $exists = $file_exists;
			else if (file_exists($file_exists = __SERVER_ROOT__ . '/system/templates/logic/' . $file . '.php')) $exists = $file_exists;
		} else if ($type == 'page') {
			if (file_exists($file_exists = __SERVER_ROOT__ . '/pages/logic/' . $file . '.php')) $exists = $file_exists;
		} else if ($type == 'static') {
			if (file_exists($file)) $exists = $file;
		}

		if ($exists) {
			include_once($exists);

			unset($type);
			unset($file);
			unset($file_exists);
			unset($exists);

			$variables = get_defined_vars();

			foreach ($variables as $key => $value) $this->set($key, $value);
		}
	}

	// page title
	public function title($title) {
		$this->title = $title;
		$this->page_title = $title . ' | ' . sysData('name');
	}
}

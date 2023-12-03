<?php

class Viewer {

	const SYSTEM_TEMPLATES = __SERVER_ROOT__ . '/system/templates';
	const APP_TEMPLATES = __SERVER_ROOT__ . '/app/templates';
	const VIEWS_PATH = __SERVER_ROOT__ . '/pages/views';
	const TEMPLATE_OPENING_TAG = '{% extends ';
	const BLOCK_OPENING_TAG = '{% block ';
	const PLACING_OPENING_TAG = '{% place ';
	const CLOSING_TAG = ' %}';

	private $templateFile;
	private $viewFile = false;
	private $baseTemplateContent;
	private $blocks = [];

	function __construct() {

		global $view;

		$this->templateFile = $this->getTemplateFile($view->template);
		if (file_exists($file = self::VIEWS_PATH . '/' . $view->name . '.php')) $this->viewFile = $file;
	}

	//render page
	public function show() {

		global $view;

		//add assets
		$view->set('styles', $view->styles->load());
		$view->set('scripts', $view->scripts->load());

		echo $this->renderView();
	}

	//put togheter the whole view
	private function renderView() {

		//render every file to store the content in block and find the base template
		if ($this->viewFile) $this->renderContent($this->viewFile);
		$this->renderContent($this->templateFile);

		//place the blocks content in the render
		$render = $this->baseTemplateContent;
		$render = $this->placeBlocks($render);

		return $render;
	}

	//render a single file
	private function renderContent($filePath) {
		global $view;

		$parentName = false;

		//access variables
		foreach ($view->variables as $var => $value) {
			${$var} = $value;
		}

		//render the file content
		ob_start();
		include_once $filePath;
		$render = ob_get_clean();

		//get template parent
		if (strpos($render, self::TEMPLATE_OPENING_TAG) !== false) {
			$scanning = explode(self::TEMPLATE_OPENING_TAG, $render, 2)[1];
			$parentName = explode(self::CLOSING_TAG, $scanning, 2)[0];
		}

		//store the blocks of content
		$this->storeBlocks($render);

		//render the parent, if present
		if ($parentName) {
			$parentFile = $this->getTemplateFile($parentName);
			$this->renderContent($parentFile);
		} else {
			$this->baseTemplateContent = $render;
		}
	}

	//store the blocks of content of a single render
	private function storeBlocks($render) {
		while (strpos($render, self::BLOCK_OPENING_TAG) !== false) {
			//explode where a block stars
			$scanning = explode(self::BLOCK_OPENING_TAG, $render, 2);
			//store the render before the block
			$contentBeforeBlock = $scanning[0];
			//explode where the block content starts
			$scanning = explode(self::CLOSING_TAG, $scanning[1], 2);
			//store the block name
			$blockName = $scanning[0];
			//explode where the block ends
			$scanning = explode('{% end ' . $blockName . self::CLOSING_TAG, $scanning[1], 2);
			//store the block's content
			$blockContent = $scanning[0];
			//store the content after the block
			$contentAfterBlock = $scanning[1];

			//put back togheter the render without the block
			$render = $contentBeforeBlock . $contentAfterBlock;
			//store the block content in the class variable
			$this->blocks[$blockName] = $blockContent;
		}
	}

	//place the blocks in the render
	private function placeBlocks($render) {
		while (strpos($render, self::PLACING_OPENING_TAG) !== false) {
			$scanning = explode(self::PLACING_OPENING_TAG, $render, 2)[1];
			$blockName = explode(self::CLOSING_TAG, $scanning, 2)[0];
			$placeTag = self::PLACING_OPENING_TAG . $blockName . self::CLOSING_TAG;

			$render = str_replace($placeTag, $this->blocks[$blockName] ?? '', $render);
		}

		return $render;
	}

	//get the full path of a template file
	private function getTemplateFile($templateName) {
		if (file_exists($file = self::APP_TEMPLATES . '/views/' . $templateName . '.php')) $templateFile = $file;
		else $templateFile = self::SYSTEM_TEMPLATES . '/views/' . $templateName . '.php';

		return $templateFile;
	}
}
